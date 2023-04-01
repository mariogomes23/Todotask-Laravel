@extends('task.master')

@section('content')

<div class="content">
            <div class="animated fadeIn">


                <div class="row">



                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Tasks</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <form action="#" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                <div class="form-group"><label for="title" class=" form-control-label">Title</label><input type="text" id="company"  name="title" value="" placeholder="Enter task title" class="form-control"></div>
                                <div class="form-group"><label for="description" class=" form-control-label">Description</label><input type="text" id="vat" name="description" value="" placeholder="Enter description for task" class="form-control"></div>

                                  <div class="form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">
                                            <select  id="select" class="form-control" name="status">

                                                <option value="In progress" selected>In progress</option>
                                                <option value="complete">Completed</option>

                                                <option value="complete" selected>Completed</option>
                                                <option value="In progress">In progress</option>

                                            </select>
                                        </div>
                                    </div>



                                <div class="form-group"><label for="progress" class=" form-control-label">Progress</label><input type="number" id="progress" name="progress" value="" placeholder="Progress %" class="form-control"></div>

                                  <div class="form-group">
                                      <button class="btn btn-primary" type="submit" value="edit">edit</button>
                                  </div>


                                </form>
                            </div>
                        </div>
                    </div>





        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>



@endsection
