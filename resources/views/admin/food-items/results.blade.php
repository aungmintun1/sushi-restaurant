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
                <div class="col-xl-3 col-lg-3 bg-white mb-12 p-2 rounded-xl">
                    <form action="/admin/food-items/results" method="GET" class="flex flex-col items-start gap-4 max-w-md mx-auto p-4 bg-white rounded-lg">
                        <div class="w-full">
                            <label for="name" class="block text-lg mb-2">Food Item Name</label>
                            <input type="text" name="name" id="name" required class="w-full mb-4 p-2 border border-gray-300 rounded">
                        </div>
                        <div class="w-full">
                            <label for="min_price" class="block text-lg  mb-2">Min Price</label>
                            <input type="number" name="min_price" id="min_price" step="0.01" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                        <div class="w-full">
                            <label for="max_price" class="block text-lg mb-2">Max Price</label>
                            <input type="number" name="max_price" id="max_price" step="0.01" class="w-full mb-4 p-2 border border-gray-300 rounded">
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Search</button>
                    </form>
            </div>
                <!-- ============================================================== -->
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All Food Items</h5>
                        <div class="card-body">
                           
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