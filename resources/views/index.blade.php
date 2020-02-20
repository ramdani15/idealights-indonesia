<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Idealights Indonesia</title>
    <link rel="icon" href="https://www.idealightsindonesia.com/assets/front/img/core-img/logo.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <link href="{{ url ('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url ('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />
    
    <link href="{{ url ('assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ url('assets/img/sidebar-5.jpg') }}">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Idealights Indonesia
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}"> Home </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Profile</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Account -->
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" id="username">
                                            </div>
                                        </div>
                                        <div class="col-md-8 pr-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" id="email">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="First Name" id="title">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" id="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" id="lastName">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" id="address">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" id="country">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Postcode</label>
                                                <input type="text" class="form-control" placeholder="Postcode" id="postcode">
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-info btn-fill pull-right" onclick="get_random()">Get Random</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" id="picture" alt="...">
                                            <h5 class="title" id="fullName"></h5>
                                        </a>
                                        <p class="description">Gender : <span id="gender"></span></p>
                                        <p class="description">Phone : <span id="phone"></span></p>
                                        <p class="description">Cell : <span id="cell"></span></p>
                                    </div>
                                    <p class="description text-center">
                                        
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <hr>
                                    <p class="text-center">Registered</p>
                                    <p class="description">Date : <span id="registeredDate"></span></p>
                                    <p class="description">Age : <span id="registeredAge"></span> years old</p>
                                </div>
                                <div class="card-footer">
                                    <hr>
                                    <p class="text-center">DOB</p>
                                    <p class="description">Date : <span id="dobDate"></span></p>
                                    <p class="description">Age : <span id="dobAge"></span> years old</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Idealights Indonesia</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ url('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ url('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ url('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ url('assets/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets/js/demo.js') }}"></script>

<script>
    const url_api = "https://randomuser.me/api/";

    $(document).ready(function () {
        $.ajax({
            url:url_api,
            success: function(json) {
                let data = json.results[0]
                console.log(data);
                update_profile(data);
            },
            error: function(e) {
               console.log(e);
            }
        });
    });

    // get random user data
    const get_random = async () => {
        const promise = await fetch(url_api);
        const json = await promise.json();
        const res = json.results[0];
        console.log(res);
        update_profile(res);
    };

    function generate_date(date){
        date = new Date(date);
        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        return days[date.getDay()] + ", " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    }

    function update_profile(res){
        // Account
        document.getElementById('username').value = res.login.username;
        document.getElementById('email').value = res.email;

        // Name
        document.getElementById('title').value = res.name.title;
        document.getElementById('firstName').value = res.name.first;
        document.getElementById('lastName').value = res.name.last;
        document.getElementById('fullName').innerHTML = res.name.first + " " + res.name.last;

        // Address
        let address = "Street " + res.location.street.name + " No." + res.location.street.number + " City " + res.location.city + ", " + res.location.state;
        document.getElementById('address').value = address;
        document.getElementById('country').value = res.location.country;
        document.getElementById('postcode').value = res.location.postcode;

        // picture
        document.getElementById('picture').src = res.picture.large;

        // Gender
        document.getElementById('gender').innerHTML = res.gender;

        // registered
        document.getElementById('registeredDate').innerHTML = generate_date(res.registered.date);
        document.getElementById('registeredAge').innerHTML = res.registered.age;

        // dob
        document.getElementById('dobDate').innerHTML = generate_date(res.dob.date);
        document.getElementById('dobAge').innerHTML = res.dob.age;

        // phone and cell
        document.getElementById('phone').innerHTML = res.phone;
        document.getElementById('cell').innerHTML = res.cell;
    }
    

</script>

</html>
