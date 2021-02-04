@extends('admin.admin_layout')
@section('admin_content')

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
          <tr>
              <th>Product ID</th>
              <th>Product Name</th>              
              <th>Price Range</th>
              <th>Product Price</th> 
              <th>Expiry Date</th>      
              <th>Action</th>       
          </tr>

      </thead> 

      <tbody>
          @foreach ($all_product as $product)
          <tr>
            <td> {{$product -> id}}  </td>
            <td class="center">{{$product -> product_name}}</td>
            <td class="center">{{ $product -> relationBetweenPriceRangeCat-> price_range}}</td>
            <td class="center">{{ $product -> price}}</td>
            <td class="center">{{$product -> expiry_date}}</td>
            
            
            <td class="center">
            <a class="btn btn-info" href="{{URL::to('/product_edit/'.$product -> id)}}">
                    <i class="halflings-icon white edit"></i>  
                </a>

                <a class="btn btn-danger" href="{{URL::to('/delete_product/'.$product -> id)}}">
                    <i class="halflings-icon white trash"></i> 
                </a>
            </td>
        </tr>
    
              
          @endforeach
        
                              
 

        
      </tbody>
    </table>
</div>
@endsection