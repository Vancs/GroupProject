@extends('layouts.MasterLayout.NavLayout')
@section('title','Welcome!')
@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" src="/img/AU1.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to AU!</h3>
                        <p>A big open campus and friendly environment! </p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item active" src="/img/AU.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Go Spartans</h3>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item active" src="/img/AU2.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Join The Computer Science Club!</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to the AU Schedule Tracker</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">About this page</h4>
                    <div class="card-body">
                        <p class="lead">This website's purpose is to help instructors and education leaders at AU to
                            track enrollment of the CSC courses. Professors and other administration staff will be able
                            to:</p>
                        <ul>
                            <li>Add to the collection of courses and their respective enrollment numbers.</li>
                            <li>Create, Read, Update, and Delete functionality.</li>
                            <li>Track and view enrollment change between semesters for a selected course.</li>
                            <li>If you would like to visit the AU web site, click <a
                                    href="https://www.aurora.edu">Here!</a></li>
                            <li>If you would like to visit the AU Web Advisor page, click <a
                                    href="https://wa3.aurora.edu/WebAdvisor/WebAdvisor?TYPE=M&PID=CORE-WBMAIN&TOKENIDX=697327226">Here!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Services We Offer</h4>
                    <div class="card-body">
                        <p class="lead">As of right now, the website is only catering to the CS department. However, the
                            design of the web application is all-inclusive. Not only will it cater to the CS department,
                            but it will also cater to other departments in AU.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Contact Us</h4>
                    <div class="card-body">
                        <p class="lead">We are AU CSC Majors and to contact us, contact Professor D. Lash at
                            dlash@aurora.edu </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection
