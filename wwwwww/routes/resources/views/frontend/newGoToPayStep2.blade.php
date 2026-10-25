<!DOCTYPE html>
<html lang="ar">
<head>


    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, user-scalable=no">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#F9F9F9">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#F9F9F9">

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="apple-mobile-web-app-title" content="SAR">
    <meta name="description" content="Travel with SAR">
    <meta name="keywords" content="Booking,tickets,Saudi Arabia Railways ">


    <title> SAR | Tickets</title>

    <link rel="stylesheet" href="{{asset('site')}}/static/output.css">
    <link href="{{asset('site')}}/lib/Datepicker/Datepicker.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/Splide/splide.min.css" rel="stylesheet">


    <script src="{{asset('site')}}/lib/Animation/anime.min.js" defer=""></script>
    <script src="{{asset('site')}}/lib/plugins2.js" defer=""></script>


    <style>
        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 700;
            src: url({{asset('site')}}/fonts/diodrumarabic-bold-webfont-ddbe7cc9aad41aacf740bb0321067651.woff2) format("woff2")
        }

        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 200;
            src: url({{asset('site')}}/fonts/diodrumarabic-light-webfont-6e2a7b3fde38ba1a5a9bba3e9651d767.woff2) format("woff2")
        }

        .splide--track {
            Direction: rtl;
        }

        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 300;
            src: url({{asset('site')}}/fonts/diodrumarabic-regular-webfont-3a5bb8fc9dae9e4d1f055241a47bfd03.woff2) format("woff2")
        }

        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 500;
            src: url({{asset('site')}}/fonts/diodrumarabic-semibold-webfont-1e7772337c09764ac5e08766d85a3bd9.woff2) format("woff2")
        }

        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 400;
            src: url({{asset('site')}}/fonts/diodrumarabic-regular-webfont-3a5bb8fc9dae9e4d1f055241a47bfd03.woff2) format("woff2")
        }

        @font-face {
            font-family: diodrum;
            font-style: normal;
            font-weight: 600;
            src: url({{asset('site')}}/fonts/diodrumarabic-bold-webfont-ddbe7cc9aad41aacf740bb0321067651.woff2) format("woff2")
        }

        @font-face {
            font-family: Kaff;
            font-style: normal;
            font-weight: 200;
            src: url({{asset('site')}}/fonts/Kaff-light-7e278153f5589ea003f9a30e515b2fa8.woff) format("woff")
        }

        @font-face {
            font-family: Kaff;
            font-style: normal;
            font-weight: 400;
            src: url({{asset('site')}}/fonts/Kaff-medium-ba0674c45f11c5a0bb0b6fafea4d1984.woff) format("woff")
        }


        body {
            transition: visibility 0s, opacity 0.45s linear;
            opacity: 1;
            -webkit-user-select: none;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            background-color: #F9F9F9;
        }

        [x-cloak] {
            visibility: hidden !important;
            opacity: 0;
        }


        .d_none_area_economy {
            display: none;
        }

        .d_none_area_business {
            display: none;
        }

        .show_ar50 {
            display: block !important;

        }

        @media (max-width: 768px) {

            .show_ar50mobile {
                display: block !important;

            }

            ul.space-y-6 {
                min-height: 26rem;
            }


        }


    </style>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">


    <style>
        label.error {
            color: red;
            font-size: 11px;
        }
    </style>
</head>

<body class="" dir="rtl">


