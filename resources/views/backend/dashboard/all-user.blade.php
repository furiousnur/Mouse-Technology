@extends('backend.layouts.layout')
@section('title') All User @endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Key Generate</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">All User</a></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="shadow">
                    <div class="card" style="padding: 30px">
                        <h3 style="text-align: center !important; padding: 10px;">All User</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">User Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->first_name}}</td>
                                    <td>{{$value->last_name}}</td>
                                    <td>{{$value->mobile}}</td>
                                </tr>
                            @empty
                                <h4>No data found.</h4>
                            @endforelse
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
    </main>
@endsection
