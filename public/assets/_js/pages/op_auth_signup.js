// Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
class pageAuthSignUp {
    /*
     * Init Sign Up Form Validation
     *
     */
    static initValidationSignUp() {
        // Load default options for jQuery Validation plugin
        Codebase.helpers('jq-validation');

        // Init Form Validation
        jQuery('.js-validation-signup').validate({
            rules: {
                'name': {
                    required: true,
                },
                'email': {
                    required: true,
                    emailWithDot: true
                },
                'password': {
                    required: true,
                    minlength: 8
                },
                'password-confirm': {
                    required: true,
                    equalTo: '#password'
                },
                'signup-terms': {
                    required: true
                }
            },
            messages: {
                'name': {
                    required: 'Please enter a name',
                    minlength: 'Your name must consist of at least 3 characters'
                },
                'email': 'Please enter a valid email address',
                'password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 8 characters long'
                },
                'password-confirm': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 8 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'signup-terms': 'You must agree to the T/C!'
            }
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initValidationSignUp();
    }
}

// Initialize when page loads
Codebase.onLoad(() => pageAuthSignUp.init());
