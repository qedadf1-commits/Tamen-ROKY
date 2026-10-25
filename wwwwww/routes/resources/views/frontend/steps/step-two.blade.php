@extends('frontend.layout.master')

@section('content')

<!-- start first section -->
<section class="first-section-form">
    <div class="container box-for-form">
        <div class="container">
            <div class="main-box-for-form px-0 mb-2">
                <div class="description-for-the-box">
                    <ul class="d-flex justify-content-between">
                        <li class="active">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    1
                                </div>
                                <div class="title">البيانات الأساسية</div>
                                <div class="mobile-title">البيانات الأساسية</div>
                            </div>
                        </li>
                        <li class="active">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    2
                                </div>
                                <div class="title">بيانات التأمين</div>
                                <div class="mobile-title">بيانات التأمين</div>
                            </div>
                        </li>
                        <li class="">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    3
                                </div>
                                <div class="title">قائمة الأسعار</div>
                                <div class="mobile-title">قائمة الأسعار</div>
                            </div>
                        </li>
                        <li class="">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    4
                                </div>
                                <div class="title">الملخص والدفع</div>
                                <div class="mobile-title">الملخص والدفع</div>
                            </div>
                        </li>
                    </ul>
                    <div class="container">

                        <div class="row mt-3 alien-items-center">
                            <div class="col-lg-6 ">
                                <form id="form" action="{{route('stepTwoAction')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="step" value="2">
                                    <input type="hidden" name="client_id" value="{{$client->id}}">
                                    <input type="hidden" name="national_number" value="{{$client->national_number}}">

                                    <!-- no3 el ta2men -->
                                    <div class="mt-3">
                                        <label for="exampleInputPassword1" class="form-label">نوع التأمين </label>
                                        <select class=" form-control" name="insurance_type">
                                            <option selected value="1">تأمين ضد الغير</option>
                                            <option value="2">تأمين شامل</option>
                                        </select>
                                    </div>
                                    @error('insurance_type')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <!-- tare5 bed2 elwatheka -->
                                    <div class="mt-3">
                                        <label for="exampleInputPassword1" class="form-label">تاريخ بدء الوثيقه
                                        </label>
                                        <input class="ta form-control input-of-buy" type="date"
                                            name="contract_started_at" value="{{ old('contract_started_at')??'' }}">
                                    </div>
                                    @error('contract_started_at')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <!-- 8ard mn car -->
                                    <div class="mt-3">
                                        <label for="exampleInputPassword1" class="form-label">الغرض من استخدام
                                            السياره
                                        </label>

                                        <select class=" form-control " aria-label="Default  example" name="use_car_for">
                                            <option selected>شخصي</option>
                                            <option value="1">تجاري</option>
                                            <option value="2">تأجير</option>
                                            <option value="3">نقل الركاب او كريم او اوبر</option>
                                            <option value="3">نقل مشتقات نفطيه</option>

                                        </select>
                                    </div>
                                    @error('use_car_for')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="mt-3" id="input-Tasalsol">
                                        <label for="exampleInputPassword1" class="form-label">نوع السياره </label>
                                        <input type="text" value="{{old('car_type')}}" placeholder="نوع السيارة"
                                            name="car_type" class="form-control" id="car_type">
                                    </div>
                                    @error('car_type')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="col-lg-6 ">
                                <!--no3 el car -->

                                <!-- kemt el car -->
                                <div class="mt-3" id="input-Tasalsol">
                                    <label for="exampleInputPassword1" class="form-label">القيمه التقديريه للسياره
                                    </label>
                                    <input onkeydown="Check(this);" onkeyup="Check(this);" class="ta form-control"
                                        id="estimated_car_value" type="number" placeholder="يجب ان يكون ارقام فقط"
                                        name="estimated_car_value" value="{{ old('estimated_car_value')??'' }}">
                                </div>
                                @error('estimated_car_value')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <!-- sanat el son3 -->

                                <div class="mt-3">
                                    <label for="exampleInputPassword1" class="form-label">سنة الصنع
                                    </label>

                                    <input class="ta form-control input-of-buy" type="tel" id="car_made_at"
                                        placeholder="يجب ان يكون اربع ارقام   " maxlength="4" name="car_made_at"
                                        value="{{ old('car_made_at')??'' }}">
                                    @error('car_made_at')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <!-- makan el son3 -->
                                <div class="mt-3" id="input-Tasalsol">
                                    <label for="exampleInputPassword1" class="form-label">مكان الاصلاح </label>
                                    <div class="form-check ">
                                        <label class="custom-cyontrol-label " data-testid="motorCheckboxLabel"
                                            for="syt">
                                            <input class="form-check-input mx-2" type="radio" name="repair_in"
                                                id="flexRadioDefault1">
                                            <span class="custom-control-text">الورشه</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-cyontrol-label " data-testid="motorCheckboxLabel"
                                            for="syt">
                                            <input class="form-check-input mx-2" type="radio" name="repair_in"
                                                id="flexRadioDefault2" checked>
                                            <span class="custom-control-text">التوكيل</span>
                                        </label>
                                    </div>
                                </div>
                                @error('repair_in')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <label class="custom-cyontrol-label mt-5" data-testid="motorCheckboxLabel"
                                    id="accept_condition_label" for="syt">
                                    <input class="form-check-input mx-2" type="checkbox" value=""
                                        id="accept_conditions">
                                    <span class="custom-control-text" for="accept_conditions">أوافق على منح تأميني
                                        الحق في الاستعلام عن
                                        بياناتي وبيانات مركبتي من الجهات المعنية لأجل اصدار التسعيرة</span>
                                </label>
                                <div class="btn-info-box mt-4 " id="accept_conditions_hidden">
                                    <button data-testid="homeTplAndCompSubmit"
                                        class=" ta btn btn-secondary btn-sm mt-4 w-full" type="submit" disabled
                                        data-toggle="modal" data-target="#existing-popup" style="min-width: 150px;"
                                        id="submit_button">التالي</button>
                                </div>
                                </form>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- start first section -->









@endsection

@section('custom-script')
<script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
<script>
$("#accept_conditions").change(function() {
    var checked = $(this).is(":checked");
    if (checked) {
        $("#submit_button").attr("disabled", false)
    } else {
        $("#submit_button").attr("disabled", true)
    }
});



const carType = document.getElementById('cart_type');


const estimatedCarValue = document.getElementById('estimated_car_value');
estimatedCarValue.addEventListener('keydown', function(event) {
    // Prevent the input of non-character keys
    const regex = /^\d+$/;
    if (!regex.test(event.key)) {
        event.preventDefault();
    }
});

;

const carMadeAt = document.getElementById('car_made_at');
// Add input and keypress event listeners
carMadeAt.addEventListener('input', restrictInput);
carMadeAt.addEventListener('keypress', restrictKeyPress);

function restrictInput(event) {
    const inputValue = event.target.value;
    // Allow only digits and limit input length to 4
    event.target.value = inputValue.replace(/\D/g, '').slice(0, 4);
    ``
}

function restrictKeyPress(event) {
    const inputValue = event.key;
    // Allow only digits and prevent input if length is already 4
    if (!/^\d$/.test(inputValue) || event.target.value.length >= 4) {
        event.preventDefault();
    }
}
</script>
@endsection
