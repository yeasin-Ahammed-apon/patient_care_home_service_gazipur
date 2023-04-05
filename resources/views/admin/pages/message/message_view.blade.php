@extends('admin.layout')
@section('meta-tag')
    User Full Message
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Read Mail</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5><b>{{ $data->subject }}</b></h5>
                    <h6>From: <b>{{ $data->email }}</b><span
                            class="mailbox-read-time float-right">{{ $data->created_at->format('M jS Y, g:i A') }}</span>
                    </h6>
                    <h6>Number: <b>{{ $data->number }}</b></h6>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                    <p><b>{{ $data->name }}</b></p>
                    <p>
                        {{ $data->message }}
                    </p>
                </div>
                <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->
            <div class="card-footer">
                <a class="btn btn-danger" href="{{ route('message_delete', ['id' => $data->id]) }}"><i class="far fa-trash-alt"></i> Delete</a>
                @if ($data->seen === 0)
                    <a class="btn btn-warning mt-1" href="{{ route('message_mark_as_read', ['id' => $data->id]) }}">
                        <i class="fas fa-edit"></i> unread
                    </a>
                @else
                    <a class="btn btn-secondary mt-1" href="{{ route('message_mark_as_read', ['id' => $data->id]) }}">
                        <i class="fas fa-edit"></i> read
                    </a>
                @endif
            </div>
            <!-- /.card-footer -->
        </div>
    </div>
@endsection
