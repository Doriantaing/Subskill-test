var form = {
    passwordIcons: document.querySelectorAll('.password-icons'),
    inputSubmit: document.querySelector('input[type="submit"]'),
    inputTerms: document.querySelector('.signIn-conditions > input'),
    inputSelect: document.querySelectorAll('.select-js'),
    password: function () {
        for (let i = 0; i < this.passwordIcons.length; i++) {
            this.passwordIcons[i].addEventListener('click', function () {
                changeInputPassword(form.passwordIcons[i]);
            })
        }

        function changeInputPassword(element) {
            var passwordParent = element.parentNode;
            var passwordInput = element.previousElementSibling;
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordParent.classList.add('signIn-input_password--active');
            } else {
                passwordInput.type = "password";
                passwordParent.classList.remove('signIn-input_password--active')
            }
        }
    },
    styleSelect: function () {
        console.log("ok");
        for (let i = 0; i < this.inputSelect.length; i++) {
            if (window.innerWidth > 768) {     
                new Selectr(this.inputSelect[i], {
                    searchable: false,
                })
            }
        }
    },
    init: function () {
        this.password();
        this.styleSelect();
    }
}

form.init();
