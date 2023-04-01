@extends('task.master')

@section('content')

<div class="content">
            <div class="animated fadeIn">


                <div class="row">


                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">Task SHOW</div>
                            <div class="card-body card-block">

                                <div class="form-group"><label for="title" class=" form-control-label">Title</label>
                                    <input type="text" id="company" value="{{$tasks->title}}"  disabled class="form-control">



                                </div>
                                <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                    <input type="text" id="vat" value="{{$tasks->description}}"  disabled
                                     class="form-control">

                                    </div>

                                  <div class="form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">



                                            <select  id="select" class="form-control"   disabled >
                                                <option>{{$tasks->status}}</option>

                                            </select>
                                        </div>
                                    </div>



                                <div class="form-group"><label for="progress"  class=" form-control-label">Progress</label>
                                    <input type="number" id="progress"value="{{$tasks->progress}}"  disabled
                                    placeholder="Progress %" class="form-control">
                                                               </div>

                                  <div class="form-group">
                                      <a href="{{ route("index") }}" class="btn btn-primary">back</a>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>




        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>



@endsection
