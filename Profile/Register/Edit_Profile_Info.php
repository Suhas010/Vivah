<!--User Registration Page
Author: Suhas More
-->
<!--
--------------
| version 0.2|
----------------
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Profile Info</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="text/css" href="http://192.168.43.169/Vivah_MDB/img/images/Logo_Tab.png">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://192.168.43.169/Vivah_MDB/css/bootstrap.font.css">
        <!-- Bootstrap core CSS -->
        <link href="http://192.168.43.169/Vivah_MDB/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="http://192.168.43.169/Vivah_MDB/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="http://192.168.43.169/Vivah_MDB/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://192.168.43.169/Vivah_MDB/css/Style1.css">
        <link rel="stylesheet" type="text/css" href="http://192.168.43.169/Vivah_MDB/css/Common.css">
        <style type="text/css" media="screen">
        .file-field .btn {
        float: left;
        line-height: 1rem;
        }
        .btn.btn-sm {
        font-size: 0.9rem;
        padding: 0.5rem 0.6rem;
        }
        </style>
    </head>
    <body>
        
        <!--Header -->
        <header>
            <!--Navbar-->
            <nav class="navbar animated fadeIn navbar-fixed-top">
                <!-- Collapse button-->
                
                <a class="navbar-brand " href="http://192.168.43.169/Vivah_MDB/index.php"><img src="http://192.168.43.169/Vivah_MDB/img/images/Logo.png" alt="Vivah Brand Name"></a>
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#MobileView_Bar">
                <i class="fa fa-bars"></i>
                </button>
                <div class="container">
                    <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="MobileView_Bar">
                        <!--Navbar Brand-->
                        <!--Links-->
                        <ul class="nav navbar-nav pull-right">
                            <li class="Ho nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                                
                            </li>
                            <?php 
                            if($_SESSION['user']==NULL){
                                    echo "
                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-login'>
                            Login
                            </button>
                            
                            <form action='http://192.168.43.169/Vivah_MDB/User/'>
                                <button type='submit' class='btn btn-warning'>
                                Register
                            </button></form>
                            ";}
                            
                            else
                            {
                                    
                                echo "
<div class='btn-group'>
    <button type='button' class='btn btn-default'>".$_SESSION['user']."</button>
    <button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        <span class='sr-only'>Toggle Dropdown</span>
    </button>
    <div class='dropdown-menu'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='http://localhost/Vivah_MDB/User/Edit_Profile_Info.html'>Edit Profile</a>
        <a class='dropdown-item' href='#'>Settings</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='http://192.168.43.169/Vivah_MDB/Logout/'>Logout</a>
    </div>
</div>
                            
                            "
                            ;   
                            }

                            ?>
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </header>
        <!--./Header -->
        <!--Main Content -->

<div class="container-fluid">
  <div class="row">
        


    <div class="coll">
    
        <!--Collapse Contents-->
        <!--Accordion wrapper-->
        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <!--First panel-->
            <div class="panel panel-default">
                <!--Panel heading-->
                <div class="panel-heading" role="tab" id="headingOne">
                    <h5 class="panel-title">
                    <a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Edit Personal Info<i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    </h5>
                </div>
                <!--Panel body-->
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="container">
    <h1 style="align-content: center;" >Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Jane">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Bishop">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="janesemail@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="janeuser">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    <hr>
                </div>
            </div>
            <!--/.First panel-->
            <!--Second panel-->
            <div class="panel panel-default">
                <!--Panel heading-->
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h5 class="panel-title">
                    <a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                        Vivah Success Stoiresssss#2<i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    </h5>
                </div>
                <!--Panel body-->
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            <!--/.Second panel-->
            <!--Third panel-->
            <div class="panel panel-default">
                <!--Panel heading-->
                <div class="panel-heading" role="tab" id="headingThree">
                    <h5 class="panel-title">
                    <a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #3<i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    </h5>
                </div>
                <!--Panel body-->
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            <!--/.Third panel-->
            <!--Collapse Content -->

     </div>
  </div>  
</div>        <!--./MainContent -->
        <!--Footer-->
        <footer class="page-footer center-on-small-only">
            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">
                    <!--First column-->
                    <div class="col-md-3 offset-md-1">
                        <h5 class="title">Footer Content</h5>
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                    </div>
                    <!--/.First column-->
                    <hr class="hidden-md-up">
                    <!--Second column-->
                    <div class="col-md-2 offset-md-1">
                        <h5 class="title">Links</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class="hidden-md-up">
                    <!--Third column-->
                    <div class="col-md-2">
                        <h5 class="title">Links</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class="hidden-md-up">
                    <!--Fourth column-->
                    <div class="col-md-2">
                        <h5 class="title">Links</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
            </div>
            <!--/.Footer Links-->
            <hr>
            <!--Social buttons-->
            <div class="social-section">
                <ul>
                    <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
                </ul>
            </div>
            <!--/.Social buttons-->
            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © Developed With Pride at: <a href="https://www.gravitycomputings.com"> Gravity Computings Pvt Ltd</a>
                </div>
            </div>
            <!--/.Copyright-->
        </footer>
        <!--/.Footer-->
        <!-- JQuery -->
        <script type="text/javascript" src="http://192.168.43.169/Vivah_MDB/js/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="http://192.168.43.169/Vivah_MDB/js/tether.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="http://192.168.43.169/Vivah_MDB/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="http://192.168.43.169/Vivah_MDB/js/mdb.min.js"></script>
        <script>
        // Material Select Initialization
        $(document).ready(function() {
        $('.mdb-select').material_select();
        });
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");
        function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
        confirm_password.setCustomValidity('');
        }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        function init() {
        // Clear forms here
        document.getElementById("user").value = "";
        }
        window.onload = init;
        </script>
    </body>
</html>