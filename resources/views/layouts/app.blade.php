<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cartolinha') }}</title>

    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-secondary">
    @include('layouts.nav-bar-admin')

    <div class="py-5">
        @yield('content')
    </div>

    <script>
        $('document').ready(function () {
            $('.add').on('click', function () {
                var $select = $("select[name='" + $(this).attr('data-select') + "']").first().clone();
                $("select[name='" + $(this).attr('data-select') + "']").parent().append($select);
            });
        });
    </script>
</body>
</html>
