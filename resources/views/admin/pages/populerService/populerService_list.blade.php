@extends('admin.layout')
@section('meta-tag')
    Service List
@endsection
@section('content2')
    <style>
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Message Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Url</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($datas as $data )
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td style="width: 200px ">
                                <img src="{{ asset("admin/uploads/images/".$data['service']->image) }}" class="img-fluid" alt="{{ $data['service']->title }}">
                            </td>
                            <td>{{ $data['service']->title }}</td>
                            <td class="text-truncate">{{ $data['service']->description }}</td>

                            <td>{{ $data['service']->url }}</td>
                            <td> {{ $data['service']->status }}</td>
                            <td>
                                {{-- <a class="btn btn-success" href="{{ route('populerService_view',['id'=>$data->id]) }}" >
                                    View
                                </a> --}}
                                <a class="btn btn-primary" href="{{ route('populer_service_edit',['id'=>$data->id]) }}" >
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="{{ route('populer_service_delete',['id'=>$data->id]) }}" >
                                    Delete
                                </a>
                            </td>
                          </tr>
                        @endforeach
                      </table>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">

                <nav aria-label="Page navigation example">
                    <div class="pagination">
                        {{ $datas->links('pagination::bootstrap-4') }}
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
