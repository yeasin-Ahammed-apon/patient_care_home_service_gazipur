@extends('admin.layout')
@section('meta-tag')
    User Message List
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->subject }}</td>
                                <td class="truncate">{{ $data->message }}</td>
                                <td>
                                    <a class="btn btn-success mt-1" href="{{ route('message_view', ['id' => $data->id]) }}">
                                        View
                                    </a>
                                    @if ($data->seen === 0)
                                        <a class="btn btn-warning mt-1" href="{{ route('message_mark_as_read', ['id' => $data->id]) }}">
                                            unread
                                        </a>
                                    @else
                                        <a class="btn btn-secondary mt-1"
                                            href="{{ route('message_mark_as_read', ['id' => $data->id]) }}">
                                            read
                                        </a>
                                    @endif
                                    <a class="btn btn-danger mt-1" href="{{ route('message_delete', ['id' => $data->id]) }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
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

