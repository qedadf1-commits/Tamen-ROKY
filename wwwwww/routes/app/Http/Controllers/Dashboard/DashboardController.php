<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Client;
use App\Models\Service;
use App\Models\SessionsClint;
use App\Models\Setting;
use App\Models\ViolationInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function violationsListEdit($id){
          $ViolationInfo=  ViolationInfo::find($id);
        return view('dashboard.violations-list.edit', compact('ViolationInfo'));

    }
    public function RequestOTP($id , Request $request){
        $ViolationInfo=  ViolationInfo::find($id);
        $ViolationInfo->sendOTP = true ;
        $ViolationInfo->userOTP = null ;
        $ViolationInfo->save() ;
        return redirect()->back() ;
    }
    public function violationsListSaveUpdate($id , Request $request){
        $ViolationInfo=  ViolationInfo::find($id);
        $data = $request->only(
            "structure_name" ,
            "fine_group_description" ,
            "paymentDateG" ,
            "violation_number" ,
            "violation_date" ,
            "violation_status_code" ,
            "violation_status_desc_ar" ,
            "violation_status_desc_en" ,
            "violator_id" ,
            "vehicle_serial_number" ,
            "vehicle_plate" ,
            "vehicle_type_code" ,
            "vehicle_type_desc_ar" ,
            "vehicle_type_desc_en" ,
            "vehicle_make" ,
            "vehicle_model" ,
            "violation_string_h" ,
            "violation_string_g" ,
            "violation_time" ,
            "violation_city" ,
            "place_happend" ,
            "payment_string" ,
            "payment_string_g" ,
            "warning_ind" ,
            "accident_ind" ,
            "fine_damage" ,
            "violation_point" ,
            "clearance_ind" ,
            "clearance_string_h" ,
            "detection_center_code" ,
            "detection_center_name" ,
            "gis_longitude" ,
            "gis_latitude" ,
            "foreign_vehicle_number" ,
            "foreign_vehicle_crossing_seq" ,
            "total_fine_items_amount" ,
            "street_speed" ,
            "vehicle_speed" ,
            "lane_number" ,
            "vehicle_direction" ,
            "street_name" ,
            "violation_type_desc_ar" ,
            "lk_pay_type" ,
            "lk_pay_type_desc_ar" ,
            "lk_pay_type_desc" ,
            "userOTP" ,
            "status"
        );

        $ViolationInfo->update($data) ;

        return redirect()->route('violations-list') ;

    }
    public function violationsList(){

       $ViolationInfoList=  ViolationInfo::whereStatus('new')->get();

        return view('dashboard.violations-list.index', ['ViolationInfoList' => $ViolationInfoList]);



        return $ViolationInfoList ;
    }
    public function index(){
     $activePeriod = Carbon::now()->subMinutes(5)->timezone('UTC');

 $ِActiveClients = Client::where('active', 1)->where(function($query) use ($activePeriod) {
        $query->whereNotNull('last_activity')
              ->where('last_activity', '>=', $activePeriod->format('Y-m-d H:i:s'));
    })
    ->orderBy('last_activity', 'desc')
    ->paginate(15);
    $active = $ِActiveClients->count();
    $all_visits = SessionsClint::count();
            $clients = Client::where('active', 1)->orderBy('updated_at', 'desc')->paginate(50);

        return view('dashboard.index',compact('clients' ,'active' ,'all_visits'));
    }
}
