@extends('admin.layouts.admin')

@section('title', 'Danh sách clients')


@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
 
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
    <div style="margin-right:620px">
        @include('admin.partials.title-content', ['name'=>'Danh sách clients '])
    </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Danh sách clients </h6>
                        <a class="nav-link " href="{{ route('clients.add') }}">
                            <i class="material-icons">note_add</i>
                            <span>Add New clients</span>
                        </a>

                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Tiêu đề</th>
                                    <th scope="col" class="border-0">Ảnh</th>
                                     <th scope="col" class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($clients as $client)   
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td><img width="250" height="250px" src="{{ $client->image }}" alt=""></td>
                                    <td>
                                        <a href="{{ route('clients.edit', ['id' => $client->id]) }}"
                                            class="mb-2 btn btn-info mr-2 ">Sửa</a>
                                        <a href="" data-url="{{ route('clients.delete', ['id' => $client->id]) }}"
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
 

