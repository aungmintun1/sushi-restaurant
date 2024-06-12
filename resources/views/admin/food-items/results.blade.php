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
                    <h2 class="pageheader-title">Food Items </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Food Items</li>
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
                        <h5 class="card-header">All Food Items</h5>
                        <div class="card-body">
                            <form action="/admin/food-items/results" method="GET" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px; max-width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
                              
                                <div style="display: flex; flex-direction: column; width: 100%;">
                                    <label for="name" style="margin-bottom: 5px; font-weight: bold;">Food Item Name</label>
                                    <input type="text" name="name" id="name" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                                </div>
                                <div>
                                    <button type="submit" style="padding: 10px 15px; border: none; background-color: #28a745; color: white; border-radius: 4px; cursor: pointer;">Search</button>
                                </div>
                            </form>
                            <table class="table mb-8">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($foodItems as $item )
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{date('m/d/Y', strtotime($item->updated_at))}}</td>
                                        <td><a href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                        <td>
                                        <form  method="POST" action="/admin/food-items/{{$item->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <a href="/admin/food-items/{{$item->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="far fa-trash-alt"></i></a>
                                        </form>
                                        </td>  
                                    </tr>
                                      
                                  @endforeach
                                 
                                </tbody>
                            </table>
   
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