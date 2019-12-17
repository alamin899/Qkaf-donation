@extends('Fontadmin.master')

@section('page-title')
    Product
@endsection

@section('content-heading')
    Product Entry
@endsection



@section('main-content')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-6">

        {!! Form::open(['url' => 'admin/product/save','method'=>'post','enctype'=>'multipart/form-data']) !!}

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label>Catagory</label>
                    <select name="catagoryId" class="form-control">
                        <option value="1">Cat1</option>
                        @foreach($catagories as $catagory)
                            <option value='{{  $catagory->id}}'>{{ $catagory->categoryName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" class="form-control" name="qty">
                </div>

                <div class="form-group">
                    <label>Product Quantity Need</label>
                    <input type="number" class="form-control" name="qtyneed">
                </div>

                <div class="form-group">
                        <label>Product Quantity Received</label>
                        <input type="number" class="form-control" name="qtyreceived">
                    </div>

                <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" placeholder="Enter Short_Description" name="ShortDescription">
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Long Description</label>
                    <textarea class="form-control" placeholder="Enter Long_Description" name="longDescription">
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Product picture</label>
                    <input type="file" name="Images">
                </div>

                <div class="form-group">

                    <input type="submit" value="submit" class="btn btn-block btn-primary">

                </div>
        {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
