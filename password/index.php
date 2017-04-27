<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Forget Password</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- /Start your project here-->

<div class="container">
<a data-toggle="modal" data-target="#modal-forget">
Forget Password
</a>
</div>
                                
<!-- Modal Register -->
<div class="modal fade modal-ext" id="modal-forget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="padding-top:110px">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="text-xs-center">Forget Password</h3>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="md-form">
                    <!-- <i class="fa fa-envelope prefix"></i> -->
                    <input type="text" id="form2" name="email" class="form-control" required>
                    <label for="form2">Enter your Email:</label>
                </div>
                
                 <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg" id="sendmail" data-toggle="modal" data-dismiss="modal" data-target="#modal-createpass">SUBMIT</button>
        </div>
    </div>
</div>
</div>
</div>

<!-- create password -->

<div class="modal fade modal-ext" id="modal-createpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="padding-top:110px">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
            
            		<h3><center>Your password send your email...!!</center></h3>
                 <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg" id="login" data-dismiss="modal">ok</button>
        </div>
    </div>
</div>
</div>
</div>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>
</html>
