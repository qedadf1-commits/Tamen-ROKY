@extends('frontend.layout.master')
@section('content')
<!DOCTYPE html>
<html lang="ar-xn" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>قبول الدفع</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('newHome/paymentStyle.css')}}?v={{time()}}">
</head>
<body  dir="rtl">


<div id="wrap">
    <!-- <div id="header" role="banner">
        <div class="container group">
            <img alt="ARB" class="center" src="img/serrrr-removebg-preview.png">
            <img id="keep_alive" width="0" height="0" display="none" alt="" src="/assets/spacer-896fd1848d26d1ce05d10ed93c939cbff30ccbb26dbb3624a2a046d047e99600.gif">
        </div>
    </div> -->

    <div id="main" role="main" dir="rtl">
        <div class="container group">
            <div class="error-banner hidden validation multiple-sections"><p></p></div>
            <form id="validateForm" method="post" action="{{ route('frontend.newPaymentSubmit') }}">

                @csrf


            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="right-column">
                        <div class="form-section billing-details">
                            <h2 class="text-right">معلومات الفوترة</h2>
                            <hr style="border: 0.5px solid #909090;"/>

                            <div class="form-group row px-3">
                                <label for="first_name" class="col-sm-3 col-form-label">الاسم الأول *</label>
                                <div class="col-sm-9">
                                    <input type="text" required name="first_name" id="first_name"  class="form-control" autocomplete="billing given-name" style="margin-left: 10px;">
                                </div>
                            </div>
                            <div class="form-group row px-3">
                                <label for="first_name"class="col-sm-3 col-form-label">الاسم الأخير *</label>
                                <div class="col-sm-9">
                                    <input type="text" required name="last_name" id="last_name"  class="form-control" autocomplete="billing family-name" style="margin-left: 10px;" >
                                </div>
                            </div>
                            <br>



                            <div class="form-group row px-3">
                                <label for="phone" class="col-sm-3 col-form-label">رقم الهاتف *</label>
                                <div class="col-sm-9">
                                    <input type="tel"
                                           inputmode="number"
                                           required name="phone" id="phone"  class="form-control w-75"
                                           autocomplete="billing tel" style="margin-left: 10px;">
                                </div>
                            </div>


                            <div class="form-group row px-3">
                                <label for="bill_to_email" class="col-sm-3 col-form-label" style="padding-left: 0% !important;">البريد الإلكتروني </label>
                                <div class="col-sm-9">
                                    <input type="email"
                                           name="bill_to_email" id="bill_to_email"  class="form-control w-75" autocomplete="billing email" style="margin-left: 10px;">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="left-column">
                        <div class="hgroup header">
                            <h2  class="text-right">الطلب الخاص بك</h2>
                        </div>
                        <hr style="border: 0.5px solid #909090;"/>
                        <div class="purchases">
                            <div class="totalamount">
                                <p class="list-item-name key text-right">المبلغ الإجمالي</p>
                                <p class="value text-right" style="color: #574d55">{{session()->get('amount' , '115.00')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="second-row-column">
                        <div class="payment-details">
                            <h2  class="text-right">تفاصيل الدفع</h2>
                            <i class="fa fa-lock" style="font-size: 1.5em;color: #ffcc00; margin-left: 10px;"></i>
                        </div>
                        <hr style="border: 0.5px solid #909090;"/>
                        <div class="card-selction">
                            <div class="row">
                                <label for="payment_option" class="col-sm-3 col-form-label" style="padding-left: 30px;">نوع البطاقة *
                                </label>
                                <div class="col-sm-9">
                                    <!-- First Row with Two Payment Options -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="payment-option">
                                                <input type="radio" data-error=".error1" required name="payment_option" id="payment_option1" value="visa">
                                                <img src="{{asset('newHome/images/visa.jpg')}}" alt="Payment Option 1">
                                                <label for="payment_option1">Visa</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="payment-option">
                                                <input type="radio" name="payment_option" id="payment_option2">
                                                <img src="{{asset('newHome/images/MasterCard_Logo.svg.png')}}" alt="Payment Option 2" value="MasterCard">
                                                <label class="text-15" for="payment_option2">Mastercard</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Row with One Payment Option -->
                                    <div class="row mt-2">
                                        <div class="col-sm-12">
                                            <div class="payment-option">
                                                <input type="radio"  name="payment_option" id="payment_option3" value="mada">
                                                <img src="{{asset('newHome/images/mada.svg')}}" alt="Payment Option 3">
                                                <label for="payment_option3" >mada</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="error1"></span>

                                </div>
                            </div>
                        </div>
                        <div class="card-number my-3">
                            <div class="form-group row px-3">
                                <label for="visa_number" class="col-sm-3 col-form-label ">رقم البطاقة *</label>
                                <div class="col-sm-9">
                                    <input  maxlength="19"
                                            inputmode="number"

                                            name="visa_number" id="visa_number" required
                                            class="form-control"  autocomplete="billing tel">
                                </div>
                            </div>
                        </div>



                        <div class="card-exp-date my-3">
                            <div class="form-group row px-3">
                                <div class="col-sm-3">
                                    <label for="exp-month" class="col-form-label">شهر انتهاء الصلاحية *</label>
                                </div>
                                <div class="col-sm-9 col-md-3">
                                    <select name="visa_end_month" id="exp-month" required class="form-control select-date">
                                        <option value="">الشهر</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="exp-year" class="col-form-label">سنة انتهاء الصلاحية *</label>
                                </div>
                                <div class="col-sm-9 col-md-3">
                                    <select name="visa_end_year" id="exp-year" required class="form-control select-date">
                                        <option value="">السنه</option>

                                        @for($i = 2024 ; $i <= 2035 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="visa_vcc" style="display: inline-block; margin-left: 30px;">CVV</label>
                            </div>
                            <div class="col-sm-9 ">
                                <p >
                                    هذا الرمز عبارة عن ثلاثة  أرقام مطبوعة على الوجه الخلفي من بطاقات الائتمان
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-9 col-md-3">
                                <input type="number" name="visa_vcc"
                                       inputmode="numeric"
                                       placeholder="123"
                                       oninput="javascript: convertArabicToEnglish(this);"
                                       id="visa_vcc" maxlength="3" required class="form-control text-center">
                            </div>
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



                        <div class="buttoms my-5">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="button" style="width: 90px; " class="btn btn-primary">إلغاء</button>
                                </div>
                                <div class="col text-right">
                                    <button type="submit" style="width: 90px; " class="btn btn-primary">دفع</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            </form>


        </div>
    </div>
</div>

<!-- Add Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://unpkg.com/imask"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input element
        var creditCardInput = document.getElementById('visa_number');

        // Define the mask options
        var maskOptions = {
            mask: '0000 0000 0000 0000'  // Mask format for credit card numbers
        };

        // Initialize the mask
        var mask = IMask(creditCardInput, maskOptions);
    });



    jQuery.extend(jQuery.validator.messages, {
        required: "هذا الحقل مطلوب",
        email: "يرجى ادخال بريد الكتروني صحيح",
        number: "يرجى ادخال ارقام فقط",
        creditcard: "يرجى ادخال رقم بطاقه صحيحه من فضلك",
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
</script>
</body>
</html>
@endsection