<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/png" href="{{ asset('client/assets/img/favicon.png') }}">
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- fontawesome -->
<link rel="stylesheet" href="{{ asset('client/assets/css/all.min.css') }}">
<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('client/assets/bootstrap/css/bootstrap.min.css') }}">
<!-- owl carousel -->
<link rel="stylesheet" href="{{ asset('client/assets/css/owl.carousel.css') }}">
<!-- magnific popup -->
<link rel="stylesheet" href="{{ asset('client/assets/css/magnific-popup.css') }}">
<!-- animate css -->
<link rel="stylesheet" href="{{ asset('client/assets/css/animate.css') }}">
<!-- mean menu css -->
<link rel="stylesheet" href="{{ asset('client/assets/css/meanmenu.min.css') }}">
<!-- main style -->
<link rel="stylesheet" href="{{ asset('client/assets/css/main.css') }}">
<!-- responsive -->
<link rel="stylesheet" href="{{ asset('client/assets/css/responsive.css') }}">


@yield('link')

<style>
    .s-text {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .s-text-2 {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        width: fit-content;
    }
    
    .notification {
        position: fixed;
        bottom: 10px;
        left: 10px;
        z-index: 999;
    }

    .notification .message {
        background: #F28123;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .error {
        color: red;
    }

    .text-bold {
        font-weight: bold !important;
    }

    .custom-account form button {
        color: #787878;
        display: block;
        height: 40px;
        font-size: 14px;
        line-height: 34px;
        border: none;
        background: none;
        outline: none;
        border-bottom: 1px solid rgba(242,244,248,.7);
        width: 100%;
        text-align: left;
        padding: 0 20px;
        cursor: pointer;
    }

    .cus-pagin {
        list-style: none;
        display: flex;
        justify-content: center;
        padding-left: 0;
    }
    
    .cus-pagin li a {
        margin-left: 10px;
        font-size: 20px;
        color: black;
    }
    
    .cus-pagin li a.active {
        color: #FFD333 !important;
        font-weight: bold;
        background: white;
        padding: 5px 10px;
    }

    .img-responsive {
        width: 200px;
        margin: 0 auto;
        object-fit: contain;
    }

    .active-menu {
        color: #F28123 !important;
    }

    .product-filters .active a {
        color: white;
    }

    .product-filters a {
        color: black;
    }

    .billing-address-form input,
    .billing-address-form textarea {
        border: 1px solid #ddd;
        padding: 15px;
        width: 100%;
        border-radius: 3px;
    }

    h1 {
        font-family: system-ui;
    }

    @media only screen and (max-width: 992px) {
        .sub-menu {
            width: 100% !important;
        }
    }
</style>