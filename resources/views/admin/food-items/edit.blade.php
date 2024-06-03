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
                    <h2 class="pageheader-title">Edit Food Item </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Food Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Food Categories</li>
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
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Create New Food Item</h5>
                        <div class="card-body">
                            <form id="basicform" method="POST" action="/admin/food-items/{{$item->id}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputItem">Food Title</label>
                                    <input id="inputItem" type="text" name="title" data-parsley-trigger="change" required="" placeholder="Enter Item Name" value="{{$item->title}}" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputItem">Price</label>
                                    <input id="inputItem" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter Price" value="{{$item->price}}" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputcategory">Category</label>
                                    <select name="category_id" class="form-control" id="inputrole">
                                       
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" @if($item->id==$category->id) selected @endif>{{$category->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputItemImageUrl">Item Image Url</label>
                                    <input id="inputItemImageUrl" type="text" name="image_url" data-parsley-trigger="change" required="" value="{{$item->image_url}}" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputdescription">Description</label>
                                    <textarea id="inputdescription" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" required autofocus placeholder="Write a Description">{{$item->description}}</textarea>
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