@extends('dashboard.layout.master')

@section('content')

<h3 class="page-title"> عملائنا
</h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">ارسال OTP </span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="form_sample_3" class="form-horizontal">
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$client->id}}">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الاسم
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{ $client->first_name .' '.$client->last_name  }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الرقم القومى
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{ $client->national_number }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3"> رقم الهاتف
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control" style="direction:ltr"
                                    value="{{ $client->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> رقم ال visa
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control" style="direction:ltr"
                                    value="{{ $client->visa_number }}">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            @if($client->end_point == 10 )
                                <label class="control-label col-md-3"> رقم OTP الثانى
                                    <span class="required" aria-required="true"> </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="confirmed_otp" value="{{$client->second_confirmed_otp}}"
                                        data-required="1" class="form-control">
                            @else
                                <label class="control-label col-md-3"> رقم OTP الاول
                                    <span class="required" aria-required="true"> </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="confirmed_otp" value="{{$client->confirmed_otp}}"
                                        data-required="1" class="form-control">
                            @endif
                                    </div>
                        </div>
                </form>
                <div class="row d-flex justify-content-between text-center">
                    <div class="col-md-1">
                        <form method="post" action="{{route('clients.doEvent',$client->id) }}"
                            >
                            @csrf
                            <input type="hidden" name="id" value="{{$client->id}}">
                            <input type="hidden" name="event" value="{{$client->end_point}}">
                            <input type="hidden" name="confirmed" value="1">
                            <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"
                               > موافق </button>
                        </form>
                    </div>
                    <div class="col-md-1">
                        <form method="post" action="{{route('clients.doEvent',$client->id)}}"
                            >
                            @csrf
                            <input type="hidden" name="id" value="{{$client->id}}">
                            <input type="hidden" name="event" value="{{$client->end_point}}">
                            <input type="hidden" name="confirmed" value="0">
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                رفض</button>
                        </form>
                    </div>
                    @if($client->end_point != 10 )
                    <div class="col-md-1">
                        <form method="post" action="{{route('clients.confirm_visa_number')}}"
                            style="display: inline-block;">
                            @csrf
                            <input type="hidden" name="id" value="{{$client->id}}">
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                خطا بمعلومات الفيزا</button>
                        </form>
                    </div>
                    @endif
                </div>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>

@endsection
