@extends('admin.layouts.admin')

@section('title', 'Danh sách testimonials')


@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
 
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
    
        @include('admin.partials.title-content', ['name'=>'Danh sách testimonials '])
  
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Danh sách testimonials </h6>
                        <a class="nav-link " href="{{ route('testimonials.add') }}">
                            <i class="material-icons">note_add</i>
                            <span>Add New testimonials</span>
                        </a>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Tên khách hàng</th>
                                    <th scope="col" class="border-0">Ảnh</th>
                                    <th scope="col" class="border-0">Đánh giá</th>
                                    <th scope="col" class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($testimonials as $test)   
                                <tr>
                                    <td>{{ $test->id }}</td>
                                    <td>{{ $test->title }}</td>
                                    <td><img width="250" height="250px" src="{{ $test->image }}" alt=""></td>
                                    <td>{!! $test->desc !!}</td>
                                    <td>
                                        <a href="{{ route('testimonials.edit', ['id' => $test->id]) }}"
                                            class="mb-2 btn btn-info mr-2 ">Sửa</a>
                                        <a href="" data-url="{{ route('testimonials.delete', ['id' => $test->id]) }}"
                                            class="mb-2 btn btn-danger mr-2 action_delete">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 

