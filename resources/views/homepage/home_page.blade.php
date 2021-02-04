@extends('homepage.home_layout')

@section('home_content')
    

<section class="features">

    <div class="feature-texts">
        <h3>Products</h3>

    </div>

    <div class="products">
    <div class="col col-1-of-4">
        
        <h1>Filter By Price:</h1>
      

        @php
        $price_range= App\Models\PriceCat::all();
         @endphp
  
   <ul>
       @foreach ($price_range as $range)                                                       
   <li>
       <a href="{{URL::to('/filtered_product/'.$range ->id)}}"> {{$range -> price_range}}</a>
      
    </li>
       @endforeach                      
   </ul>

    </div>

    @foreach ($home_product as $home_pro)
        
 
    <div class="col col-1-of-4">
        
        <img src="{{asset('homepage/images/2.jpg')}}" alt="first image">
        <h3>
            {{$home_pro -> product_name}}
        </h3>
        <h3>Price: {{$home_pro -> price}} Taka</h3>
        <h4>Expiry Date: {{$home_pro -> expiry_date}}</h4>
        
    </div>
    @endforeach
   
  



  
  
</div>

</section>
@endsection