<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  @yield('content')
</div>
<div class="col-sm-6">
    <a href="../instructors/" class="btn btn-success" data-toggle="modal" style="margin-right: 30px"> <span>Go to the Instructors Screen</span></a>
    <a href="../locations/" class="btn btn-success" data-toggle="modal" style="margin-right: 30px"> <span>Go to the Locations Screen</span></a>
    <a href="../home/" class="btn btn-success" data-toggle="modal" style="margin-right: 30px"> <span>Go to the Home Screen</span></a>  
</div>
</body>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; AU-Schedule Tracker 2020</p>
    </div>
    <!-- /.container -->
  </footer>



</html>
