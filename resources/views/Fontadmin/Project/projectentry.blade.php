@extends('Fontadmin.master')

@section('page-title')
    Project
@endsection

@section('content-heading')
    Project Entry
@endsection
@section('main-content')
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                 {!! Form::open(['url' => 'admin/project/save','method'=>'post','role'=>'form']) !!}
                    <div class="form-group">
                        <label>Project Name</label>
                        <input class="form-control" name="ProjectName">

                    </div>
                    <div class="form-group">
                        <label>Project Short Description</label>
                        <textarea class="form-control" placeholder="Project Description" name="projectdescription">
                        </textarea>
                    </div>

                    <div class="form-group">

                        <input type="submit" value="submit" class="btn btn-block btn-primary">

                    </div>
                </form>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
