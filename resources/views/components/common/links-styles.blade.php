<link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
	  integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/flat.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
{{--<link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">--}}
<link rel="stylesheet" href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/min/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}">

<script src="{{ asset('assets/js/setTheme.js') }}"></script>

<style>
    #page-container.main-content-boxed > #main-container .content,
    #page-container.main-content-boxed > #page-footer .content,
    #page-container.main-content-boxed > #page-header .content,
    #page-container.main-content-boxed > #page-header .content-header {
        max-width: 1740px !important;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .btn-primary {
        color: #fff !important;
    }

    .btn-primary:hover {
        background-color: #025197 !important;
    }

    /* light-mode */
    /* .active-menu {
		background-color: #f3f3f3;
	} */

    .waves-effect {
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    .bg-gradient {
        background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.192), rgba(255, 255, 255, 0)) !important;
    }

    .btn-success {
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
    }

    .btn-warning {
        background-color: #F0AD54 !important;
        border-color: #F0AD54 !important;
    }

    .btn-danger {
        background-color: #D9534F !important;
        border-color: #D9534F !important;
    }

    .btn-info {
        background-color: #61BDE5 !important;
        border-color: #61BDE5 !important;
    }

    .btn-pdf {
        background-color: #C14643 !important;
        border-color: #C14643 !important;
    }

    .btn-excel {
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
    }

    .btn-primary {
        background-color: #0275D8 !important;
        border-color: #0275D8 !important;
    }

    .btn-refresh {
        background-color: #F0AD4E !important;
        border-color: #F0AD4E !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
        list-style: none;
    }

    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
        background-color: #e3e3e3;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: .35em .65em;
        margin-right: .375rem;
        margin-bottom: .375rem;
        font-size: 1rem;
        color: #000;
        cursor: auto;
        border: none;
        border-radius: .25rem;
        height: 1.375rem;
        line-height: 1.375rem;
        font-weight: 400;
    }

</style>