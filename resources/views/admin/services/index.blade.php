@extends('admin.layouts.admin')

@section('title', 'Danh sách Services')


@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
 
    <script>
        $(function(){
          $(document).on('click', '.status_update' ,  function(){
            let urlRequest = $(this).data('url');
              $.ajax({
                type : 'GET',
                url: urlRequest,
               
                success: function(data){
                  alert("Cập nhật trạng thái thành công")
                },
                error: function(){
                  alert("Thất bại trạng thái thành công")
                }
              });
          })
        })
    </script>
    

@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
    <div style="margin-right:620px">
        @include('admin.partials.title-content', ['name'=>'Danh sách Services '])
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
                        <h6 class="m-0">Danh sách Services </h6>
                        <a class="nav-link " href="{{ route('services.add') }}">
                            <i class="material-icons">note_add</i>
                            <span>Add New Services</span>
                        </a>

                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Tiêu đề</th>
                                    <th scope="col" class="border-0">Ảnh</th>
                                    <th scope="col" class="border-0">Trạng thái</th>
                                    <th scope="col" class="border-0">Mô tả</th>
                                    <th scope="col" class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($services as $s)   
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->title }}</td>
                                    <td><img width="250" height="250px" src="{{ $s->image }}" alt=""></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input data-url="{{ route('services.update_status', ['id' =>$s->id]) }}" value="{{ $s->status }}" class="form-check-input status_update" {{ $s->status == 0 ? 'checked' : '' }}
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td>{{ $s->desc }}</td>
                                 
                                    <td>
                                        <a href="{{ route('services.edit', ['id' => $s->id]) }}"
                                            class="mb-2 btn btn-info mr-2 ">Sửa</a>
                                        <a href="" data-url="{{ route('services.delete', ['id' => $s->id]) }}"
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
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

