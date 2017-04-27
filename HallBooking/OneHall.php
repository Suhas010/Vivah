<!--Home Page
Author: Suhas More
-->
<?php
session_start();
require_once(join("//", array(dirname(dirname(__FILE__)), 'common', 'const.php')));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vivah</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel='icon' type='text/css' href='<?php echo"$local_host_name"?>/img/images/Logo_Tab.png'>
		<!-- Font Awesome -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
		<link rel='stylesheet' href='<?php echo"$local_host_name"?>/css/bootstrap.font.css'>
		<!-- Bootstrap core CSS -->
		<link href='<?php echo"$local_host_name"?>/css/bootstrap.min.css' rel='stylesheet'>
		<!-- Material Design Bootstrap -->
		<link href='<?php echo"$local_host_name"?>/css/mdb.min.css' rel='stylesheet'>
		<!-- Your custom styles (optional) -->
		<link href='<?php echo"$local_host_name"?>/css/style.css' rel='stylesheet'>
		<link rel='stylesheet' type='text/css' href='<?php echo"$local_host_name"?>/css/Style1.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo"$local_host_name"?>/css/Common.css'>
		
		<style>
		.input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
		.a{
		color: red;
		}
		.row{
			margin:0px;
		}

	.space{
		margin-top: 10%;
	}
	@main-bg:rgb(40,40,59);
@calendar-border:rgb(220,220,255);
@calendar-bg:#fff;
@calendar-standout:rgb(40,40,59);
@calendar-color:#444;
@calendar-fade-color:#c0c0c0;
@body-color:#444;

html, body {
  height:100%;
}
body {
  font-size:100%;
  line-height:1.5;
  font-family: "Roboto Condensed", sans-serif;
  background:@main-bg;
  background-image:linear-gradient(@main-bg 0%, darken(@main-bg,12%) 100%);
  color:@body-color;
}

*, *:before, *:after {
  box-sizing:border-box;
}

.group {
  &:after {
    content: "";
    display: table;
    clear: both;
  }
}

img {
  max-width:100%;
  height:auto;
  vertical-align:baseline;
}

a {
  text-decoration:none;
}

.max(@maxWidth;
  @rules) {
    @media only screen and (max-width: @maxWidth) {
      @rules();
    }
  }

.min(@minWidth;
  @rules) {
    @media only screen and (min-width: @minWidth) {
      @rules();
    }
  }


.calendar-wrapper {
  width:360px;
  margin:3em auto;
  padding:2em;
  border:1px solid @calendar-border;
  border-radius:5px;
  background:@calendar-bg;
  
}
table {
  clear:both;
  width:100%;
  border:1px solid @calendar-border;
  border-radius:3px;
  border-collapse:collapse;
  color:@calendar-color;
}
td {
  height:48px;
  text-align:center;
  vertical-align:middle;
  border-right:1px solid @calendar-border;
  border-top:1px solid @calendar-border;
  width:100% / 7;
}
td.not-current {
  color:@calendar-fade-color;;
}
td.normal {}
td.today {
  font-weight:700;
  color:@calendar-standout;
  font-size:1.5em;
}
thead td {
  border:none;
  color:@calendar-standout;
  text-transform:uppercase;
  font-size:1.5em;
}
#btnPrev {
  float:left;
  margin-bottom:20px;
  &:before {
    content:'\f104';
    font-family:FontAwesome;
    padding-right:4px;
  }
}
#btnNext {
  float:right;
  margin-bottom:20px;
  &:after {
    content:'\f105';
    font-family:FontAwesome;
    padding-left:4px;
  }
}
#btnPrev, #btnNext {
  background:transparent;
  border:none;
  outline:none;
  font-size:1em;
  color:@calendar-fade-color;
  cursor:pointer;
  font-family:"Roboto Condensed", sans-serif;
  text-transform:uppercase;
  transition:all 0.3s ease;
  &:hover {
    color:@calendar-standout;
    font-weight:bold;
  }
}
	.space{
		margin-top: 10%;
	}
		
		</style>
		<script src="" type="text/javascript" charset="utf-8" async defer>
			colnsole.log("test");
		</script>
	</head>
	
	<body>
	<div class="space sp">


<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="Halls/Hall15.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="Halls/Hall16.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="Halls/Hall17.jpg" alt="Third slide">
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img src="Halls/Hall15.jpg" class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img src="Halls/Hall16.jpg" class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img src="Halls/Hall17.jpg" class="img-fluid"></li>
    </ol>