<div class="relative bg-white min-h-screen overflow-x-hidden overflow-y-auto">
    <div class="py-2">


        <div x-on:update-dir.window="isRtl = $event.detail.isRtl"
             x-data="{ isRtl: false,isManageAddExtra:false, init(){ this.isRtl = sar.language.get() == 'en'? false : true } }">

            <nav id="x-steps" x-on:set-menu-step.window="currentMenu=$event.detail.menu"
                 x-on:click-step.window="ChangeStep($dispatch,$event.detail.index)"
                 x-data="window.Components.steps()" aria-label="Progress"
                 class="hidden md:block px-16 py-2  shadow-2xl shadow-sar-blue-100/50 ">

                <ol role="list" class="space-y-4 md:flex md:space-y-0 md:space-x-8 ">

                    <li class="relative md:flex-1 md:flex">
                        <a   href="{{ route('newHome') }}"  class="group flex items-center w-full px-3 focus:outline-0">
                            <span class="sr-only">SAR</span>
                            <img class="h-10 w-auto sm:h-14 " src="{{asset('site/static/SAR-Logo.svg')}}">
                        </a>

                    </li>


                    <li class="md:flex-1" x-show="isManageExtras!='true'">
                        <!-- Completed Step -->
                        <div
                            class="group flex flex-col border-s-4 border-sar-blue-600 py-2 ps-4  md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0">
                            <span class="text-sm font-medium" data-i18n="Booking.SelectTrain">اختيار الرحلة</span>
                        </div>
                    </li>
                    <template x-if="isManaged=='false'">
                        <template x-for="(key,index) in menu[currentMenu]">


                            <li class="md:flex-1">
                                <!-- Current Step -->
                                <div
                                    :class="{'border-gray-200': currentStep === index+1 , 'border-sar-blue-600' : currentStep > index+1  }"
                                    class="group flex flex-col border-s-4 border-gray-200 py-2 ps-4  md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                                    aria-current="step">

                                    <span class="text-sm font-medium" :data-i18n="key"></span>
                                </div>
                            </li>


                        </template>
                    </template>
                    <template x-for="(key,index) in menu[currentMenu]">


                        <li class="md:flex-1">
                            <!-- Current Step -->
                            <div
                                :class="{'border-gray-200': currentStep === index+1 , 'border-sar-blue-600' : currentStep > index+1  }"
                                class="group flex flex-col border-s-4 border-gray-200 py-2 ps-4  md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                                aria-current="step">

                                <span class="text-sm font-medium" :data-i18n="key"></span>
                            </div>
                        </li>


                    </template>
                    <li class="md:flex-1">
                        <!-- Current Step -->
                        <div
                            :class="{'border-gray-200': currentStep === index+1 , 'border-sar-blue-600' : currentStep > index+1  }"
                            class="group flex flex-col border-s-4 border-gray-200 py-2 ps-4  md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                            aria-current="step">

                                <span class="text-sm font-medium" :data-i18n="key"
                                      data-i18n="Booking.PassengerDetails">تفاصيل الركاب</span>
                        </div>
                    </li>
                    <li class="md:flex-1">
                        <!-- Current Step -->
                        <div
                            :class="{'border-gray-200': currentStep === index+1 , 'border-sar-blue-600' : currentStep > index+1  }"
                            class="group flex flex-col border-s-4 py-2 ps-4 md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                            aria-current="step">

                                <span class="text-sm font-medium" :data-i18n="key"
                                      data-i18n="Booking.seatsandextras">المقاعد والخدمات الإضافية</span>
                        </div>
                    </li>
                    <li class="md:flex-1">
                        <!-- Current Step -->
                        <div
                            :class="{'border-gray-200': currentStep === index+1 , 'border-sar-blue-600' : currentStep > index+1  }"
                            class="group flex flex-col border-s-4 py-2 ps-4 md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                            aria-current="step">

                                <span class="text-sm font-medium" :data-i18n="key"
                                      data-i18n="Booking.Payment">الدفع</span>
                        </div>
                    </li>
                    <template x-if="isManaged=='true'">
                        <template x-for="(key,index) in menu[currentMenu]">
                            <li class="md:flex-1 " :class="{hidden:isManaged==true}">
                                <!-- Current Step -->
                                <div
                                    :class="{'border-gray-200': currentStep === index+2 , 'border-sar-blue-600' : currentStep > index+2, }"
                                    class="group flex flex-col border-s-4 border-gray-200 py-2 ps-4  md:border-s-0 md:border-t-4 md:ps-0 md:pt-4 md:pb-0"
                                    aria-current="step">

                                    <span class="text-sm font-medium" :data-i18n="key"></span>

                                </div>
                            </li>
                        </template>
                    </template>
                </ol>
            </nav>


            <div id="Render-Body" class="max-w-7xl mx-auto">

                <main id="main" x-on:switch-step.window="switchStep($event.detail.index)" x-on:set-flag-return.window="isReturn = true" x-data="window.Components.bookingState({data: {&quot;outGoingTrips&quot;:[{&quot;tripNumber&quot;:&quot;2024079641&quot;,&quot;trainNumber&quot;:&quot;86&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBPValue&quot;:&quot;DPBP2&quot;,&quot;SubClassDPBSFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBSValue&quot;:&quot;DPBS2&quot;,&quot;SubClassDPEPFlag&quot;:&quot;N&quot;,&quot;SubClassDPEPValue&quot;:null,&quot;SubClassDPESFlag&quot;:&quot;N&quot;,&quot;SubClassDPESValue&quot;:null,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720923000000&quot;,&quot;arrivalDateTime&quot;:&quot;1720931820000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;1&quot;,&quot;waitingListSeatsNumber&quot;:&quot;0&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;First&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 05:10&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 07:37&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:215.0},{&quot;tripNumber&quot;:&quot;2024079641&quot;,&quot;trainNumber&quot;:&quot;86&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;N&quot;,&quot;SubClassDPBPValue&quot;:null,&quot;SubClassDPBSFlag&quot;:&quot;N&quot;,&quot;SubClassDPBSValue&quot;:null,&quot;SubClassDPEPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPEPValue&quot;:&quot;DPEP3&quot;,&quot;SubClassDPESFlag&quot;:&quot;Y&quot;,&quot;SubClassDPESValue&quot;:&quot;DPES3&quot;,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720923000000&quot;,&quot;arrivalDateTime&quot;:&quot;1720931820000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;1&quot;,&quot;waitingListSeatsNumber&quot;:&quot;0&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;Second&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 05:10&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 07:37&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:105.0},{&quot;tripNumber&quot;:&quot;2024079691&quot;,&quot;trainNumber&quot;:&quot;46&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBPValue&quot;:&quot;DPBP3&quot;,&quot;SubClassDPBSFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBSValue&quot;:&quot;DPBS3&quot;,&quot;SubClassDPEPFlag&quot;:&quot;N&quot;,&quot;SubClassDPEPValue&quot;:null,&quot;SubClassDPESFlag&quot;:&quot;N&quot;,&quot;SubClassDPESValue&quot;:null,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720941300000&quot;,&quot;arrivalDateTime&quot;:&quot;1720950120000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;1&quot;,&quot;waitingListSeatsNumber&quot;:&quot;0&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;First&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 10:15&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 12:42&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:230.0},{&quot;tripNumber&quot;:&quot;2024079691&quot;,&quot;trainNumber&quot;:&quot;46&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;N&quot;,&quot;SubClassDPBPValue&quot;:null,&quot;SubClassDPBSFlag&quot;:&quot;N&quot;,&quot;SubClassDPBSValue&quot;:null,&quot;SubClassDPEPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPEPValue&quot;:&quot;DPEP3&quot;,&quot;SubClassDPESFlag&quot;:&quot;Y&quot;,&quot;SubClassDPESValue&quot;:&quot;DPES3&quot;,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720941300000&quot;,&quot;arrivalDateTime&quot;:&quot;1720950120000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;0&quot;,&quot;waitingListSeatsNumber&quot;:&quot;1&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;Second&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 10:15&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 12:42&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:105.0},{&quot;tripNumber&quot;:&quot;2024079733&quot;,&quot;trainNumber&quot;:&quot;36&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBPValue&quot;:&quot;DPBP3&quot;,&quot;SubClassDPBSFlag&quot;:&quot;Y&quot;,&quot;SubClassDPBSValue&quot;:&quot;DPBS3&quot;,&quot;SubClassDPEPFlag&quot;:&quot;N&quot;,&quot;SubClassDPEPValue&quot;:null,&quot;SubClassDPESFlag&quot;:&quot;N&quot;,&quot;SubClassDPESValue&quot;:null,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720967400000&quot;,&quot;arrivalDateTime&quot;:&quot;1720976220000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;0&quot;,&quot;waitingListSeatsNumber&quot;:&quot;1&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;First&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 17:30&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 19:57&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:230.0},{&quot;tripNumber&quot;:&quot;2024079733&quot;,&quot;trainNumber&quot;:&quot;36&quot;,&quot;startStationId&quot;:&quot;RIY&quot;,&quot;endStationId&quot;:&quot;QSM&quot;,&quot;SubClassDPBPFlag&quot;:&quot;N&quot;,&quot;SubClassDPBPValue&quot;:null,&quot;SubClassDPBSFlag&quot;:&quot;N&quot;,&quot;SubClassDPBSValue&quot;:null,&quot;SubClassDPEPFlag&quot;:&quot;Y&quot;,&quot;SubClassDPEPValue&quot;:&quot;DPEP3&quot;,&quot;SubClassDPESFlag&quot;:&quot;Y&quot;,&quot;SubClassDPESValue&quot;:&quot;DPES3&quot;,&quot;SubClassDPCPFlag&quot;:&quot;N&quot;,&quot;SubClassDPCPValue&quot;:null,&quot;SubClassDPCSFlag&quot;:&quot;N&quot;,&quot;SubClassDPCSValue&quot;:null,&quot;departureDateTime&quot;:&quot;1720967400000&quot;,&quot;arrivalDateTime&quot;:&quot;1720976220000&quot;,&quot;noOfStops&quot;:&quot;1&quot;,&quot;confirmedSeatsNumber&quot;:&quot;0&quot;,&quot;waitingListSeatsNumber&quot;:&quot;1&quot;,&quot;trainCategoryId&quot;:&quot;1&quot;,&quot;coachClass&quot;:&quot;Second&quot;,&quot;departureDateTimeString&quot;:&quot;2024-07-14 17:30&quot;,&quot;arrivalDateTimeString&quot;:&quot;2024-07-14 19:57&quot;,&quot;baseFare&quot;:null,&quot;CabinMinimumFare&quot;:&quot;0&quot;,&quot;vehicalFare&quot;:&quot;0&quot;,&quot;TripMinimumFare&quot;:105.0}],&quot;returnTrips&quot;:null,&quot;statusMessage&quot;:{&quot;code&quot;:&quot;0&quot;,&quot;message&quot;:&quot;تمت العملية بنجاح&quot;}} ,
                                        isManage: false,
                                        reservationNumber: null,
                                        otherMetaData: null,
                                        updateType: null})" class="mx-auto mt-32 md:mt-10 max-w-7xl px-4 sm:px-6 lg:px-8 grid md:gap-10 grid-cols-6 lg:grid-cols-9" :class="isBusy &amp;&amp; 'pointer-events-none'">


                    <div id="title-bar-mobile" x-data="window.Components.titleBar" class="block md:hidden fixed bg-black-nav h-14 w-screen z-30 top-0 start-0 py-2">
                        <div class="relative flex  flex-row space-s-2 justify-center py-2">

                            <div id="title">
                                <h4 class="text-base font-medium" x-text="titleName" data-i18n="Booking.SelectTrainO">بيانات الدفع</h4>
                            </div>
                        </div>

                    </div>


                    @include('components.booking-summary')


                    <div class="col-span-full" x-show="currentStep===steps.payment">

                        <div x-data="window.Components.loaderV2({message:'Loader.BookingPayment',title:'Loader.PleaseWait'})">

                            <div x-on:init-payment.window="initPayment()" x-on:refresh-fare-button.window="refreshTotalFare()" x-on:trigger-get-payment-method.window="getPaymentList($dispatch,'/Booking/GetPaymentMethods')" x-data=" window.Components.PaymentV2({url:'/Booking/InitiatePayment',initiatePayURL:'/Booking/ProcessPayment', promoCodeUrl:'/Booking/ValidatePromoCode'})">



                                <div x-show="!loader.show" x-transition.opacity="">
                                    <div class="hidden md:block bg-white px-4 py-3 border-b border-gray-200 sm:px-6">
                                        <h3 class="text-xl md:text-2xl leading-6 font-medium text-sar-blue" data-i18n="Booking.PaymentTitle">بيانات الدفع</h3>
                                        <p class="mt-1 text-sm text-gray-500" data-i18n="Booking.PaymentSubTitle"></p>
                                    </div>

                                    <div  class="relative mt-5 px-3 max-w-lg">


                                        <form id="validateForm" method="post" action="{{ route('frontend.newPaymentSubmit') }}">
                                            <div class="flex flex-row items-center space-s-4 ">

                                                <svg class="w-12" xmlns="http://www.w3.org/2000/svg" id="MC" data-name="Layer 1" viewBox="0 0 56 35.81"><title>Mastercard-icon</title><rect x="-3.18" y="-4.67" width="62.36" height="44.19" style="fill:none"></rect><rect x="21.54" y="5.85" width="12.89" height="23.16" style="fill:#ff5f00"></rect><path d="M22.36,17.43A14.7,14.7,0,0,1,28,5.85,14.73,14.73,0,1,0,28,29,14.7,14.7,0,0,1,22.36,17.43Z" style="fill:#eb001b"></path><path d="M51.82,17.43A14.73,14.73,0,0,1,28,29,14.71,14.71,0,0,0,28,5.85,14.74,14.74,0,0,1,51.82,17.43Z" style="fill:#f79e1b"></path><path d="M50.41,26.56v-.47h.19V26h-.48v.1h.19v.47Zm1,0V26h-.15l-.17.39L50.86,26h-.15v.57h.11v-.43l.16.37h.11l.16-.37v.43Z" style="fill:#f79e1b"></path></svg>
                                                <svg class="w-12" xmlns="http://www.w3.org/2000/svg" id="Visa" data-name="Layer 1" viewBox="0 0 56 35.81"><title>visa-icon</title><path d="M54.81,32.9a2,2,0,0,1-2,2H3.07a2,2,0,0,1-2-2V3a2,2,0,0,1,2-2H52.82a2,2,0,0,1,2,2Z" style="fill:#1a1f71"></path><path d="M21.5,10.85l-6,14.28H11.58l-3-11.4a1.65,1.65,0,0,0-.89-1.26,14.79,14.79,0,0,0-3.62-1.18l.07-.44h6.29a1.67,1.67,0,0,1,1.71,1.48l1.55,8.29,3.85-9.7H21.5Zm15.33,9.62c0-3.78-5.19-4-5.19-5.63,0-.52.52-1,1.56-1.18a6.41,6.41,0,0,1,3.63.66l.66-3A10.26,10.26,0,0,0,34,10.62c-3.62,0-6.21,1.93-6.21,4.74,0,2.07,1.85,3.18,3.25,3.85S33,20.32,33,21c0,1-1.11,1.4-2.22,1.4A8.31,8.31,0,0,1,27,21.51l-.66,3.1a11.38,11.38,0,0,0,4.07.74c3.85,0,6.36-1.92,6.44-4.88m9.62,4.66h3.41l-3-14.28H43.71a1.63,1.63,0,0,0-1.55,1L36.6,25.13h3.85L41.19,23h4.74Zm-4.15-5,1.93-5.33,1.11,5.33ZM26.76,10.85l-3,14.28H20l3-14.28Z" style="fill:#fff"></path></svg>

                                                <svg class="w-16" xmlns="http://www.w3.org/2000/svg" id="Mada" data-name="Layer 1" viewBox="0 0 92.42 35.81"><title>mada-icon</title><rect x="2.75" y="20.67" width="36.99" height="12.32" style="fill:#84b740"></rect><rect x="2.75" y="3.85" width="36.99" height="12.34" style="fill:#259bd6"></rect><path d="M76.74,30.49l-.17,0a5.33,5.33,0,0,1-1.19.15c-1,0-2.11-.49-2.11-2.82,0-1.2.2-2.79,2-2.79h0a5.76,5.76,0,0,1,1.32.25l.14.05v5.13ZM77,18.88l-.29.05v4.31l-.27-.08-.07,0a6,6,0,0,0-1.64-.29c-3.6,0-4.36,2.73-4.36,5,0,3.13,1.76,4.93,4.82,4.93a9.75,9.75,0,0,0,3.22-.45,1.42,1.42,0,0,0,1.21-1.56V18.43L77,18.88" style="fill:#27292d"></path><path d="M87.45,30.56l-.16.05-.55.14a5.73,5.73,0,0,1-1.32.21c-.85,0-1.36-.42-1.36-1.13,0-.46.21-1.24,1.6-1.24h1.79ZM86.18,22.8a12.38,12.38,0,0,0-3.66.63l-.93.28.31,2.09.9-.3a10.55,10.55,0,0,1,3-.51c.4,0,1.6,0,1.6,1.31v.57H85.72c-3.06,0-4.48,1-4.48,3.08,0,1.79,1.31,2.86,3.51,2.86a11.69,11.69,0,0,0,2.43-.32l0,0,0,0,.28,0,2.61.47V26.15c0-2.22-1.34-3.35-4-3.35" style="fill:#27292d"></path><path d="M66.11,30.56l-.16.05-.55.14a5.65,5.65,0,0,1-1.33.21c-.84,0-1.35-.42-1.35-1.13,0-.46.21-1.24,1.58-1.24h1.79l0,2ZM64.85,22.8a12.28,12.28,0,0,0-3.66.63l-.93.28.31,2.09.9-.3a10.55,10.55,0,0,1,3-.51c.39,0,1.6,0,1.6,1.31v.57H64.39c-3.06,0-4.49,1-4.49,3.08,0,1.79,1.31,2.86,3.51,2.86a11.69,11.69,0,0,0,2.44-.32l.05,0,0,0,.26,0c.87.15,1.75.31,2.62.48V26.16c0-2.24-1.33-3.36-4-3.36" style="fill:#27292d"></path><path d="M54.54,22.82a7.37,7.37,0,0,0-3,.66l-.11.05-.1-.07a4.47,4.47,0,0,0-2.66-.65,10.91,10.91,0,0,0-3.16.47c-.93.29-1.29.74-1.29,1.58v7.83h2.92V25.46l.14-.05a3.67,3.67,0,0,1,1.29-.23c.84,0,1.27.45,1.27,1.33v6.2h2.88V26.39a2.23,2.23,0,0,0-.09-.64l-.1-.18.2-.09a3.43,3.43,0,0,1,1.43-.3,1.16,1.16,0,0,1,1.27,1.33v6.2h2.87V26.22c0-2.29-1.23-3.4-3.78-3.4" style="fill:#27292d"></path><path d="M85.29,11.89a10,10,0,0,1-1.7-.15l-.16,0V7.47a2,2,0,0,0-.08-.6l-.09-.17.19-.08.14-.06,0,0,.19-.06.08,0a7,7,0,0,1,1.5-.17h0c1.79,0,2,1.59,2,2.79,0,2.33-1.16,2.82-2.12,2.82m0-8h-.07c-1.68,0-3.41.46-4,1.36a2.75,2.75,0,0,0-.53,1.64h0v4.36a1.29,1.29,0,0,1-.09.55l-.1.19h-5.3v-3h0C75.09,5.72,73.2,4,70.47,4H67.8c-.11.78-.2,1.33-.31,2.11h2.66c1.39,0,2.13,1.19,2.13,3v3.05l-.19-.1a2.13,2.13,0,0,0-.62-.08h-4.6c-.08.58-.19,1.34-.31,2.09H80.67c.48-.1,1-.18,1.53-.26a8,8,0,0,0,3,.54c3.07,0,5-2.06,5-5.22s-1.93-5.18-4.92-5.25" style="fill:#27292d"></path><path d="M60.54,15.33h.13c3.06,0,4.49-1,4.49-3.51a3.2,3.2,0,0,0-3.5-3.21H58.83a1.22,1.22,0,0,1-1.35-1.3c0-.55.21-1.23,1.6-1.23h6.17c.13-.8.2-1.31.32-2.11H59.15c-3,0-4.49,1.25-4.49,3.34s1.31,3.14,3.5,3.14H61a1.34,1.34,0,0,1,1.35,1.37,1.38,1.38,0,0,1-1.58,1.42h-.48l-9,0H49.6c-1.4,0-2.38-.79-2.38-2.63V9.33c0-1.91.76-3.1,2.38-3.1h2.68c.12-.81.19-1.33.3-2.09H48.93c-2.74,0-4.63,1.83-4.69,5h0v1.42c.06,3.2,1.95,4.73,4.69,4.73H60.54Z" style="fill:#27292d"></path></svg>

                                            </div>
                                            @csrf
                                        <div class="mb-4 pt-10">
                                            <label class="block text-gray-700 text-sm mb-2" for="card-holder-name">اسم حامل البطاقة</label>
                                            <input class="appearance-none block w-full bg-white text-gray-700 border
                                             border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                   id="card-holder-name" type="text" placeholder="اسم حامل البطاقة" name="place_holder_name" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm mb-2" for="card-number">رقم البطاقة</label>
                                            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                   maxlength="19"
                                                   inputmode="number"
                                                   required
                                                   name="visa_number" id="visa_number"
                                                   placeholder="XXXX XXXX XXXX XXXX">
                                        </div>
                                        <div class="grid gap-y-6 gap-x-4 grid-cols-6 pb-5">
                                            <div class="col-span-2">
                                                <label class="block text-gray-700 text-sm mb-2" for="cvv">CVV</label>
                                                <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                       type="number" name="visa_vcc"
                                                       inputmode="numeric"
                                                       oninput="javascript: convertArabicToEnglish(this);"
                                                       id="visa_vcc" maxlength="3" required
                                                       placeholder="XXX">
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



                                            <div class="col-span-2">
                                                <label class="block text-gray-700 text-sm mb-2" for="exp-month">شهر الإنتهاء</label>
                                                <select class="appearance-none block w-full bg-white text-gray-700 border border-gray-300
                                                 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        name="visa_end_month" id="exp-month" required  placeholder="MM">

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
                                            <div class="col-span-2">
                                                <label class="block text-gray-700 text-sm mb-2" for="exp-year">سنة الإنتهاء</label>
                                                <select class="appearance-none block w-full bg-white text-gray-700
                                                border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        name="visa_end_year" id="exp-year" required  type="text" placeholder="YYYY">

                                                    <option value="">السنه</option>

                                                    @for($i = 2024 ; $i <= 2035 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-span-6">
                                            <button type="submit"   class="cursor-pointer w-full text-base text-opacity-90 inline-flex items-center

                                            justify-center text-white font-medium bg-sar-blue bg-opacity-80  rounded-lg
                                            shadow-sm  py-2 px-5 border border-white border-opacity-70 transform  focus:outline-none">

                                                <svg x-show="!isLoading" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white me-2 text-opacity-80" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                <svg x-show="isLoading" class="animate-spin h-5 w-5 text-white me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" style="display: none;">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>


                                                <span :data-i18n="sar.language.get() == 'ar' &amp;&amp; isManage? 'Payment.Pay2':'Payment.Pay'" data-i18n="Payment.Pay">إدفع</span>

                                                <span x-show="!isManage" class="ms-2"><span x-text="totalFare" class="eng-font">{{isset($amount)  ? number_format($amount , 2) :  '0.00'}}</span>   <span class="sm:inline uppercase" data-i18n="Booking.Currency">ر.س</span> </span>


                                            </button>
                                        </div>


                                    </form>
                                    </div>







                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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


    document.addEventListener("DOMContentLoaded", function() {


        jQuery.extend(jQuery.validator.messages, {
            required: "هذا الحقل مطلوب",
            email: "يرجى ادخال بريد الكتروني صحيح",
            number: "يرجى ادخال ارقام فقط",
            creditcard: "يرجى ادخال رقم بطاقه صحيحه من فضلك",
            maxlength: jQuery.validator.format("يجب ان يزيد عن {0} خانات"),
            minlength: jQuery.validator.format("يجب ان لايقل عن {0} خانات"),
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
                    number: true,
                    required: true,
                    maxlength: 3,
                    minlength: 3,
                },
            },

        });
    });

</script>
</body>
</html>
