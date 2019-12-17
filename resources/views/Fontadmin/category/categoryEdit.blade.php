@extends ('admin.master')

@section('page-title')
        Admin :: Catagory Edit
@endsection

@section('content-heading')
         Catagory Edit

@endsection

@section('main-content')
<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    {!! Form::open(['url' => '/catagory/edit','method'=>'post','name'=> 'editForm', 'role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>Catagory Name</label>
                                            <input class="form-control" name="catagoryName" value="{{ $catagory->catagoryName}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" placeholder="Short Description" name="ShortDescription" value="{{ $catagory->ShortDescription}}">
                                            </textarea>
                                        </div>
                                        <input type="hidden" name="catagoryId" value='{{ $catagory ->id}}'>
                                        <div class="form-group">

                                            <input type="submit" value="submit" class="btn btn-block btn-primary">

                                        </div>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>

@endsection