</div>
<!--/.Carousel Wrapper-->
	
		<div class="space sp">
			<!-- <h1>Specific Hall</h1> -->
			<center><H3>Select A Date You Want:</H3></center>
			<div class="calendar-wrapper">
  <button id="btnPrev" type="button">Prev</button>
	  <button id="btnNext" type="button">Next</button>
  <div id="divCal"></div>
</div>

<center><a href="#" class="btn btn-primary">Book Now</a></center>

			
		</div>


		<!--Header Contents-->
		<!--*********************      Menu Header   ***********************-->
		<?php
		include($header_file_path);
		?>
		<!--********************       /Menu Header   ************************-->
		<!--Header Contents-->
		
		<!--Main Contents-->
		<br>
		<?php
			if(array_key_exists('error', $_GET)){
				echo $_GET['error'];
			}
		?>
		
		<?php include($footer_file_path);
		?>			<!--*********************        Script       ***********************-->
		<!-- JQuery -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/tether.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/mdb.min.js"></script>
		<script>
		var Cal = function(divId) {

  //Store div id
  this.divId = divId;

  // Days of week, starting on Sunday
  this.DaysOfWeek = [
    'Sun',
    'Mon',
    'Tue',
    'Wed',
    'Thu',
    'Fri',
    'Sat'
  ];

  // Months, stating on January
  this.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

  // Set the current month, year
  var d = new Date();

  this.currMonth = d.getMonth();
  this.currYear = d.getFullYear();
  this.currDay = d.getDate();

};

// Goes to next month
Cal.prototype.nextMonth = function() {
  if ( this.currMonth == 11 ) {
    this.currMonth = 0;
    this.currYear = this.currYear + 1;
  }
  else {
    this.currMonth = this.currMonth + 1;
  }
  this.showcurr();
};

// Goes to previous month
Cal.prototype.previousMonth = function() {
  if ( this.currMonth == 0 ) {
    this.currMonth = 11;
    this.currYear = this.currYear - 1;
  }
  else {
    this.currMonth = this.currMonth - 1;
  }
  this.showcurr();
};

// Show current month
Cal.prototype.showcurr = function() {
  this.showMonth(this.currYear, this.currMonth);
};

// Show month (year, month)
Cal.prototype.showMonth = function(y, m) {

  var d = new Date()
  // First day of the week in the selected month
  , firstDayOfMonth = new Date(y, m, 1).getDay()
  // Last day of the selected month
  , lastDateOfMonth =  new Date(y, m+1, 0).getDate()
  // Last day of the previous month
  , lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


  var html = '<table>';

  // Write selected month and year
  html += '<thead><tr>';
  html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
  html += '</tr></thead>';


  // Write the header of the days of the week
  html += '<tr class="days">';
  for(var i=0; i < this.DaysOfWeek.length;i++) {
    html += '<td>' + this.DaysOfWeek[i] + '</td>';
  }
  html += '</tr>';

  // Write the days
  var i=1;
  do {

    var dow = new Date(y, m, i).getDay();

    // If Sunday, start new row
    if ( dow == 0 ) {
      html += '<tr>';
    }
    // If not Sunday but first day of the month
    // it will write the last days from the previous month
    else if ( i == 1 ) {
      html += '<tr>';
      var k = lastDayOfLastMonth - firstDayOfMonth+1;
      for(var j=0; j < firstDayOfMonth; j++) {
        html += '<td class="not-current">' + k + '</td>';
        k++;
      }
    }

    // Write the current day in the loop
    var chk = new Date();
    var chkY = chk.getFullYear();
    var chkM = chk.getMonth();
    if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
      html += '<td class="today">' + i + '</td>';
    } else {
      html += '<td class="normal">' + i + '</td>';
    }
    // If Saturday, closes the row
    if ( dow == 6 ) {
      html += '</tr>';
    }
    // If not Saturday, but last day of the selected month
    // it will write the next few days from the next month
    else if ( i == lastDateOfMonth ) {
      var k=1;
      for(dow; dow < 6; dow++) {
        html += '<td class="not-current">' + k + '</td>';
        k++;
      }
    }

    i++;
  }while(i <= lastDateOfMonth);

  // Closes table
  html += '</table>';

  // Write HTML to the div
  document.getElementById(this.divId).innerHTML = html;
};

// On Load of the window
window.onload = function() {

  // Start calendar
  var c = new Cal("divCal");			
  c.showcurr();

  // Bind next and previous button clicks
  getId('btnNext').onclick = function() {
    c.nextMonth();
  };
  getId('btnPrev').onclick = function() {
    c.previousMonth();
  };
}

// Get element by id
function getId(id) {
  return document.getElementById(id);
}
		</script>
		<!--**********************        /Script      **********************-->
	</body>
</html>