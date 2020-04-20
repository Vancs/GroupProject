@extends('layouts.MasterLayout.NavLayout')
<!-- sharemarket.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Column Sorting With Pagination Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    </head>
  <body>
    <div class="container">
      <h2>Laravel Column Sorting With Pagination Tutorial With Example</h2><br/>
      <form method="post" action="{{url('/schedule/store')}}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Course ID:</label>
            <div class="col-md-2">
                <input id="CRSRID" type="text" class="form-control" name="CRSRID">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Year:</label>
            <div class="col-md-2">
                <input id="semester_and_year" type="text" class="form-control" name="semester_and_year">
            </div>
        </div>
      <div class=" form-group row">
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>