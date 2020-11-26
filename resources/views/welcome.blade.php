<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.min.css"> --}}
        <!-- Styles -->

        <style>
            body{
                background: #16F4D0
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div id="app">
                <router-view></router-view>
            </div>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/jquery.overlayScrollbars.min.js"></script> --}}
    </body>
</html>
