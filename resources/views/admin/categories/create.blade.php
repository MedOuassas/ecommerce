@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $title }}</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['id' => 'create', 'url' => aurl('categories'), 'method' => 'post', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('categ_name_en', trans('admin.categ_name_en')) !!}
                    {!! Form::text('categ_name_en', old('categ_name_en'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('categ_name_ar', trans('admin.categ_name_ar')) !!}
                    {!! Form::text('categ_name_ar', old('categ_name_ar'), ['class' => 'form-control']) !!}
                </div>

                <div id="jstree_categories"></div>

                <input type="hidden" name="parent" class="parent_id" value="{{ old('parent')}}">
                <div class="form-group">
                    {!! Form::label('description', trans('admin.description')) !!}
                    {!! Form::text('description', old('description'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('keywords', trans('admin.keywords')) !!}
                    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo', trans('admin.photo')) !!}
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>
                {!! Form::button(trans('admin.send'), ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                <a href="{{ aurl('categories') }}" class="btn btn-default">{{ trans('admin.cancel') }}</a>
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>

@push('jscript')
<script>
    $(function () {
        $('#jstree_categories').jstree({
            "core": {
                "themes": {
                    "variant": "large"
                },
                'data' : {!! load_category(old('parent')) !!}
            },
            "checkbox": {
                "keep_selected_style": false
            },
            "plugins": ["wholerow"]
        });

        $('#jstree_categories').on('changed.jstree', function (e,data) {
            /* var i, j, r = [];
            for (i = 0, j=data.selected; i < j.length; i++) {
                r.push(data.instance.get_node(data.selected[i]).id);
            }
            $('.parent_id').val(r.join(', ')); */
            //console.log(data.selected[0]);
            $('.parent_id').val(data.selected[0]);
        });
    });
</script>
@endpush

@endsection
