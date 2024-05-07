<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>UserModule Module - {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Vite CSS --}}
    {{-- {{ module_vite('build-usermodule', 'resources/assets/sass/app.scss') }} --}}
</head>

<body>
    @yield('content')

    {{-- Vite JS --}}
    {{-- {{ module_vite('build-usermodule', 'resources/assets/js/app.js') }} --}}
</body>
{{-- @foreach ($ticketsBooked as $ticketBooked)
 {
 @if ($ticketBooked->itinerary_management_id === $result->itinerary_management_id && $ticketBooked->coaches_id === $result->id && $ticketBooked->seat_position === $col . $row)
{
<p class="tiket" data-value=" $col . $row "></p>
}
@else{
<p class="tiketsBooked" data-value=" $col . $row "></p>
}
}
 @endif
 @endforeach --}}
