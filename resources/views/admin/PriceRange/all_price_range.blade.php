@extends('admin.admin_layout')

@section('admin_content')


<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Price Range</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Price Range</th>
                                                                  
                      </tr>
                  </thead>   
                  <tbody>
                      @foreach ($all_price_range as $price_range)
                          
               
                    <tr>
                        
                        <td class="center">{{$price_range -> id}}</td>
                        <td class="center">{{$price_range -> price_range}}</td>
                                                             
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection