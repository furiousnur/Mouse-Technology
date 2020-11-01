@extends('authLayout')
@section('title') Login @endsection
@section('content')
<section class="login-content">
    <div class="logo">
        <h1>Mouse</h1>
    </div>
    <div class="login-box">
        <form class="login-form" method="post" action="{{route('auth.login')}}">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group">
                <label class="control-label">Mobile Number</label>
                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Mobile Number" autofocus>
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" id="password"  name="password" placeholder="Password">
            </div>
            <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                <br>
                <a href="{{route('registration')}}" style="margin-top: 10px">Sign Up here</a>
            </div>
        </form>
    </div>
</section>
@endsection
