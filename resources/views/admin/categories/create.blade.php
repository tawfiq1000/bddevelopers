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
                <h3 class="box-title">Add a Category</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="get">
                <div class="box-body">
                  <div class="col-lg-offset-3 col-md-6"><!--col-md-6-->
                  <div class="form-group">
                    <label for="category">Category name</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter name of the category" name="category">
                  </div>
                  <div class="form-group">
                    <label for="category_slug">Category slug</label>
                    <input type="text" class="form-control" id="category_slug" placeholder="Enter slug of the category" name="category_slug">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                  </div><!--end of col-md-6-->
                  
                </div>

                <!-- /.box-body -->
                  
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