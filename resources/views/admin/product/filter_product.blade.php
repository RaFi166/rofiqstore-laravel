@extends('homepage.home_layout')

@section('home_content')
    

<section class="features">

    <div class="feature-texts">
        <h3>Products</h3>

    </div>

    <div class="products">
    <div class="col col-1-of-4">
        

    </div>

    @foreach ($all_products as $products)
        
 
    <div class="col col-1-of-4">
        
        <img src="{{asset('homepage/images/2.jpg')}}" alt="first image">
        <h3>
            {{$products -> product_name}}
        </h3>
        <h3>Price: {{$products -> price}} Taka</h3>
        <h4>Expiry Date: {{$products -> expiry_date}}</h4>
        
    </div>
    @endforeach
   
  



  
  
</div>

</section>
@endsection