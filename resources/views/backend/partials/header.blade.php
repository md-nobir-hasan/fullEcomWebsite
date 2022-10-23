<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> @yield('title') | Ecommerce Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eWeb Admin | Md. Nobir Hasan" name="description" />
    <meta content="Md. Nobir Hasan" name="author" />
    <!-- App favicon -->
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/images/mylogo.png') }}"
        style="border-radius: 62%;">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    {{-- @vite(['resources/css/bootstrap.min.css']) --}}
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('page_style')
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
