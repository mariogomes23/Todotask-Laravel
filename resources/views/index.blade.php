@extends('task.master')

@section('content')



 <!-- Content -->
 <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-network"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ $tasks->count() }}</span></div>
                                            <div class="stat-heading">Total</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-like2"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ $tasks->where("status","complete")->count() }}</span></div>
                                            <div class="stat-heading">Completed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ $tasks->where("status","In Progress")->count() }}</span></div>
                                            <div class="stat-heading">In progress</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->

                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-lg-12">
                            @if (Session::has("message"))

                            <div class="alert alert-success" role="alert">
                                {{ Session::get("message") }}
                              </div

                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Tasks </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>

                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Progress</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($tasks as $task )




                                                <tr>
                                                    <td class="serial">{{ $task->id }}</td>

                                                    <td>  <span class="name">{{ $task->title }}</span> </td>
                                                    <td> <span class="product">{{ $task->description }}</span> </td>
                                                    <td><span class="count">{{ $task->progress }} % </span></td>
                                                    <td>
                                                        @if ($task->status == 'complete')


                                                        <span class="badge badge-pending" style="background:blue">Complete</span>

                                                        @else

                                                        <span class="badge badge-pending" style="background:brown">In Progress</span>



                                                        @endif



                                                    </td>
                                                    <td style="display:inline;">
                                                        <span >
                                                            <a class="btn btn-info btn-sm" href="{{ route("show",$task->id) }}">
                                                                Show </a>

                                                        </span>
                                                                   <span >
                                                            <a class="btn btn-warning btn-sm" href="{{ route("edit",$task->id) }}"> Edit </a>

                                                        </span>

                                                        <span >

                                                            <a class="btn btn-danger btn-sm" href="{{ route("destroy",$task->id) }}">Delete </a>




                                                        </span>
                                                    </td>

                                                </tr>
                                                @empty
                                                <p class="text-center "> Not  Task</p>

                                                @endforelse



                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                </div>
                <!-- /.orders -->




            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>





@endsection
