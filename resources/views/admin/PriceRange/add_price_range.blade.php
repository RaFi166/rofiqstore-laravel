@extends('admin.admin_layout')

@section('admin_content')

<div class="box-content">
    <form class="form-horizontal" method="POST" action="{{route("submit_price_range")}}">
        @csrf
      <fieldset>
        <div class="control-group">
          <label class="control-label" for="typeahead">Add Price Range</label>
          <div class="controls">
            <input type="text" name="price_range" placeholder="Add Price Range Here!" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
            <button class="btn btn-success">SUBMIT</button>
           
          </div>
        </div>
      </fieldset>
    </form>
</div>

    
@endsection