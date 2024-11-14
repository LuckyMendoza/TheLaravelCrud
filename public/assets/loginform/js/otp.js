
    // OTP verification
    const inputs = document.querySelectorAll('.otp-input');
    const form = document.querySelector('form');
    const hiddenInput = document.getElementById('otp-hidden');

    inputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            if (this.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });
        
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    form.addEventListener('submit', function(e) {
        const otp = Array.from(inputs).map(input => input.value).join('');
        
        if (otp.length === inputs.length) {
            hiddenInput.value = otp;
        } else {
            e.preventDefault(); // Prevents form submission if OTP is incomplete
            alert("Please complete the OTP.");
            return;
        }

        this.submit();
    });

    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    inputs[0].addEventListener('paste', function(e) {
        e.preventDefault();
        const pastedData = e.clipboardData.getData('text').slice(0, inputs.length);
        if (/^\d+$/.test(pastedData)) {
            [...pastedData].forEach((digit, index) => {
                if (inputs[index]) {
                    inputs[index].value = digit;
                }
            });
            if (inputs[pastedData.length - 1]) {
                inputs[pastedData.length - 1].focus();
            }
        }
    });
