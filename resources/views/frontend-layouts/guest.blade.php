<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Assignement In Need -> Assignment Help</title>
    
    <base href="/public">
    <!-- Include CSS -->
    @include('frontend-layouts.css')
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!-- Include Scripts -->
   
</head>
<body class="hidden-bar-wrapper">
   
    <div class="page-wrapper">
        @yield('content')
    </div>
    
    <!-- Scroll to Top Button -->
 
    <!-- Include JavaScript -->
    @include('frontend-layouts.js')
    
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
