@extends('admin.app')




@section('main-content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">titles</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="box-body">
                  <div class="col-md-6"><!--col-md-6-->
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title of the post" name="title">
                  </div>
                  <div class="form-group">
                    <label for="sub_title">Post Sub-Title</label>
                    <input type="text" class="form-control" id="sub_title" placeholder="Enter sub title of the post" name="sub_title">
                  </div>
                  <div class="form-group">
                    <label for="slug">Post Slug </label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter slug of the post" name="slug">
                  </div>
                  </div><!--end of col-md-6-->
                  <div class="col-md-6"><!--col-md-6-->
                  <div class="form-group">
                    <label for="image">File input</label>
                    <input type="file" id="image" name="image">

                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status"> publish
                    </label>
                  </div>
                </div><!--end of col-md-6-->
                </div>

                <!-- /.box-body -->
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Write post body here
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fa fa-minus"></i></button>
                        
                          
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      
                        <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body"></textarea>
                      
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          
          <!-- /.box -->

          
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  @endsection


