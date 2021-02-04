@extends('admin.admin_layout')

@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Products Add</h2>
          
        </div>
        <div class="box-content">

        <form class="form-horizontal" action="{{route('submit_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Product Name </label>
                  <div class="controls">
                  <input type="text" required name="product_name" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                  </div>
                </div>

                <div class="control-group">
                    <label class="control-label"  for="selectError3">Add Price Range</label>
                    <div class="controls">
                      
                      <select id="selectError3" required name="price_range_id" >
                       
                        <option value=""> Select Price Range</option>
                        
                        @foreach ($all_price_range as $price_range)
                        <option value="{{ $price_range -> id}}">{{$price_range -> price_range }}</option>
                        
                        @endforeach
                      
                      </select>
                    
                        
                    </div>
                  </div>

              

                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price </label>
                    <div class="controls">
                      <input type="text" required name="price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label">Expiry Date</label>
                    <div class="controls">
                      <input type="date" required name="expiry_date" value="">
                    </div>
                  </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection