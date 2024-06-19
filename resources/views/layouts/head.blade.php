<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- for font awesome -->
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/rel-icon.png') }}" type="image/x-icon">

    <title>@yield('title', config('app.name'))</title>
    <!-- for toastfy -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- tailwind links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>