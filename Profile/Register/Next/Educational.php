<?php
session_start();
require_once(join('//', array(dirname(dirname(dirname(dirname(__FILE__)))), 'common', 'const.php')));
    if($_SESSION['counter']!=1){
        header('location:http://localhost/Vivah_MDB/?par=0');
    }
?>
<!--User Registration Page Step 2
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
        <title>  Educational Register to Vivah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="text/css" href="<?php echo"$local_host_name"?>/img/images/Logo_Tab.png">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo"$local_host_name"?>/css/bootstrap.font.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo"$local_host_name"?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo"$local_host_name"?>/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo"$local_host_name"?>/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Style1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Common.css">
        <style type="text/css" media="screen">
        .container{
        }
        @media only screen and (max-width: 500px) {
        .RForm{
        margin-top: 100px;
        margin-left: 30px;
        margin-right: 30px;
        }
        
        }@media only screen and (min-width: 1020px) {
        .RForm{
        margin-top: 100px;
        margin-left: 230px;
        margin-right: 230px;
        border:solid 1px black;
        }
        .regtitle{
        font-family: 'Droid Serif', serif;
        margin-left: 20%;
        margin-top: 5%;
        margin-bottom: 3%;
        }  .clps{

    font-family: "Open Sans","OpenSans",sans-serif;
    letter-spacing: 5px;
    margin-left: 10%;
        }
        
        .card {
        border: 0;
        margin-left: 1%;
        margin-right: 1%;
        }
        
        }
        
        .Ltr{
        letter-spacing:5px;
        }
        /*Lable*/
        .md-form label {
        color: #847F7D;
        font-family: 'Courgette', cursive
        }
        .input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
        {
        border-bottom: 2px solid #F06F10;
        box-shadow: 0 1px 0 0 #F26106;}
        .input[type="datetime-local"], input[type="email"], input[type="number"], input[type="password"],input[type="search-md"], input[type="search"], input[type="tel"], input[type="text"], textarea.md-textarea {
        background-color: #1a070700;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        outline: 0;
        height: 1.4rem;
        width: 75%;
        font-size: 1.5rem;
        }
        .input[type="number"],input[type="search-md"], input[type="search"], input[type="tel"], input[type="text"], textarea.md-textarea {
        text-transform:uppercase
        }
        .input[typee="email"], textarea.md-textarea{
        text-transform: lowercase;
        }
        /* Gender Radio Buttons*/
        
        [type="radio"]:checked + label::after{   top: -4px;
        top: -4px;
        left: -7px;
        width: 12px;
        height: 26px;
        border-top: 2px solid transparent;
        border-left: 2px solid transparent;
        border-right: 4px solid #1AB90F;
        border-bottom: 7px solid #10AD18;
        -webkit-transform: rotate(40deg);
        -moz-transform: rotate(40deg);
        -ms-transform: rotate(40deg);
        -o-transform: rotate(40deg);
        transform: rotate(40deg);
        -webkit-backface-visibility: hidden;
        -webkit-transform-origin: 100% 100%;
        -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        -o-transform-origin: 100% 100%;
        transform-origin: 100% 100%;}
        .space{
        margin-top: 35px;
        }
        h1{
        font-family: 'Lobster Two', cursive;
        }
        </style>
    </head>
    <body>
        
        <!--Header -->
        
        <?php
        include($header_file_path);?>
        <!--./Header -->
        <!--Main Content -->
        <div class="card-cascade wider regform">
            <!-- start version 0.2 -->
            <form class="md-form RForm" method="POST" action="<?php echo $local_host_name?>/PHP/education.php">
                <!-- end version 0.2 -->
                <h1 class="regtitle">Educational Information</h1>
                <!--First row-->
                <div class="row card">
                    <div class=card-title>
                        <br/>
                        
                    </div>
                    <!--First column-->
                    <div class="col-md-6 ">
                        <h1>Heighst Education
                        </h1>
                    </div>

                        <div class="col-md-6">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <label for='Heighest Education'></label>
                                    <select class='form-control opt' id='Religon' name='education'>
                                       
     <option value="" class="hide">Select Education</option>
    <option data-islabel="Y" value="1"> All Bachelors in Engineering / Computers                </option>
    <option data-islabel="N" value="2"> Aeronautical Engineering                                </option>
    <option data-islabel="N" value="3"> B.Arch                                                  </option>
    <option data-islabel="N" value="4"> BCA                                                     </option>
    <option data-islabel="N" value="5"> BE                                                      </option>
    <option data-islabel="N" value="6"> B.Plan                                                  </option>
    <option data-islabel="N" value="7"> B.Sc IT/ Computer Science                               </option>
    <option data-islabel="N" value="8"> B.Tech.                                                 </option>
    <option data-islabel="N" value="9"> Other Bachelor Degree in Engineering / Computers        </option>
    <option data-islabel="Y" value="10"> All Bachelors in Arts / Science / Commerce              </option>
    <option data-islabel="N" value="11"> Aviation Degree                                         </option>
    <option data-islabel="N" value="12"> B.A.                                                    </option>
    <option data-islabel="N" value="13"> B.Com.                                                  </option>
    <option data-islabel="N" value="14"> B.Ed.                                                   </option>
    <option data-islabel="N" value="15"> BFA                                                     </option>
    <option data-islabel="N" value="16"> BFT                                                     </option>
    <option data-islabel="N" value="17"> BLIS                                                    </option>
    <option data-islabel="N" value="18"> B.M.M.                                                  </option>
    <option data-islabel="N" value="19"> B.Sc.                                                   </option>
    <option data-islabel="N" value="20"> B.S.W                                                   </option>
    <option data-islabel="N" value="21"> B.Phil.                                                 </option>
    <option data-islabel="N" value="22"> Other Bachelor Degree in Arts / Science / Commerce      </option>
    <option data-islabel="Y" value="23"> All Bachelors in Management                             </option>
    <option data-islabel="N" value="24"> BBA                                                     </option>
    <option data-islabel="N" value="25"> BFM (Financial Management)                              </option>
    <option data-islabel="N" value="26"> BHM (Hotel Management)                                  </option>
    <option data-islabel="N" value="27"> Other Bachelor Degree in Management                     </option>
    <option data-islabel="Y" value="28"> All Bachelors in Medicine in General / Dental / Surgeon </option>
    <option data-islabel="N" value="29"> B.A.M.S.                                                </option>
    <option data-islabel="N" value="30"> BDS                                                     </option>
    <option data-islabel="N" value="31"> BHMS                                                    </option>
    <option data-islabel="N" value="32"> BSMS                                                    </option>
    <option data-islabel="N" value="33"> BPharm                                                  </option>
    <option data-islabel="N" value="34"> BPT                                                     </option>
    <option data-islabel="N" value="35"> BUMS                                                    </option>
    <option data-islabel="N" value="36"> BVSc                                                    </option>
    <option data-islabel="N" value="37"> MBBS                                                    </option>
    <option data-islabel="N" value="38"> B.Sc. Nursing                                           </option>
    <option data-islabel="N" value="39"> Other Bachelor Degree in Medicine                       </option>
    <option data-islabel="Y" value="40"> All Bachelors in Legal                                  </option>
    <option data-islabel="N" value="41"> BGL                                                     </option>

<option data-islabel="N" value="42"> B.L.                                                    </option>

<option data-islabel="N" value="43"> LL.B.                                                   </option>
<option data-islabel="N" value="44"> Other Bachelor Degree in Legal                          </option>
<option data-islabel="Y" value="45"> All Masters in Engineering / Computers                  </option>
<option data-islabel="N" value="46"> M.Arch.                                                 </option>
<option data-islabel="N" value="47"> MCA                                                     </option>
<option data-islabel="N" value="48"> ME                                                      </option>
<option data-islabel="N" value="49"> M.Sc. IT / Computer Science                             </option>
<option data-islabel="N" value="50"> M.S.(Engg.)                                             </option>
<option data-islabel="N" value="51"> M.Tech.                                                 </option>
<option data-islabel="N" value="52"> PGDCA                                                   </option>
<option data-islabel="N" value="53"> Other Masters Degree in Engineering / Computers         </option>
<option data-islabel="Y" value="54"> All Masters in Arts / Science / Commerce                </option>
<option data-islabel="N" value="55"> M.A.                                                    </option>
<option data-islabel="N" value="56"> MCom                                                    </option>
<option data-islabel="N" value="57"> M.Ed.                                                   </option>
<option data-islabel="N" value="58"> MFA                                                     </option>
<option data-islabel="N" value="59"> MLIS                                                    </option>
<option data-islabel="N" value="60"> M.Sc.                                                   </option>
<option data-islabel="N" value="61"> MSW                                                     </option>
<option data-islabel="N" value="62"> M.Phil.                                                 </option>
<option data-islabel="N" value="63"> Other Master Degree in Arts / Science / Commerce        </option>
<option data-islabel="Y" value="64"> All Masters in Management                               </option>
<option data-islabel="N" value="65"> MBA                                                     </option>
<option data-islabel="N" value="66"> MFM (Financial Management)                              </option>
<option data-islabel="N" value="67"> MHM  (Hotel Management)                                 </option>
<option data-islabel="N" value="68"> MHRM (Human Resource Management)                        </option>
<option data-islabel="N" value="69"> PGDM                                                    </option>
<option data-islabel="N" value="70"> Other Master Degree in Management                       </option>
<option data-islabel="Y" value="71"> All Masters in Medicine - General / Dental / Surgeon    </option>
<option data-islabel="N" value="72"> MDS                                                     </option>
<option data-islabel="N" value="73"> MD / MS (Medical)                                       </option>
<option data-islabel="N" value="74"> M.Pharm                                                 </option>
<option data-islabel="N" value="75"> MPT                                                     </option>
<option data-islabel="N" value="76"> MVSc                                                    </option>
<option data-islabel="N" value="77"> Other Master Degree in Medicine                         </option>
<option data-islabel="Y" value="78"> All Masters in Legal                                    </option>
<option data-islabel="N" value="79"> LL.M.                                                   </option>
<option data-islabel="N" value="80"> M.L.                                                    </option>
<option data-islabel="N" value="81"> Other Master Degree in  Legal                           </option>
<option data-islabel="Y" value="82"> All Financial Qualification - ICWAI / CA / CS/ CFA      </option>
<option data-islabel="N" value="83"> CA                                                      </option>
<option data-islabel="N" value="84"> CFA (Chartered Financial Analyst)                       </option>
<option data-islabel="N" value="85"> CS                                                      </option>
<option data-islabel="N" value="86"> ICWA                                                    </option>
<option data-islabel="N" value="87"> Other Degree in Finance                                 </option>
<option data-islabel="Y" value="88"> Service - IAS / IPS / IRS / IES / IFS                   </option>
<option data-islabel="N" value="89"> IAS                                                     </option>
<option data-islabel="N" value="90"> IES                                                     </option>
<option data-islabel="N" value="91"> IFS                                                     </option>
<option data-islabel="N" value="92"> IRS                                                     </option>
<option data-islabel="N" value="93"> IPS                                                     </option>
<option data-islabel="N" value="94"> Other Degree in Service                                 </option>
<option data-islabel="Y" value="95">  Ph.D.                                                  </option>
<option data-islabel="N" value="96"> Ph.D.                                                   </option>
<option data-islabel="Y" value="97"> All Diploma                                             </option>
<option data-islabel="N" value="98"> Diploma                                                 </option>
<option data-islabel="N" value="99"> Polytechnic                                             </option>
<option data-islabel="N" value="100"> Trade School                                            </option>
<option data-islabel="N" value="101"> Others in Diploma                                       </option>
<option data-islabel="Y" value="102"> Higher Secondary / Secondary                            </option>
 
                                    </select>
                                </fieldset>
                            </div>
                    
                    </div>
                    <!--Second column-->
                    
                </div>
                <!--/.First row-->
                <div class="row card ">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h1>Employment Type
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                      <div class="col-md-5">
                                <fieldset class="form-group">
                                    <label for='Height'></label>
                                    <select class='form-control opt' id='Height' name='employeement'>
                                      <option value="" class="hide">Select Emplyment</option>
                                      <option value="1">Private</option>
                                      <option value="2">Goverment </option>
                                      <option value="3">Business</option>
                                      <option value="4">Defence</option>
                                      <option value="5">Self Employed</option>
                                      <option value="6">Not working</option>
                                    </select>
                                </fieldset>
                            </div>
                            
                                  
                </div>
                <!--Serching Grome For-->
                <div class="row card ">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <h1>Occupation  

                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    <div class="col-md-5">
                        <div class="md-form">
                            <fieldset class="form-group">
                                <label for='Occupetion'></label>
                                <select class='form-control opt' id='Occupetion' name='occupation'>
                                    <option value="" class="hide"></option>

                                                    <option data-islabel="Y" value="1">ADMIN</option>

                                                    <option data-islabel="N" value="2">Manager</option>

                                                    <option data-islabel="N" value="3">Supervisor</option>

                                                    <option data-islabel="N" value="4">Officer</option>

                                                    <option data-islabel="N" value="5">Administrative Professional</option>

                                                    <option data-islabel="N" value="6">Executive</option>

                                                    <option data-islabel="N" value="7">Clerk</option>

                                                    <option data-islabel="N" value="8">Human Resources Professional</option>

                                                    <option data-islabel="Y" value="9">AGRICULTURE</option>

                                                    <option data-islabel="N" value="10">Agriculture  Farming Professional</option>

                                                    <option data-islabel="Y" value="11">AIRLINE</option>

                                                    <option data-islabel="N" value="12">Pilot</option>

                                                    <option data-islabel="N" value="13">Air Hostess</option>

                                                    <option data-islabel="N" value="14">Airline Professional</option>

                                                    <option data-islabel="Y" value="15">ARCHITECT &amp; DESIGN</option>

                                                    <option data-islabel="N" value="16">Architect</option>

                                                    <option data-islabel="N" value="17">Interior Designer</option>

                                                    <option data-islabel="Y" value="18">BANKING &amp; FINANCE </option>

                                                    <option data-islabel="N" value="19">BANKING &amp; FINANCE </option>

                                                    <option data-islabel="N" value="20">Chartered Accountant</option>

                                                    <option data-islabel="N" value="21">Company Secretary</option>

                                                    <option data-islabel="N" value="22">Accounts/Finance Professional</option>

                                                    <option data-islabel="N" value="23">Banking Service Professional</option>

                                                    <option data-islabel="N" value="24">Auditor</option>

                                                    <option data-islabel="N" value="25">Financial Accountant</option>

                                                    <option data-islabel="N" value="26">Financial Analyst / Planning</option>

                                                    <option data-islabel="Y" value="27">BEAUTY AND FASHION</option>

                                                    <option data-islabel="N" value="28">Fashion Designer</option>

                                                    <option data-islabel="N" value="29">Beautician</option>

                                                    <option data-islabel="Y" value="30">CIVIL SERVICE</option>

                                                    <option data-islabel="N" value="31">Civil Services (IAS/IPS/IRS/IES/IFS)</option>

                                                    <option data-islabel="Y" value="32">DEFENCE</option>

                                                    <option data-islabel="N" value="33">Army</option>

                                                    <option data-islabel="N" value="34">Navy</option>

                                                    <option data-islabel="N" value="35">Airforce</option>

                                                    <option data-islabel="Y" value="36">EDUCATION</option>

                                                    <option data-islabel="N" value="37">Professor / Lecturer</option>

                                                    <option data-islabel="N" value="38">Teaching / Academician</option>

                                                    <option data-islabel="N" value="39">Education Professional</option>

                                                    <option data-islabel="Y" value="40">HOSPITALITY</option>

                                                    <option data-islabel="N" value="41">Hotel / Hospitality Professional</option>

                                                    <option data-islabel="Y" value="42">IT &amp; ENGINEERING </option>

                                                    <option data-islabel="N" value="43">Software Professional</option>

                                                    <option data-islabel="N" value="44">Hardware Professional</option>

                                                    <option data-islabel="N" value="45">Engineer - Non IT</option>

                                                    <option data-islabel="N" value="46">Designer - IT  Engineering</option>

                                                    <option data-islabel="Y" value="47">LEGAL</option>

                                                    <option data-islabel="N" value="48">Lawyer  Legal Professional</option>

                                                    <option data-islabel="N" value="49">LAW &amp; ENFORCEMENT</option>

                                                    <option data-islabel="N" value="50">Law Enforcement Officer</option>

                                                    <option data-islabel="Y" value="51">MEDICALS</option>

                                                    <option data-islabel="N" value="52">Doctor</option>

                                                    <option data-islabel="N" value="53">Health Care Professional</option>

                                                    <option data-islabel="N" value="54">Paramedical Professional</option>

                                                    <option data-islabel="N" value="55">Nurse</option>

                                                    <option data-islabel="Y" value="56">MARKETING &amp; SALES</option>

                                                    <option data-islabel="N" value="57">Marketing Professional</option>

                                                    <option data-islabel="N" value="58">Sales Professional</option>

                                                    <option data-islabel="Y" value="59">MEDIA &amp; ENTERTAINMENT</option>

                                                    <option data-islabel="N" value="60">Journalist</option>

                                                    <option data-islabel="N" value="61">Media Professional</option>

                                                    <option data-islabel="N" value="62">Entertainment Professional</option>

                                                    <option data-islabel="N" value="63">Event Management Professional</option>

                                                    <option data-islabel="N" value="64">Advertising / PR Professional</option>

                                                    <option data-islabel="N" value="65">Designer - Media Entertainment</option>

                                                    <option data-islabel="Y" value="66">MERCHANT NAVY</option>

                                                    <option data-islabel="N" value="67">Mariner / Merchant Navy</option>

                                                    <option data-islabel="Y" value="68">SCIENTIST </option>

                                                    <option data-islabel="N" value="69">Scientist / Researcher</option>

                                                    <option data-islabel="Y" value="70">TOP MANAGEMENT </option>

                                                    <option data-islabel="N" value="71">CXO / President, Director, Chairman</option>

                                                    <option data-islabel="N" value="72">Business Analyst</option>

                                                    <option data-islabel="Y" value="73">OTHERS</option>

                                                    <option data-islabel="N" value="74">Consultant</option>

                                                    <option data-islabel="N" value="75">Customer Care Professional</option>

                                                    <option data-islabel="N" value="76">Social Worker</option>

                                                    <option data-islabel="N" value="77">Sportsman</option>

                                                    <option data-islabel="N" value="78">Technician</option>

                                                    <option data-islabel="N" value="79">Arts  Craftsman</option>

                                                    <option data-islabel="N" value="80">Student</option>

                                                    <option data-islabel="N" value="81">Librarian</option>

                                                    <option data-islabel="N" value="82">Not Working</option>

                                                    <option data-islabel="N" value="83">Business Owner/Entrepreneur</option>

                                                    <option data-islabel="N" value="84">Driver</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
                                        
                    <!--Contact-->
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-5">
                            <h1>Monthly Income
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        <div class="col-md-6">
                             <div class="md-form">
                                <input type="number" id="PinIncome" class="form-control" name="monthly_income">
                                <label for="Income" class="Ltr">Income In Rs</label>
                            </div>
                        </div>
                        
                    </div>
                    <!--Birthday-->
                    <h1 class="regtitle">Family Profile</h1>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                        </div>
                        <div class=card-content>
                            
                            <div class="col-md-6">
                                <h1>Family Status
                                <i class="fa fa-mail" aria-hidden="true"></i></h1>
                            </div>
                            
                            <div class="col-md-5">
                                <fieldset class="form-group">
                                    <label for='Height'></label>
                                    <select class='form-control opt' id='Height' name='familystatus'>
                                        <option value="" class="hide">Select Family Status</option>
                                        <option value="1">Upper Middle Class</option>
                                        <option value="2">Middle Class</option>
                                        <option value="3">Ritch</option>
                                        <option value="4">Affluent</option>
                                       
                                    </select>
                                </fieldset>
                            </div>
                            
                        </div>
                    </div>
                    <!--Birthday-->
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-6">
                            <h1>Family Type
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                         <div class="col-md-5">
                                <fieldset class="form-group">
                                    <label for='FamilyType'></label>
                                    <select class='form-control opt' id='FamilyType' name='familytype'>
                                        <option value="" class="hide">Select Family Type</option>
                                        <option value="1">Joint Family</option>
                                        <option value="2">Nulear Family</option>
                                        <option value="3">Other</option>                                    
                                    </select>
                                </fieldset>
                            </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-6">
                            <h1>Family Values
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <label for='BodyTypeFamilyValues'></label>
                                    <select class='form-control opt' id='FamilyValues' name='familyvalues'>
                                        <option value="" class="hide">Select Family Values</option>
                                        <option value="1">Orthodox</option>
                                        <option value="3">Traditional</option>
                                        <option value="4">Moderate</option>
                                        <option value="5">Liberal</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-4">
                            <h1>Description
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="md-form">
                                <textarea name="Description" id="Description" name="description"></textarea>
                                <label for="Pin" class="Ltr"> . Describe Yourself</label>
                            
                            </div>
                        </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                <!--First panel-->
                                <div class="panel panel-default">
                                    <!--Panel heading-->
                                    <div class="panel-heading" role="tab" id="FamilyMembers">
                                        <h5 class="panel-title">
                                        <a class="arrow-r collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h1 class="clps">Family Members<i class="fa fa-angle-down rotate-icon"></i></h1>
                                        </a>
                                        </h5>
                                    </div>
                                    
                                </div>
                                
     <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="FamilyMembers">

                <div class="row card">
                        <div class=card-title>
                            <br/>
                        </div>
                        <!--First column-->
                        <div class="col-md-5 ">
                           No Members In Family
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="number" id="NoOfMem" class="form-control"  name="noofmem" >
                                <label for="NoOfMem" class="Ltr" title="Enter 6 Digit No Only">Total Family Members</label>
                            </div>
                        </div>
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <br/>
                        </div>
                        <!--First column-->
                        <div class="col-md-5 ">
                          Total Married Brothers
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="number" id="Mbro" class="form-control"  name="totalmarriedbrother" >
                                <label for="Mbro" class="Ltr" title="Enter 6 Digit No Only">Married Brothers</label>
                            </div>
                        </div>
                    </div>
                       <div class="row card">
                        <div class=card-title>
                            <br/>
                        </div>
                        <!--First column-->
                        <div class="col-md-5 ">
                          Total Married Sisters
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="number" id="Msis" class="form-control"  name="totalmarriedsister" >
                                <label for="Msis" class="Ltr" title="Enter 6 Digit No Only">Married Sisters</label>
                            </div>
                        </div>
                    </div>
                     <div class="row card">
                        <div class=card-title>
                            <br/>
                        </div>
                        <!--First column-->
                        <div class="col-md-5 ">
                          Relative Sir Names
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="Msis" class="form-control"  name="relativesurname" >
                                <label for="Msis" class="Ltr" title="Enter 6 Digit No Only">Sir Names</label>
                            </div>
                        </div>
                    </div>
               </div>
             </div>       

                   <br><br>              

               
                    <!-- Submit And Create Account Of User -->
                    
                    <!-- <div class="col-md-3">
                    </div> -->
                    <div class="row">
                        <div class="col-md-3 offset-md-3">
                            <div class="md-form">
                                <button type="submit" class="btn btn-success Frm">Save</button>
                            </div>
                          
                        </div>
                        <div class="col-md-3 ">
                            <div class="md-form">
                                <a type="button" href="<?php echo"$local_host_name"?>/" class="btn btn-danger Frm">Cancel</a>
                            </div>
                        </div>
                         <div class="col-md-3 ">
                            <div class="md-form">
                                <a type="button" onclick="alert('Pleas fill all the information for better result');" class="btn btn-danger Frm">Skip Step</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                    </div> -->
                    
                    <!-- start version 0.2 -->
                </form>
                <!-- end version 0.2 -->
            </div>
            <!--./MainContent -->
    </div>
                <!--Footer-->
            <?php
            include($footer_file_path);?>
            <!--/.Footer-->
            <!-- JQuery -->
            <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/tether.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/mdb.min.js"></script>
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
            function able(){
            document.getElementById("Register").disabled="false";
            }
            </script>
        </body>
    </html>