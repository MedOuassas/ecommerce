@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $title }}</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['id' => 'create_product', 'url' => aurl('products/'.$product->id), 'method' => 'post', 'files' => true]) !!}

                {!! Form::button(trans('admin.save'), ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                <a href="{{ aurl('products') }}" class="btn btn-info">{{ trans('admin.save_continue') }}</a>
                <a href="{{ aurl('products') }}" class="btn btn-default">{{ trans('admin.clone_product') }}</a>
                <a href="{{ aurl('products') }}" class="btn btn-danger">{{ trans('admin.delete') }}</a>

                <hr>

                <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#product_info"><i class="fa fa-info margin"></i>{{ trans('admin.product_info') }}</a></li>
                    <li><a data-toggle="tab" href="#category"><i class="fa fa-list margin"></i>{{ trans('admin.category') }}</a></li>
                    <li><a data-toggle="tab" href="#product_setting"><i class="fa fa-cog margin"></i>{{ trans('admin.product_setting') }}</a></li>
                    <li><a data-toggle="tab" href="#product_media"><i class="fa fa-photo margin"></i>{{ trans('admin.product_media') }}</a></li>
                    <li><a data-toggle="tab" href="#product_size_weight"><i class="fa fa-arrows-alt margin"></i>{{ trans('admin.product_size_weight') }}</a></li>
                    <li><a data-toggle="tab" href="#other_data"><i class="fa fa-database margin"></i>{{ trans('admin.other_data') }}</a></li>
                </ul>

                <div class="tab-content">
                    @include('admin.products.tabs.product_info')
                    @include('admin.products.tabs.category')
                    @include('admin.products.tabs.product_setting')
                    @include('admin.products.tabs.product_media')
                    @include('admin.products.tabs.product_size_weight')
                    @include('admin.products.tabs.other_data')
                </div>

                <hr>

                {!! Form::button(trans('admin.save'), ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                <a href="{{ aurl('products') }}" class="btn btn-info">{{ trans('admin.save_continue') }}</a>
                <a href="{{ aurl('products') }}" class="btn btn-default">{{ trans('admin.clone_product') }}</a>
                <a href="{{ aurl('products') }}" class="btn btn-danger">{{ trans('admin.delete') }}</a>
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endpush

@push('jscript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;
    $(function () {
        $('#jstree_categories').jstree({
            "core": {
                "themes": {
                    "variant": "large"
                },
                'data' : {!! load_category( $product->category_id ) !!}
            },
            "checkbox": {
                "keep_selected_style": false
            },
            "plugins": ["wholerow"]
        });

        $('#jstree_categories').on('changed.jstree', function (e,data) {
            $('.category_id').val(data.selected[0]);
        });

        $('.date_offer').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            minDate: new Date(),
            showClose: true,
            showClear: true
        });

        /* $('#product_photo').dropzone({
            url: "{{ aurl('storage/products/'.$product->id) }}",
            params : {
                _token: '{{csrf_token()}}'
            },
            paramName: "photo",
            maxFilesize: "1", //Mb
            maxFiles: "1",
            acceptedFiles: "image/*",
        }); */
        $('#product_photos').dropzone({
            url: "{{ aurl('upload/image/'.$product->id) }}",
            paramName: "file",
            uploadMultiple: false,
            maxFilesize: 0.5, //Mb
            maxFiles: 5,
            acceptedFiles: "image/*",
            params : {
                _token: '{{csrf_token()}}'
            },init: function(){
                @foreach($product->files()->get() as $file)
                    var pict = {name:'{{ $file->name }}', size:'{{ $file->size }}', type:'{{ $file->mime_type }}'};
                    this.addFile.call(this, pict);
                    this.options.thumbnail.call(this, pict, '{{ url('storage/'.$file->full_file) }}');
                @endforeach
            }
        });
    });
</script>
@endpush

@endsection
