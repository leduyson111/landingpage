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
                        <a class="nav-link " href="{{ route('contacts.view') }}">
                            <i class="material-icons">note_add</i>
                            <span>Send Mail</span>
                        </a>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Tên người gửi</th>
                                    <th scope="col" class="border-0">Eamil</th>
                                    <th scope="col" class="border-0">Nội dung</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->contact }}</td>

                                            <a href="" data-url="{{ route('contacts.delete', ['id' => $contact->id]) }}"
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

