@extends('layouts.admin')

@section('content')
<div class="dashboard-wrapper">

            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit General Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit General Settings</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/settings/general">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputtitle">Business Name</label>
                                            <input id="inputtitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="SushiFushi" required autocomplete="site_title" autofocus placeholder="Add Site Title">

                                            @error('site_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputadress1">Address 1</label>
                                            <input id="inputaddress1" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="56 12th Ave" required autocomplete="address_1" autofocus placeholder="Add Street Adress">

                                            @error('address_1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputadress2">Address 2</label>
                                            <input id="inputaddress2" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="New York, NY 10011" autocomplete="address_2" autofocus placeholder="">

                                            @error('address_2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputcity">City</label>
                                            <input id="inputacity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="New York" required autocomplete="city" autofocus placeholder="">

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputstate">State</label>
                                            <input id="inputastate" type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name="state" value="NY" required autocomplete="state" autofocus placeholder="">

                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputzipcode">Zipcode</label>
                                            <input id="inputazipcode" type="text" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" name="zipcode" value="10011" required autocomplete="zipcode" autofocus placeholder="">

                                            @error('zipcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputphonenumber">Phone Number</label>
                                            <input id="inputaphonenumber" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="+1 800 603 6035" required autocomplete="phone_number" autofocus placeholder="">

                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        
                    </div>
                    
            </div>
</div>
@endsection


