@extends('admin.layouts.admin')

@section('title', 'Sửa portfolio')

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endsection

@section('js')

    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>

    <script>
        $(document).ready(function() {

            $('#lfm').filemanager('image', {
                prefix: '/laravel-filemanager'
            });

        });
    </script>

@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
        @include('admin.partials.title-content', ['name'=>'Sửa portfolio'])

        <form action="{{ route('portfolio.update', ['id' =>$portfolio->id]) }}" class="add-new-post" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="iputName" class="text-muted d-block mb-2">Tên danh muc</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" value="{{ $portfolio->name }}" required name="name" class="form-control" >
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input  value="{{ $portfolio->image }}"  required id="image" class="form-control" type="text" name="image">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div id="holder">
                        <img src='{{ $portfolio->image }}' style="width: 200px;">
                    </div>
                </div>
            </div>

            <button type="submit" class="mb-2 btn btn-success mr-2">Sửa</button>
            <a href="{{ route('portfolio') }}" class="mb-2 btn btn-danger mr-2">Hủy</a>
        </form>
    </div>

@endsection
