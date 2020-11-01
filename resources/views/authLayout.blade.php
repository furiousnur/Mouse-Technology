<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    @stack('css')
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
@yield('content')
<script src="{{mix('js/main.js')}}"></script>
{!! Toastr::message() !!}
@stack('js')
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
