@extends('layouts.MasterLayout.NavLayout')
@section('title','Welcome!')
@section('content')

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to the AU Schedule Tracker!</h1>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">This website's purpose is to help instructors and education leaders at AU to track enrollment of the CSC courses. Professors and other administration staff will be able to:</p>
          <ul>
            <li>Add to the collection of courses and their respective enrollment numbers.</li>
            <li>Create, Read, Update, and Delete functionality.</li>
            <li>Track and view enrollment change between semesters for a selected course.</li>
            <li>If you would like to visit the AU web site, click <a href="https://www.aurora.edu">Here!</a> </li>
            <li>If you would like to visit the AU Web Advisor page, click <a href="">Here!</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">As of right now, the website is only catering to the CS department. However, the design of the web application is all-inclusive. Not only will it cater to the CS department, but it will also cater to other departments in AU.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">We are AU CSC Majors and to contact us, contact Professor D. Lash at dlash@aurora.edu </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; AU-Schedule Tracker 2020</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection
