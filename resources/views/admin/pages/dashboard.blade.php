@extends('admin.layout')
@section('meta-tag')
    dashboard
@endsection
@section('content2')
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $Service }}</h3>

                <p>Total Service</p>
              </div>
              <div class="icon">
                <i class="fas fa-cogs"></i>
              </div>
              <a href="{{ route("service_list") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $PopulerService }}</h3>

                <p>Populer Service</p>
              </div>
              <div class="icon">
                <i class="fas fa-star"></i>
              </div>
              <a href="{{ route("populer_service_list") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $Message }}</h3>

                <p>Message</p>
              </div>
              <div class="icon">
                <i class="fas fa-comment"></i>
              </div>
              <a href="{{ route("message_list") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $Feedback }}</h3>
                <p>Feedback</p>
              </div>
              <div class="icon">
                <i class="far fa-comment-dots"></i>
              </div>
              <a href="{{ route("feedback_list") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="card card-primary">
            <div class="card-header ">
                <h3 class="card-title">{{ $UnReadMessageCount }} unread Message Table</h3>
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
        </div>
  </div>
@endsection
