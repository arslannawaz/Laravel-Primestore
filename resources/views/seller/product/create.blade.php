@extends('seller.layout.dashboard')

@section('content-head')
    <h3>Add Product</h3>
@stop


@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">

                {!! Form::open(['action' => 'SellerProductController@store','method'=>'POST','files'=>'true','class'=>'form-horizontal form-label-left']) !!}
                @csrf

                <div class="item form-group">
                    {!! Form::label('title','Title Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('title',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="item form-group">
                    {!! Form::label('price','Price',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('price',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('price') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="item form-group">
                    {!! Form::label('description','Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('description',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('description') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="item form-group">
                    {!! Form::label('categories_id','Category',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::select('categories_id',[''=>'Choose Option']+$categories,null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('categories_id'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('categories_id') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="item form-group">
                    {!! Form::label('pic','Picture',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::file('src',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('src'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('src') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        {!! Form::submit('Add Product',['class'=>'btn btn-success']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>



@stop