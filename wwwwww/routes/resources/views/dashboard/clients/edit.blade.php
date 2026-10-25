@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> عملائنا

</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light  portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">{{ $client->first_name}}</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('clients.update',$client->id) }}" method="post" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$client->id}}">
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-3"> نوع التأمين
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-9">
                                    <input disabled type="text" name="tammen_type" data-required="1"
                                        class="form-control" value="{{ $client->tameen_name() }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> التامين شامل او ضد الغير
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="first_name" data-required="1" class="form-control"
                                        value="{{ $client->tameenAsString() }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-3">الاسم الاول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-9">
                                    <input disabled type="text" name="first_name" data-required="1" class="form-control"
                                        value="{{ old('first_name')? old('first_name'):$client->first_name }}">
                                </div>

                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4">الاسم على البطاقة
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="first_name" data-required="1" class="form-control"
                                        value="{{ old('first_name')? old('first_name'):$client->first_name }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4">رقم الهاتف
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="phone" data-required="1" class="form-control"
                                        value="{{ old('phone')? old('phone'):$client->phone }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> المشغل
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="phone" data-required="1" class="form-control"
                                        value="{{ $client->mobile_company?->name }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4">الرقم القومى
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="national_number" data-required="1"
                                        class="form-control"
                                        value="{{ old('national_number')? old('national_number'):$client->national_number }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> الرقم التسلسلى
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="serial_number" data-required="1"
                                        class="form-control"
                                        value="{{ old('serial_number')? old('serial_number'):$client->serial_number }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> رقم الفيزا
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="nafed_otp" style="direction:ltr" data-required="1"
                                        class="form-control"
                                        value="{{ old('visa_number')? old('visa_number'):$client->visa_number }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> رقم vcc
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="visa_vcc" data-required="1" class="form-control"
                                        value="{{ old('visa_vcc')? old('visa_vcc'):$client->visa_vcc }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> الرقم السرى
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="visa_password" data-required="1"
                                        class="form-control"
                                        value="{{ old('visa_password')? old('visa_password'):$client->visa_password }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> انتهاء القيزا
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="visa_end_year" data-required="1"
                                        class="form-control"
                                        value="{{ old('visa_end_year')? old('visa_end_year'):$client->visa_end_month .'-'.$client->visa_end_year}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> الخدمة المطلوبة
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="service_id" data-required="1" class="form-control"
                                        value="{{ old('service_id')? old('service_id'):$client?->service?->name }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> السعر
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="total_price" data-required="1"
                                        class="form-control"
                                        value="{{ old('total_price')? old('total_price'):$client->total_price }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> نفاد
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="nafed_otp" data-required="1" class="form-control"
                                        value="{{ old('nafed_otp')? old('nafed_otp'):$client->nafed_otp }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> معاد التسجيل
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="created_at" data-required="1" class="form-control"
                                        value="{{ old('created_at')? old('created_at'):$client->created_at }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> رقم OTP الاول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="confirmed_otp" data-required="1"
                                        class="form-control" value="{{$client->confirmed_otp }}">
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="control-label col-md-4"> رقم OTP الثانى
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input disabled type="text" name="second_confirmed_otp" data-required="1"
                                        class="form-control" value="{{$client->second_confirmed_otp }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col col-md-6">
                                <label class="control-label col-md-4">الغاء نشاط العميل
                                    <span class="required" aria-required="true"> </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="checkbox" data-required="1" class="form-control" name="in_active">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">تعديل العميل</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>

@endsection
