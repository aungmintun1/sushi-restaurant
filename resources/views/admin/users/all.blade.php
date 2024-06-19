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
                    <h2 class="pageheader-title">Users </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All Users</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user )
                                      <tr>
                                          <th scope="row">{{$user->id}}</th>
                                          <td>{{$user->fname}} {{$user->lname}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>@if($user->roles[0]->pivot->role_id == 1) Admin @else Employee @endif</td>
                                          <td>{{date('m/d/Y', strtotime($user->updated_at))}}</td>
                                          <td><a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a></td>
                                          {{-- <td><a href="/admin/users/{{$user->id}}" onclick="if (!confirm('Are you sure you want delete category?')) {return false;}"><i class="far fa-trash-alt"></i></a></td> --}}
                                          <td>
                                          <form method="POST" action="/admin/users/{{$user->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/admin/users/{{$user->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="far fa-trash-alt"></i></a>
                                          </form>
                                          </td>  
                                      </tr>
                                        
                                    @endforeach
                                    
                                 
                                </tbody>

                            </table>
                        
                            {{-- {{$users->links()}} --}}
                              
                        </div>
                        </div>
                    </div>
                   
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
</div>
@endsection