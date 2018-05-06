<!DOCTYPE html>
<html>
<head>
  @include('admin.adminPartial.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.adminPartial.header')
  
@include('admin.adminPartial.sidebar') 
  
  @section('main-content')
    @show
  <!-- /.content-wrapper -->
  @include('admin.adminPartial.footer')
</div>
</body>
</html>
