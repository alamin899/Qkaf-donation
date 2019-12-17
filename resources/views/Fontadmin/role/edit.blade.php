@extends('Fontadmin.master')
@section('main-content')
    <h3>Edit Roles</h3>
    <div class="container col-sm-6">
        <form action="{{ route('role.update',$role->id) }}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Name of role</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Name of role" value="{{$role->name}}">
            </div>
            <div class="form-group">
                <label for="display_name">Display name</label>
                <input type="text" class="form-control" name="display_name" id="" value="{{$role->display_name}}" placeholder="Display name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$role->description}}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

