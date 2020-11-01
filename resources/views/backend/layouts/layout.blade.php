<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description"
          content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
          content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/main.css')}}">
    @stack('css')
{{--    @livewireStyles--}}
</head>
<body class="app sidebar-mini">
    <div>
        @include('backend.layouts.header')
        @include('backend.layouts.sidebar')
        @yield('content')
    </div>
<script src="{{mix('js/main.js')}}"></script>
{!! Toastr::message() !!}
<!-- Google analytics script-->
@stack('script')
<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{$error}}', 'Error', {
                closeButton:true,
                progressBar:true,
            });
        @endforeach
    @endif
</script>
</body>
</html>
