@extends('admin.layout')
@section('meta-tag')
    Feed back list
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
            <h3 class="card-title">Feedback Table</h3>
            <a class="btn btn-success float-right" href="{{ route('feedback_add') }}" >
                + Add
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Feedback</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td class="truncate">{{ $data->feedback}}</td>
                            <td>
                                <a class="btn btn-success mt-1" href="{{ route('feedback_view', ['id' => $data->id]) }}">
                                    View
                                </a>
                                <a class="btn btn-primary mt-1" href="{{ route('feedback_edit', ['id' => $data->id]) }}">
                                    View
                                </a>
                                <a class="btn btn-danger mt-1" href="{{ route('feedback_delete', ['id' => $data->id]) }}">
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
