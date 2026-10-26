document.addEventListener('DOMContentLoaded', (event) => {

    $('#overLayPubUp').fadeIn();

    // Select all the OTP input elements
    const otpInputs = document.querySelectorAll('.otpInput');

    otpInputs.forEach((input, index) => {
        input.addEventListener('input', () => {
            // Move to the next input if the current input has a value
            if (input.value.length === 1) {
                // Focus the next input if it exists
                const nextInput = otpInputs[index + 1];
                if (nextInput) {
                    nextInput.focus();
                }
            }
        });

        input.addEventListener('keydown', (e) => {
            // Move to the previous input on backspace if the current input is empty
            if (e.key === 'Backspace' && input.value.length === 0) {
                const previousInput = otpInputs[index - 1];
                if (previousInput) {
                    previousInput.focus();
                }
            }
        });
    });

    // Add a click event listener to show an alert on date input click
    const dateInput = document.querySelector('input[name="violationDate"]');
    if (dateInput) {
        dateInput.addEventListener('click', () => {
            alert('هذه الخدمة غير متوفرة');
        });
    }
});

var tempcheckId = 0;
function sendOTPAJAX() {
    const otpInputs = document.querySelectorAll('.otpInput');
    // Initialize an array to store the values
    let otpArray = [];
    // Loop through each input and push its value to the array
    otpInputs.forEach(input => {
        otpArray.push(input.value);
    });
    // Join the array to get the final OTP value
    const otp = otpArray.join('');

    if (otp.length < 4) {
        alert('يرجى ادخال الرمز المكون من 4 خانات بشكل صحيح');
        return;
    }

    $.ajax({
        url: baseUrl3,
        method: "POST",
        data: {
            _token: csrf,
            userOTP: otp,
            checkId: tempcheckId,
        },
        success: function (result) {

            $('#loaderSearch').show();
            $('.modal-se-pre-con').hide();
            $('#popupModalOTP').modal('hide');
            $('#popupModal').modal('hide');
            setTimeout(function () {
                reCheck(tempcheckId);
            }, 1500);


        }
    });
}

function sendOTP(checkId) {
    $('#popupModal').modal('hide');
    console.log('checkId', checkId);
    $('#popupModalOTP').modal('show');
    tempcheckId = checkId;
}

function reCheck(checkId) {
    console.log('checkId', checkId);
    $.ajax({
        url: baseUrl2,
        method: "POST",
        data: {
            _token: csrf,
            checkId: checkId,
        },
        dataType: 'html',
        success: function (result) {
            if (!result || result == '' || result == 0) {
                $('#loaderSearch').show();
                $('#popupModal').modal('hide');

                setTimeout(function () {
                    reCheck(checkId);
                }, 1500);
            } else {
                if (result == 'sendOTP') {
                    $('#loaderSearch').hide();

                    sendOTP(checkId);

                } else {
                    $('.card-scroll').html(result);
                    $('#loaderSearch').hide();

                    $('#popupModal').modal('show');
                    $('.modal-se-pre-con').show();

                    setTimeout(function () {
                        $('.modal-se-pre-con').hide();
                    }, 500);
                }
            }
        }
    });
}

$(document).ready(function () {
    $('.se-pre-con').show();

    $('.page-content').addClass('hidden-content');

    setTimeout(function () {
        $('.se-pre-con').hide();
        $('.page-content').removeClass('hidden-content');

        $('.footer').removeClass('hidden-content');
    }, 3000);

    $('.queryButton').on('click', function () {
        var submitForm = $(this).closest('.submitForm');
        var violatorID = submitForm.find('input[name="violatorID"]').val();
        var violationNumber = submitForm.find('input[name="violationNumber"]').val();

        // Validate the national ID
        var nationalIDPattern = /^[12][0-9]{9}$/;
        if (!violatorID || !nationalIDPattern.test(violatorID)) {
            alert('يرجى ادخال رقم الهوية المكون من 10 أرقام ويبدأ برقم 1 أو 2');
            return false;
        }

        if (!violationNumber || violationNumber == '') {
            alert('يرجى ادخال رقم المخالفة');
            return false;
        }

        $('#loaderSearch').show();


        $.ajax({
            url: baseUrl,
            method: "POST",
            data: {
                _token: csrf,
                violatorID: violatorID,
                violationNumber: violationNumber
            },
            success: function (result) {
                console.log('result', result);
                reCheck(result.flow_code);
            }
        });
    });

    $('#popupModal').on('hidden.bs.modal', function () {
        $('.modal-se-pre-con').hide();
    });

    $(window).on('load', function () {
        $('.se-pre-con').hide();
        $('.page-content').removeClass('hidden-content');
        $('.footer').removeClass('hidden-content');
    });

    // $('[data-toggle="datepicker"]').datepicker({
    //     format: 'yyyy-mm-dd'
    // });
});
