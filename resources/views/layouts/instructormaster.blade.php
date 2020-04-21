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
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Instructors</h2>
                </div>
                <div class="col-sm-6">
                    <a href="schedule/create" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add A New Course</span></a>
                </div>
           </div>
        </div>
    </div>
  </div>
<div class="container">
  @yield('content')
</div>
</body>
</html>
