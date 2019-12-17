@extends('Fontadmin.master')

@section('page-title')
    Category
@endsection

@section('content-heading')
    Category Entry
@endsection
@section('main-content')
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">

                 {!! Form::open(['url' => 'admin/category/save','method'=>'post','role'=>'form']) !!}

                    <div class="form-group">
                        <label>Catagory Name</label>
                        <input class="form-control" name="categoryName">

                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" placeholder="Category Description" name="CategoryDescription">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Project_id</label>
                        <input class="form-control" name="project_id" type="number">..

                    </div>
                    {{-- <div class="form-group">
                        <label>Project</label>
                        <select name="Project_id" class="form-control">
                            @foreach($projects as $project)
                                <option value='{{  $project->id}}'>{{ $project->projectName }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">

                        <input type="submit" value="submit" class="btn btn-block btn-primary">

                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
