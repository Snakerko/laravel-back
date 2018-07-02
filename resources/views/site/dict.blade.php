@extends('layouts.app')

@section('header')
    @include('site.header')
@endsection

@section('dictform')
	<div class="container">
	@if(isset($old))
		@include('site.editform')
	@else
		@include('site.createform')
	@endif
	</div>
@endsection

@section('content')
<div class="container">
	{{ $items->links() }}
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Synonym</th>
				<th>GUID</th>
			</tr>
		</thead>
		<tbody>
			@foreach($items as $item)
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ $item->synonyms }}</td>
					<td>{{ $item->guid }}</td>
					<td>
			            {!! Form::open(['route' =>['dictEdit', $page, $item->id], 'class'=>'form-inline', 'method'=>'GET' ]) !!}
			              {!! Form::button('Редактировать', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
			            {!! Form::close() !!}
			        </td>
					<td>
			            {!! Form::open(['route' =>['dictEdit', $page, $item->id], 'class'=>'form-inline', 'method'=>'POST' ]) !!}
			              {{ method_field('DELETE') }}
			              {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
			            {!! Form::close() !!}
			        </td>
				</tr>		
			@endforeach
		</tbody>
	</table>	
	{{ $items->links() }}
</div>
@endsection