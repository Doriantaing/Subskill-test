var form = {
    passwordIcons: document.querySelectorAll('.password-icons'),
    inputSubmit : document.querySelector('input[type="submit"]'),
    inputTerms: document.querySelector('.signIn-conditions > input'),
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
    styleSelect: function(){
      new Selectr('#select-js',{
        searchable: false,
      })
    },
    init: function () {
        this.password();
        this.styleSelect();
    }
}

form.init();