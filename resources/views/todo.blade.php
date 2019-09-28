@extends('master')
@section('content')
<div class="container">
    <a href="{{route('todo.add')}}" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">
        	{{-- Day la comment --}}
        	@php
			    echo 'nguyen cong hoan';
			    if(1 > 0){
			    	echo 'hello';
			    }			
			@endphp
            <thead>
				@if(count($lists) > 0)
            	<tr>
	                <th>#</th>
	                <th>Todo</th>
	                <th>Created at</th>
	                <th>Updated at</th>
	                <th>Action</th>
	            </tr>
	            </thead>
	            <tbody>
	            	@foreach($lists as $key => $item)
	            	<tr>
		                <td>{{ $key + 1}}</td>
		                <td>{{ $item }}</td>
		                <td>23/8/2019</td>
		                <td>23/8/2019</td>
		                <td>
		                    <a style="display: inline-block; width: 67px;" href="#" class="btn btn-warning">Edit</a>
		                    <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
		                        @csrf
		                        {{method_field('delete')}}
		                        <button type="submit" class="btn btn-danger">Delete</button>
		                    </form>
		                </td>
	            	</tr>
	            	@endforeach

            	@else
				<h2>khong co du lieu</h2>
            	@endif




          
            	
            
            </tbody>
        </table>
    </div>
</div>
@endsection