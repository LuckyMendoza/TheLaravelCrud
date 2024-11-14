
// show password 
document.addEventListener("DOMContentLoaded", function () {
    // Select all toggle-password spans
    var togglePasswordFields = document.querySelectorAll(".toggle-password");

    togglePasswordFields.forEach(function (toggle) {
        var targetInputSelector = toggle.getAttribute("data-target");
        var targetInput = document.querySelector(targetInputSelector);

        if (targetInput) {
            toggle.addEventListener("click", function() {
                if (targetInput.type === "password") {
                    targetInput.type = "text";
                    toggle.textContent = "HIDE";
                    toggle.style.color = "#1DA1F2";
                } else {
                    targetInput.type = "password";
                    toggle.textContent = "SHOW";
                    toggle.style.color = "#111";
                }
            });
        }
    });
});

