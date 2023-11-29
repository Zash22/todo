<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @csrf
    @vite(['resources/js/app.js'])
    <title>Laravel</title>
</head>
<body>
<div id="app">
    <welcome></welcome>
</div>
</body>
</html>


