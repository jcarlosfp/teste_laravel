<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>@yield('title')</title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/feathericon.min.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/plugins/morris/morris.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
   </head>
   <body>
      <div class="main-wrapper">
         @include('layouts._partials.header')
         @include('layouts._partials.sidebar')
         @yield('main')
      </div>

      <script src="{!! asset('assets/js/jquery-3.6.0.min.js') !!}"></script>
      <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
      <script src="{!! asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>
      {{-- Scripts Adicionais --}}
      @yield('scripts')
      <script src="{!! asset('assets/js/script.js') !!}"></script>

   </body>
</html>