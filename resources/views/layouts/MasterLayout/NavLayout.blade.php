<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b190a499f.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/scrolling-nav.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body style="margin-top: 5%;">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/home">AU Schedule Tracker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="{{ Request::path() === 'locations' ? 'nav-item active' : '' }} ">
            <a class="nav-link js-scroll-trigger" href="/locations">Locations</a>
          </li>
          <li class="{{ Request::path() === 'instructors' ? 'nav-item active' : '' }} ">
            <a class="nav-link js-scroll-trigger" href="/instructors">Instructors</a>
          </li>
          <li class="{{ Request::path() === 'schedule' ? 'nav-item active' : '' }} ">
            <a class="nav-link js-scroll-trigger" href="/schedule">Schedule</a>
          </li>
          <li class="{{ Request::path() === 'reports' ? 'nav-item active' : '' }} ">
            <a class="nav-link js-scroll-trigger" href="/reports/index">Reports</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" rel="stylesheet"></script>
<!-- Custom JavaScript for this theme -->
<script src="/js/scrolling-nav.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/js/jquery.easing.min.js"></script>
</body>
@extends('layouts.footer')
</html>
