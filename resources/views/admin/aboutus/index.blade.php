@extends('admin.layouts.admin')

@section('title', 'Danh sách abouts')

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
        @include('admin.partials.title-content', ['name'=>'Danh sách abouts '])
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Danh sách abouts </h6>
                        <a class="nav-link " href="{{ route('aboutus.add') }}">
                            <i class="material-icons">note_add</i>
                            <span>Add New abouts</span>
                        </a>

                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Bài viết</th>
                                    <th scope="col" class="border-0">Ảnh</th>
                                    <th scope="col" class="border-0">Đánh giá khách hàng</th>
                                    <th scope="col" class="border-0">Điều kiện nhân viên</th>
                                    <th scope="col" class="border-0">% Rủi do</th>
                                    <th scope="col" class="border-0">% Kiểm soát</th>
                                    <th scope="col" class="border-0">% Mô hình</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($aboutus as $about)
                                    <tr>
                                        <td>{{ $about->id }}</td>
                                        <td>{{ $about->description }}</td>
                                        <td><img src="{{ $about->image }}" width="200" height="200" alt=""></td>
                                        <td>{{ $about->happy_clients }}</td>
                                        <td>{{ $about->qualified }}</td>
                                        
                                        <td>{{ $about->percent_risk }}</td>
                                        <td>{{ $about->audit_percentage }}</td>
                                        <td>{{ $about->financial_percent }}</td>
                                        <td>
                                            <a href="{{ route('aboutus.edit', ['id' => $about->id]) }}"
                                                class="mb-2 btn btn-info mr-2 ">Sửa</a>
                                            <a href="" data-url="{{ route('aboutus.delete', ['id' => $about->id]) }}"
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

