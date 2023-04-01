@extends('task.master')

@section('content')

<div class="content">
            <div class="animated fadeIn">


                <div class="row">


                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Tasks</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <form action="{{ route("store") }}" method="post">
                                    @csrf
                                <div class="form-group"><label for="title" class=" form-control-label">Title</label>
                                    <input type="text" id="company" value="{{ old("title") }}"  name="title" placeholder="Enter task title" class="form-control">

                                     @error("title")
                                     <div class="alert alert-danger mt-2" role="alert">
                                         {{ $message }}
                                      </div

                                     @enderror

                                </div>
                                <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                    <input type="text" id="vat" name="description" value="{{ old("description") }}"
                                     placeholder="Enter description for task" class="form-control">
                                     @error("description")
                                     <div class="alert alert-danger mt-2" role="alert">
                                         {{ $message }}
                                      </div

                                     @enderror
                                    </div>

                                  <div class="form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">


                                            <select  id="select" class="form-control" name="status">
                                                <option value="In Progress">In progress</option>
                                                <option value="Completed">Completed</option>
                                            </select>

                                            @error("status")
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                             </div

                                            @enderror

                                        </div>
                                    </div>



                                <div class="form-group"><label for="progress"  class=" form-control-label">Progress</label>
                                    <input type="number" id="progress" name="progress"  value="{{ old("progress") }}"
                                    placeholder="Progress %" class="form-control">
                                    @error("progress")
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                     </div

                                    @enderror
                                </div>

                                  <div class="form-group">
                                      <button class="btn btn-primary" type="submit" value="submit">submit</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>




        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>



@endsection
