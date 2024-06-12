@extends('layouts.full-menu')

@section('title')
Food Menu 
@endsection

@section('content')
    <div id="menu-page">
    
      <div class="menu-container">

      @foreach ($categories as $category )
      <div class="menu-box">
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
        
      @endforeach

        {{-- <div class="menu-box">
          <h2>{{$categories[0]->title}}</h2>
        <div class="item-box">
         <div class="item-content">
          <h3>{{$categories[0]->food_items[0]->title}} </h3>
          <div class="dashline"></div>
          <p class="price">{{$categories[0]->food_items[0]->price}} </p>
         </div>
         <p>{{$categories[0]->food_items[0]->description}} </p>
        </div>
        </div> --}}

        {{-- <div class="menu-box">
          <h2>Sushi</h2>
          <div class="item-content">
            <h3>Avocado Sashimi</h3>
            <div class="dashline"></div>
            <p class="price">$9.99</p>
           </div>
           <p>Sliced raw fresh tuna</p>
          </div>

          <div class="menu-box">
            <h2>Sushi</h2>
            <div class="item-content">
              <h3>Avocado Sashimi</h3>
              <div class="dashline"></div>
              <p class="price">$9.99</p>
             </div>
             <p>Sliced raw fresh tuna</p>
            </div>

            <div class="menu-box">
              <h2>Sushi</h2>
              <div class="item-content">
                <h3>Avocado Sashimi</h3>
                <div class="dashline"></div>
                <p class="price">$9.99</p>
               </div>
               <p>Sliced raw fresh tuna</p>
              </div>
              
        <div class="menu-box">
          <h2>Burgers</h2>
        <div class="item-box">
         <div class="item-content">
          <h3>Avocado Sashimi</h3>
          <div class="dashline"></div>
          <p class="price">$9.99</p>
         </div>
         <p>Sliced raw fresh tuna</p>
        </div>
        </div>

        <div class="menu-box">
          <h2>Sushi</h2>
          <div class="item-content">
            <h3>Avocado Sashimi</h3>
            <div class="dashline"></div>
            <p class="price">$9.99</p>
           </div>
           <p>Sliced raw fresh tuna</p>
          </div>

          <div class="menu-box">
            <h2>Sushi</h2>
            <div class="item-content">
              <h3>Avocado Sashimi</h3>
              <div class="dashline"></div>
              <p class="price">$9.99</p>
             </div>
             <p>Sliced raw fresh tuna</p>
            </div>

            <div class="menu-box">
              <h2>Sushi</h2>
              <div class="item-content">
                <h3>Avocado Sashimi</h3>
                <div class="dashline"></div>
                <p class="price">$9.99</p>
               </div>
               <p>Sliced raw fresh tuna</p>
              </div>

              
        <div class="menu-box">
          <h2>Burgers</h2>
        <div class="item-box">
         <div class="item-content">
          <h3>Avocado Sashimi</h3>
          <div class="dashline"></div>
          <p class="price">$9.99</p>
         </div>
         <p>Sliced raw fresh tuna</p>
        </div>
        </div>

        <div class="menu-box">
          <h2>Sushi</h2>
          <div class="item-content">
            <h3>Avocado Sashimi</h3>
            <div class="dashline"></div>
            <p class="price">$9.99</p>
           </div>
           <p>Sliced raw fresh tuna</p>
          </div>

          <div class="menu-box">
            <h2>Sushi</h2>
            <div class="item-content">
              <h3>Avocado Sashimi</h3>
              <div class="dashline"></div>
              <p class="price">$9.99</p>
             </div>
             <p>Sliced raw fresh tuna</p>
            </div>

            <div class="menu-box">
              <h2>Sushi</h2>
              <div class="item-content">
                <h3>Avocado Sashimi</h3>
                <div class="dashline"></div>
                <p class="price">$9.99</p>
               </div>
               <p>Sliced raw fresh tuna</p>
              </div> --}}
        </div>

      

   
        

      </div>
      
    </div>
@endsection