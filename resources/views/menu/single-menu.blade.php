@extends('layouts.app')

@section('content')
    <div id="menu-page">
    

     <div class="single-menu-box">
       <h2>{{$category->title}}</h2>
        @foreach ($category->food_items as $item )
        <div class="item-box">
         <div class="item-content">
          <h3>{{$item->title}} </h3>
          <div class="dashline"></div>
          <p class="price">${{$item->price}} </p>
         </div>
         <p>{{$item->description}} </p>
      </div>
      @endforeach

   
        

        </div>
      </div>
      
    </div>
@endsection