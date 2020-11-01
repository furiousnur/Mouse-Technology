@extends('authLayout')
@section('title') Registration @endsection
@push('css')
    <style>
        .login-content .login-box {
            min-width: 577px;
            min-height: 650px;
        }
    </style>
@endpush
@section('content')
    <section class="login-content">
        <div class="logo">
            <h1>Mouse</h1>
        </div>
        <div class="login-box">
            <form class="login-form" method="post" action="{{route('auth.store')}}">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">First Name <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="first_name" name="first_name"
                                   placeholder="First Name" autofocus required value="{{old('first_name')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Last Name <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="last_name" name="last_name"
                                   placeholder="Last Name" autofocus required value="{{old('last_name')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Email <i class="text text-danger">*</i></label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email"
                                   autofocus required value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Mobile Number <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="mobile" name="mobile"
                                    placeholder="Mobile Number" autofocus required  value="{{old('mobile')}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Name Of Organization <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="name_of_org" name="name_of_org"
                                  placeholder="Name Of Organization" autofocus required value="{{old('name_of_org')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Street <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="street" name="street" placeholder="Street"
                                   autofocus required  value="{{old('street')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">City <i class="text text-danger">*</i></label>
                            <input class="form-control" type="text" id="city" name="city" placeholder="city" autofocus
                                   required value="{{old('city')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Password <i class="text text-danger">*</i></label>
                            <input class="form-control" type="password" id="password" name="password"
                                   placeholder="Password" autofocus required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">Confirm Password <i class="text text-danger">*</i></label>
                            <input class="form-control" type="password" id="password_confirmation"
                                   name="password_confirmation" placeholder="Confirm Password" autofocus required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group btn-container">
                            <button type="submit" class="btn btn-primary btn-block"><i
                                    class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN
                            </button>
                            <br>
                            <a href="{{route('login')}}" style="margin-top: 10px">Back to Sign In</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
