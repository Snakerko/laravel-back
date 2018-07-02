 <div class="container-fluid"> 
 {!! Form::open(['route'=> ['dict', $page], 'class'=>'form-inline', 'method'=>'POST' ]) !!}
    <div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Name']) !!}
	    </div>
  	</div>
  	@if($page == 'distributor')
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'City']) !!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Address']) !!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Phone']) !!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('shopping_center', old('shopping_center'), ['class'=>'form-control', 'placeholder'=>'Shopping center']) !!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('section', old('section'), ['class'=>'form-control', 'placeholder'=>'Section']) !!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::text('contact_name', old('contact_name'), ['class'=>'form-control', 'placeholder'=>'Contact name']) !!}
	    </div>
  	</div>
  	@endif
  	<div class="form-group">
	    <div class="col-xs-8">
	      {!! Form::submit('Save') !!}
	    </div>
  	</div>
 {!! Form::close() !!}
</div>