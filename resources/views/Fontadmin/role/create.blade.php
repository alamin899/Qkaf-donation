@extends('Fontadmin.master')
@section('main-content')
    <h3>Create Roles</h3>
<div class="container col-sm-6">
    <form action="{{ route('role.store') }}" method="post" role="form">
        {{csrf_field()}}

    	<div class="form-group">
    		<label for="name">Name of role</label>
    		<input type="text" class="form-control" name="name" id="" placeholder="Name of role">
    	</div>
        <div class="form-group">
    		<label for="display_name">Display name</label>
    		<input type="text" class="form-control" name="display_name" id="" placeholder="Display name">
    	</div>
        <div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" id="" placeholder="Description">
    	</div>

    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

