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
                <li class="breadcrumb-item"><a href="#">Enter License Key</a></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-6 offset-3">
                <div class="shadow">
                    <div class="card" style="padding: 30px">
                        <h3 style="text-align: center !important; padding: 10px;">Enter License Key</h3>
                        <form class="login-form" method="post" action="#" id="licenseKey">
                            <div class="form-group">
                                <input class="form-control" type="number" id="license" name="license" value="" placeholder="Enter License Key" autofocus required>
                            </div>
                            <div class="form-group btn-container">
                                <button type="button" id="activeLicense" onsubmit="" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Active</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@push('script')
    <script>
        $('document').ready(function () {
            $('#activeLicense').click(function () {
                var license = $('#license').val();
                $.ajax({
                    url: '{{ url('active-license-by-key') }}',
                    type: 'get',
                    data: {
                        license: license,
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        if (data==0){
                            alert('Sorry!! This license has been used.');
                        }else {
                            alert('Congratulations!! Your License Has Been Activated. It will work till ' + data.expire_date);
                        }

                        $( '#licenseKey' ).each(function(){
                            this.reset();
                        });
                    }
                });
            });
        });
    </script>
@endpush
@endsection
