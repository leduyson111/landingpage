@extends('admin.layouts.admin')

@section('title', 'Gửi mail')

@section('content')
    <div class="main-content-container container-fluid px-4">
        @include('admin.partials.title-content', ['name'=>'Gửi mail'])

        <form action="{{ route('contacts.sendMail') }}" class="add-new-post"  method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="iputName" class="text-muted d-block mb-2">Tên người gửi</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" required name="name" class="form-control" >
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="iputName" class="text-muted d-block mb-2">Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" required name="email" class="form-control" >
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contact" class="text-muted d-block mb-2">Nội dung: </label>
                    <textarea required class="form-control tinymce_editor_init" id="contact" name="contact"
                        cols="10" rows="5"></textarea>
                </div>

            </div>
 

            <button type="submit" class="mb-2 btn btn-success mr-2">Thêm</button>
            <a href="{{ route('aboutus') }}" class="mb-2 btn btn-danger mr-2">Hủy</a>
        </form>
    </div>

@endsection
