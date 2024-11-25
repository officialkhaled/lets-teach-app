class pageAuthSignIn {
    /*
     * Init Sign In Form Validation
     *
     */
    static initValidationSignIn() {
        // Load default options for jQuery Validation plugin
        Codebase.helpers('jq-validation');

        // Init Form Validation
        jQuery('.js-validation-signin').validate({
            rules: {
                'email': {
                    required: true,
                    emailWithDot: true
                },
                'password': {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                'email': {
                    required: 'Please enter a valid email address',
                },
                'password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                }
            }
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initValidationSignIn();
    }
}

// Initialize when page loads
Codebase.onLoad(() => pageAuthSignIn.init());
