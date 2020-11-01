@extends('backend.layouts.layout')
@section('title') Key Generate @endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Key Generate</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Key Generate</a></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="shadow">
                    <div class="card" style="padding: 30px">
                        <h3 style="text-align: center !important; padding: 10px;">Create License</h3>
                        <form class="login-form" method="post" action="#">
                            <div class="form-group">
                                <label class="control-label">User ID</label>
                                <input class="form-control" type="number" id="user_id" name="user_id" value="" placeholder="Enter Your User ID" autofocus required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">License Key</label>
                                <input class="form-control" type="text" id="license_key"  name="license_key" placeholder="License Key" readonly>
                            </div>
                            <div class="form-group btn-container">
                                <button type="button" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Submit</button>
                            </div>

                            <div class="form-group">
                                <label class="control-label">License For</label>
                                <select name="" id="expire_date" class="form-control">
                                    <option value="" selected hidden disabled>Select Month</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group btn-container">
                                <button type="button" id="keyGenerate" onsubmit="" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Key Generate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="shadow">
                    <div class="card" style="padding: 30px">
                        <h3 style="text-align: center !important; padding: 10px;">User Details</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">First Name:</th>
                                    <td><p id="first_name"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Last Name:</th>
                                    <td><p id="last_name"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td><p id="email"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile:</th>
                                    <td><p id="mobile"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Name Of Organization:</th>
                                    <td><p id="name_of_org"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">City:</th>
                                    <td><p id="city"></p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Street:</th>
                                    <td><p id="street"></p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@push('script')
    <script>
        $('document').ready(function () {
            $('#user_id').change(function () {
                // alert('done');
                var id = $('#user_id').val();
                $.ajax({
                    url: '{{ url('get-user-details') }}',
                    type: 'get',
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        $('#first_name').html(data.first_name);
                        $('#last_name').html(data.last_name);
                        $('#mobile').html(data.mobile);
                        $('#email').html(data.email);
                        $('#city').html(data.city);
                        $('#street').html(data.street);
                        $('#name_of_org').html(data.name_of_org);
                    }
                });
            });

            $('#keyGenerate').click(function () {
                // alert('done');
                var expire_date = $('#expire_date').val();
                var id = $('#user_id').val();
                $.ajax({
                    url: '{{ url('get-key-generate') }}',
                    type: 'get',
                    data: {
                        id: id,
                        expire_date: expire_date,
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $('#license_key').val(data);
                    }
                });
            });
        });
    </script>
@endpush
@endsection
