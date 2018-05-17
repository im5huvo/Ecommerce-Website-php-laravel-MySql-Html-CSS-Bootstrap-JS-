@extends('admin.layout.admin')
@section('content')
    <h3>Add product</h3>
    <div class="row">

<div class="col-md-6 col-md-offset-3">
    {!!  Form::open(['route' => 'product.store','method'=>'post', 'files' => true]) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('description', 'Descripiyon') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('size', 'Size') }}
        {{ Form::select('size', ['small'=>'Small','medium'=>'Medium', 'large'=>'Large'],null, array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('category_id', 'Categories') }}
        {{ Form::select('category_id',['men'=>'Men','women'=>'Women', 'child'=>'Child'] ,null, array('class' => 'form-control','placeholder'=>'Select')) }}

    </div>

    <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Save', array('class' => 'btn')) }}
    {{Form::close()}}

</div>





    </div>


    @endsection