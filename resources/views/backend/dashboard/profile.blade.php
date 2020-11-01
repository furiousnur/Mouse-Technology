@extends('backend.layouts.layout')
@section('title') Profile @endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> My Profile</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">My Profile</a></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="shadow">
                    <div class="card" style="padding: 30px">
                        <h3 style="text-align: center !important; padding: 10px;">My Details</h3>
                        <br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">First Name:</th>
                                    <td>{{$user->first_name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Last Name:</th>
                                    <td>{{$user->last_name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile:</th>
                                    <td>{{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name Of Organization:</th>
                                    <td>{{$user->name_of_org}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">City:</th>
                                    <td>{{$user->city}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Street:</th>
                                    <td>{{$user->street}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status:</th>
                                    <td>
                                        @if($user->status == 1)
                                            <span class="badge badge-danger">Inactive</span>
                                        @else
                                            <span class="badge badge-success">Active</span>
                                        @endif
                                    </td>
                                </tr>
                                @if($user->status == 2)
                                    <tr>
                                        <th scope="row">Expire Date:</th>
                                        <td>
                                            <span class="badge badge-success">{{$user->expire_date}}</span>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
