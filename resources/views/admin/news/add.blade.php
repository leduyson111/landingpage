@extends('admin.layouts.admin')

@section('title', 'Thêm news')

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

            // Define function to open filemanager window
            var lfm = function(options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager',
                    'width=900,height=600');
                window.SetUrl = cb;
            };

            // Define LFM summernote button
            var LFMButton = function(context) {
                var ui = $.summernote.ui;
                var button = ui.button({
                    contents: '<i class="note-icon-picture"></i> ',
                    tooltip: 'Insert image with filemanager',
                    click: function() {

                        lfm({
                            type: 'image',
                            prefix: '/laravel-filemanager'
                        }, function(lfmItems, path) {
                            lfmItems.forEach(function(lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        });

                    }
                });
                return button.render();
            };

            // Initialize summernote with LFM button in the popover button group
            // Please note that you can add this button to any other button group you'd like
            $('#description, #our_clients').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['popovers', ['lfm']],
                ],
                buttons: {
                    lfm: LFMButton
                }
            })
        });
    </script>

@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
        @include('admin.partials.title-content', ['name'=>'Thêm news'])

        <form action="{{ route('news.store') }}" class="add-new-post" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="iputName" class="text-muted d-block mb-2">Tên thành viên</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" required name="title" class="form-control" >
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="iputName" class="text-muted d-block mb-2">Ngày đăng bài</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="date" required name="date_update" class="form-control">
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
                        <input required id="image" class="form-control" type="text" name="image">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div id="holder">
                        <img src='' style="width: 200px;">
                    </div>
                </div>
            </div>

          
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputState" class="text-muted d-block mb-2">Mô tả bài viết</label>
                    <textarea required style="height: 500px;" class="form-control tinymce_editor_init" id="description"
                        name="desc" cols="50" rows="30"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputState" class="text-muted d-block mb-2">Mô tả bài viết</label>
                    <textarea required style="height: 500px;" class="form-control tinymce_editor_init" id="our_clients"
                        name="our_clients" cols="50" rows="30"></textarea>
                </div>
            </div>

           
            <button type="submit" class="mb-2 btn btn-success mr-2">Thêm</button>
            <a href="{{ route('news') }}" class="mb-2 btn btn-danger mr-2">Hủy</a>
        </form>
    </div>

@endsection
