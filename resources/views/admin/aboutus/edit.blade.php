@extends('admin.layouts.admin')

@section('title', 'Sửa aboutus')

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
        @include('admin.partials.title-content', ['name'=>'Sửa aboutus'])

        <form action="{{ route('aboutus.update', ['id' => $aboutus]) }}" class="add-new-post" enctype="multipart/form-data"
            method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState" class="text-muted d-block mb-2">Bài viết abouts</label>
                    <textarea required class="form-control tinymce_editor_init" id="description" name="description"
                        cols="10" rows="5">{{ $aboutus->description }}</textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="qualified" class="text-muted d-block mb-2">Điều kiện nhân viện</label>
                    <textarea required class="form-control tinymce_editor_init" id="qualified" name="qualified" cols="10"
                        rows="5">{{ $aboutus->qualified }}</textarea>
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
                        <input value="{{ $aboutus->image }}" required id="image" class="form-control" type="text"
                            name="image">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div id="holder">
                        <img src='{{ $aboutus->image }}' style="width: 200px;">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="happy_clients" class="text-muted d-block mb-2">Đánh giá khách hàng</label>
                    <textarea required class="form-control tinymce_editor_init" id="happy_clients" name="happy_clients"
                        cols="10" rows="5">{{ $aboutus->happy_clients }}</textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="iputName" class="text-muted d-block mb-2">Phần trăm đảm bảo rủi ro</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input value="{{ $aboutus->percent_risk }}" type="number" min="1" max="100" required
                            name="percent_risk" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="iputName" class="text-muted d-block mb-2">Phần trăm kiểm soát</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input value="{{ $aboutus->audit_percentage }}" type="number" min="1" max="100" required
                            name="audit_percentage" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="iputName" class="text-muted d-block mb-2">Phần trăm mô hình tài chính</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input value="{{ $aboutus->financial_percent }}" type="number" min="1" max="100" required
                            name="financial_percent" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="mb-2 btn btn-success mr-2">Thêm</button>
            <a href="{{ route('aboutus') }}" class="mb-2 btn btn-danger mr-2">Hủy</a>
        </form>
    </div>

@endsection
