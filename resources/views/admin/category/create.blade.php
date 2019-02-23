@extends('admin.layout.dashboard')

@section('content-head')
    <h3>Add Category</h3>
@stop

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">

                {!! Form::open(['action' => 'AdminCategoryController@store','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}
                @csrf

                <div class="item form-group">
                    {!! Form::label('name','Category Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('name') }}</strong>
                         </span>
                    @endif

                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        {!! Form::submit('Add Category',['class'=>'btn btn-success']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop