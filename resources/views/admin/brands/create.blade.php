@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $title }}</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['id' => 'create', 'url' => aurl('brands'), 'method' => 'post', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name_en', trans('admin.name_en')) !!}
                    {!! Form::text('name_en', old('name_en'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
                    {!! Form::text('name_ar', old('name_ar'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('logo', trans('admin.logo')) !!}
                    {!! Form::file('logo', ['class' => 'form-control']) !!}
                </div>
                {!! Form::button(trans('admin.send'), ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                <a href="{{ aurl('brands') }}" class="btn btn-default">{{ trans('admin.cancel') }}</a>
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>



@endsection
