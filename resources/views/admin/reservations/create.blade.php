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
                    <h2 class="pageheader-title">Create Reservations </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link">All Reservations</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Reservation</li>
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
                        <h5 class="card-header">Create New Reservations</h5>
                        <div class="card-body">
                            <form id="basicform" method="POST" action="/admin/reservations">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="First Name"
                                    id="fname" class="block mt-1 w-full" type="text" name="fname" value="joe" required autofocus>
                                    <span style="color: red;">@error('fname') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Last Name"
                                    id="lname" class="block mt-1 w-full" type="text" name="lname" value="doe" required autofocus>
                                    <span style="color: red;">@error('lname') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Email address" id="email" type="text" name="email" value="joe@gmail.com" required autofocus>
                                    <span style="color: red;">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg"  placeholder="Enter phone number" id="password" type="number" name="phone_number" value="3476816252" required autofocus>
                                    <span style="color: red;">@error('phone_number') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="guestsinput">How Many Guest</label>
                                    <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsinput">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                    @error('guests_total')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="timeinput">What Time?</label>
                                    <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput">
                                      <option value="6">6:00 PM</option>
                                      <option value="7">7:00 PM</option>
                                      <option value="8">8:00 PM</option>
                                      <option value="9">9:00 PM</option>
                                      <option value="10">10:00 PM</option>
                                    </select>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
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
                <!-- ============================================================== -->
     
            </div>
         
   
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection