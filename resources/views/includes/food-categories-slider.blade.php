<section id="food-preview"  >
    <h3>From The Kitchen</h3>
    <h2>Explore Our Menu</h2>
    <div class="category-titles">@foreach ($categories as $category) <a href="#">{{$category->title}}</a>   @endforeach</div>
    
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
     
        @foreach ($categories as $category)
            <a href="/menu/{{$category->title}}" class="slide capitalize">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  {{$category->title}}
                </div>
                <p class="food-description">
                  {{$category->description}}
                </p>
                <div class="food-image">
                  <img src="/img/{{$category->image_url}}">
                </div>
              </div>
          </a>
        @endforeach
          
          
        </div>
      </div>
    </div>

  </section>

  
