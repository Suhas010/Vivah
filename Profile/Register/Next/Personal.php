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
        <title>  Personal Register to Vivah</title>
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
        .clps{

    font-family: "Open Sans","OpenSans",sans-serif;
    letter-spacing: 5px;
    margin-left: 10%;
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
            <form class="md-form RForm" method="POST" action="<?php echo $local_host_name?>/PHP/Personal.php">
                <!-- end version 0.2 -->
                <h1 class="regtitle">Personal Information</h1>
                <!--First row-->
                <div class="row card">
                    <div class=card-title>
                        <br/>
                        
                    </div>
                    <!--First column-->
                    <div class="col-md-3 ">
                        <h1>Address
                        </h1>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="text" id="Village" class="form-control" name="Village">
                            <label for="Village" class="Ltr">Village</label>
                        </div>
                    </div>
                    <!--Second column-->
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="text" id="Taluka" class="form-control" name="Taluka">
                            <label for="Taluka" class="Ltr">Taluka</label>
                        </div>
                    </div>
                    <!--Third column-->
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="text" id="Distrik" class="form-control" name="Distric">
                            <label for="Distrik" class="Ltr">Distric</label> <br>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="text" id="State" class="form-control" name="State">
                            <label for="State" class="Ltr">State</label>
                        </div>
                    </div>
                    <!--Second column-->
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="text" id="Contry" class="form-control" name="Contry">
                            <label for="Contry" class="Ltr">Contry</label>
                        </div>
                    </div>
                    <!--Third column-->
                    <div class="col-md-3">
                        <div class="md-form">
                            <input type="tel" id="Pin" class="form-control" name="PIN">
                            <label for="Pin" class="Ltr">PIN</label>
                        </div>
                    </div>
                    </div>
                </div>
                <!--/.First row-->
                <div class="row card ">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <h1>Maretial Status
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                <input name="MaretialStatus" type="radio" id="Single" value="Single">
                                <label for="Single">Never Married</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form">
                            <fieldset class="form-group">
                                
                                <input name="MaretialStatus" type="radio" id="Divorce" value="Divorce">
                                <label for="Divorce">Divorced</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                
                                <input name="MaretialStatus" type="radio" id="Widower" value="Widower">
                                <label for="Widower">Widower</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                
                                <input name="MaretialStatus" type="radio" id="AwatingDivorce" value="AwatingDivorce">
                                <label for="AwatingDivorce">Awating Divorce</label>
                            </fieldset>
                        </div>
                    </div>
                    
                </div>
                <!--Serching Grome For-->
                <div class="row card ">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <h1>Religion
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                <label for='Religion'></label>
                                <select class='form-control opt' id='Religon' name='religon'>
                                    <option class='op' class='op' disabled selected>Hindu</option>
                                    <option class='op'  value='Bacholor'>Buddhist</option>
                                    <option class='op' value='Pg'>Muslim</option>
                                    <option class='op' value='En'>Christian</option>
                                    <option class='op' value='Doc'>Shikh</option>
                                    <option class='op' value='Iti'>Jain</option>
                                    <option class='op' value='mba'>Parsi</option>
                                    <option class='op' value='Other'>Jwish</option>
                                    <option class='op' value='Other'>Inter Religion</option>
                                    <option class='op' value='Other'>No Religious Belief</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                <label for='Religion'></label>
                                <select class='form-control opt' id='Cast' name='cast'>
                                    <option value="">Cast/Division</option>
                                    <option value="1">Ad Dharmi</option>
                                    <option value="2">Adi Andhra</option>
                                    <option value="3">Adi Dravida</option>
                                    <option value="4">Adi KANNADA</option>
                                    <option value="5">Agarwal</option>
                                    <option value="6">Agnikula Kshatriya</option>
                                    <option value="7">Agri</option>
                                    <option value="8">Ahir Shimpi</option>
                                    <option value="9">Ahom</option>
                                    <option value="10">Ambalavasi</option>
                                    <option value="11">Arekatica</option>
                                    <option value="12">Arora</option>
                                    <option value="13">Arunthathiyar</option>
                                    <option value="14">Arya Vysya</option>
                                    <option value="15">Ayyaraka</option>
                                    <option value="16">Badaga</option>
                                    <option value="17">Bagdi</option>
                                    <option value="18">Baidya</option>
                                    <option value="19">Baishnab</option>
                                    <option value="20">Baishya</option>
                                    <option value="21">Bajantri</option>
                                    <option value="22">Balija</option>
                                    <option value="23">Banayat ORIYA</option>
                                    <option value="24">Banik</option>
                                    <option value="25">Baniya</option>
                                    <option value="26">Baniya - Bania</option>
                                    <option value="27">Baniya - Kumuti</option>
                                    <option value="28">Banjara</option>
                                    <option value="29">Barai</option>
                                    <option value="30">Bari</option>
                                    <option value="31">Baria</option>
                                    <option value="32">Barujibi</option>
                                    <option value="33">Besta</option>
                                    <option value="34">Bhandari</option>
                                    <option value="35">Bhatia</option>
                                    <option value="36">Bhatraju</option>
                                    <option value="37">Bhavasar Kshatriya</option>
                                    <option value="38">Bhoi</option>
                                    <option value="39">Bhovi</option>
                                    <option value="40">Bhoyar</option>
                                    <option value="41">Billava</option>
                                    <option value="42">Bishnoi/Vishnoi</option>
                                    <option value="43">Bondili</option>
                                    <option value="44">Boyar</option>
                                    <option value="45">Brahmbatt</option>
                                    <option value="46">Brahmin - Anavil</option>
                                    <option value="47">Brahmin - Audichya</option>
                                    <option value="48">Brahmin - Barendra</option>
                                    <option value="49">Brahmin - Bhatt</option>
                                    <option value="50">Brahmin - Bhumihar</option>
                                    <option value="51">Brahmin - Daivadnya</option>
                                    <option value="52">Brahmin - Danua</option>
                                    <option value="53">Brahmin - Deshastha</option>
                                    <option value="54">Brahmin - Dhiman</option>
                                    <option value="55">Brahmin - Dravida</option>
                                    <option value="56">Brahmin - GARHWALI</option>
                                    <option value="57">Brahmin - Gaur</option>
                                    <option value="58">Brahmin - Goswami/Gosavi</option>
                                    <option value="59">Brahmin - Gujar Gaur</option>
                                    <option value="60">Brahmin - Gurukkal</option>
                                    <option value="61">Brahmin - Halua</option>
                                    <option value="62">Brahmin - Havyaka</option>
                                    <option value="63">Brahmin - Hoysala</option>
                                    <option value="64">Brahmin - Iyengar</option>
                                    <option value="65">Brahmin - Iyer</option>
                                    <option value="66">Brahmin - Jangid</option>
                                    <option value="67">Brahmin - Jhadua</option>
                                    <option value="68">Brahmin - Jyotish</option>
                                    <option value="69">Brahmin - Kanyakubj</option>
                                    <option value="70">Brahmin - Karhade</option>
                                    <option value="71">Brahmin - Khandelwal</option>
                                    <option value="72">Brahmin - Kokanastha</option>
                                    <option value="73">Brahmin - Kota</option>
                                    <option value="74">Brahmin - Kulin</option>
                                    <option value="76">Brahmin - Kumaoni</option>
                                    <option value="77">Brahmin - Madhwa</option>
                                    <option value="78">Brahmin ? Maithil</option>
                                    <option value="79">Brahmin - Modh</option>
                                    <option value="80">Brahmin - Mohyal</option>
                                    <option value="81">Brahmin - Nagar</option>
                                    <option value="82">Brahmin - Namboodiri</option>
                                    <option value="83">Brahmin - Narmadiya</option>
                                    <option value="84">Brahmin - Narmadiya </option>
                                    <option value="85">Brahmin - Niyogi</option>
                                    <option value="86">Brahmin - Others</option>
                                    <option value="87">Brahmin - Paliwal</option>
                                    <option value="88">Brahmin - Panda</option>
                                    <option value="89">Brahmin - Pandit</option>
                                    <option value="90">Brahmin - Pareek</option>
                                    <option value="91">Brahmin - Pushkarna</option>
                                    <option value="92">Brahmin - Rarhi</option>
                                    <option value="93">Brahmin - Rigvedi</option>
                                    <option value="94">Brahmin - Rudraj</option>
                                    <option value="95">Brahmin - Sakaldwipi</option>
                                    <option value="96">Brahmin - Sanadya</option>
                                    <option value="97">Brahmin - Sanketi</option>
                                    <option value="98">Brahmin - Saraswat</option>
                                    <option value="99">Brahmin - Saryuparin</option>
                                    <option value="100">Brahmin - Shivhalli</option>
                                    <option value="101">Brahmin - Shrimali</option>
                                    <option value="102">Brahmin - Sikhwal</option>
                                    <option value="103">Brahmin - Smartha</option>
                                    <option value="104">Brahmin - Sri Vaishnava</option>
                                    <option value="105">Brahmin - Stanika</option>
                                    <option value="106">Brahmin - Tyagi</option>
                                    <option value="107">Brahmin - Vaidiki</option>
                                    <option value="108">Brahmin - Vaikhanasa</option>
                                    <option value="109">Brahmin - Velanadu</option>
                                    <option value="110">Brahmin - Vyas</option>
                                    <option value="111">Brajastha Maithil</option>
                                    <option value="112">Bunt (Shetty)</option>
                                    <option value="113">Chalawadi and Holeya</option>
                                    <option value="114">Chambhar</option>
                                    <option value="115">Chandravanshi Kahar</option>
                                    <option value="116">Chasa</option>
                                    <option value="117">Chattada Sri Vaishnava</option>
                                    <option value="118">Chattada Sri Vaishnava </option>
                                    <option value="119">Chaudary</option>
                                    <option value="120">Chaurasia</option>
                                    <option value="121">Chennadasar</option>
                                    <option value="122">Chettiar</option>
                                    <option value="123">Chhetri</option>
                                    <option value="124">Chippolu (Mera)</option>
                                    <option value="125">CKP</option>
                                    <option value="126">Coorgi</option>
                                    <option value="127">Devadiga</option>
                                    <option value="128">Devandra Kula Vellalar</option>
                                    <option value="129">Devang Koshthi</option>
                                    <option value="130">Devanga</option>
                                    <option value="131">Devar/Thevar/Mukkulathor</option>
                                    <option value="132">Devrukhe Brahmin</option>
                                    <option value="133">Dhangar</option>
                                    <option value="134">Dheevara</option>
                                    <option value="135">Dhiman</option>
                                    <option value="136">Dhoba</option>
                                        <option value="137">Dhobi</option>
                                        <option value="138">Dhor / Kakkayya</option>
                                        <option value="139">Dommala</option>
                                        <option value="140">Dumal</option>
                                        <option value="141">Dusadh (Paswan)</option>
                                        <option value="142">Ediga</option>
                                        <option value="143">Ezhava</option>
                                        <option value="144">Ezhuthachan</option>
                                        <option value="145">Gabit</option>
                                        <option value="146">Ganda</option>
                                        <option value="147">Gandla</option>
                                        <option value="148">Ganiga</option>
                                        <option value="149">Garhwali</option>
                                        <option value="150">Gatti</option>
                                        <option value="151">Gavara</option>
                                        <option value="152">Gawali</option>
                                        <option value="153">Ghisadi</option>
                                        <option value="154">Ghumar</option>
                                        <option value="155">Goala</option>
                                        <option value="156">Goan</option>
                                        <option value="157">Gomantak</option>
                                        <option value="158">Gondhali</option>
                                        <option value="159">Goud</option>
                                        <option value="160">Gounder</option>
                                        <option value="161">Gowda</option>
                                        <option value="162">Gramani</option>
                                        <option value="163">Gudia</option>
                                        <option value="164">Gujjar</option>
                                        <option value="165">Gupta</option>
                                        <option value="166">Guptan</option>
                                        <option value="167">Gurav</option>
                                        <option value="168">Gurjar</option>
                                        <option value="169">Halba Koshti</option>
                                        <option value="170">Helava</option>
                                        <option value="171">Hugar (Jeer)</option>
                                        <option value="172">Intercaste</option>
                                        <option value="173">Irani</option>
                                        <option value="174">Jaalari</option>
                                        <option value="175">Jaiswal</option>
                                        <option value="176">Jandra</option>
                                        <option value="177">Jangam</option>
                                        <option value="178">Jangra - Brahmin</option>
                                        <option value="179">Jat</option>
                                        <option value="180">Jatav</option>
                                        <option value="181">Jetty/Malla</option>
                                        <option value="182">Jijhotia Brahmin</option>
                                        <option value="183">Jogi (Nath)</option>
                                        <option value="184">Kachara</option>
                                        <option value="185">Kadava Patel</option>
                                        <option value="186">Kahar</option>
                                        <option value="187">Kaibarta</option>
                                        <option value="188">Kalal</option>
                                        <option value="189">Kalanji</option>
                                        <option value="190">Kalar</option>
                                        <option value="191">Kalinga</option>
                                        <option value="192">Kalinga Vysya</option>
                                        <option value="193">Kalita</option>
                                        <option value="194">Kalwar</option>
                                        <option value="195">Kamboj</option>
                                        <option value="196">Kamma</option>
                                        <option value="197">Kansari</option>
                                        <option value="198">Kapu</option>
                                        <option value="199">Karana</option>
                                        <option value="200">Karmakar</option>
                                        <option value="201">Karuneegar</option>
                                        <option value="202">Kasar</option>
                                        <option value="203">Kashyap</option>
                                        <option value="204">Katiya</option>
                                        <option value="205">Kavuthiyya/Ezhavathy</option>
                                        <option value="206">Kayastha</option>
                                        <option value="207">Khandayat</option>
                                        <option value="208">Khandelwal</option>
                                        <option value="209">Kharwa</option>
                                        <option value="210">Kharwar</option>
                                        <option value="211">Khatri</option>
                                        <option value="212">Kirar</option>
                                        <option value="213">Kokanastha Maratha</option>
                                        <option value="214">Koli</option>
                                        <option value="215">Koli Mahadev</option>
                                        <option value="216">Koli Patel</option>
                                        <option value="217">Kongu Vellala Gounder</option>
                                        <option value="218">Korama</option>
                                        <option value="219">Kori</option>
                                        <option value="220">Kosthi</option>
                                        <option value="221">Krishnavaka</option>
                                        <option value="222">Kshatriya</option>
                                        <option value="223">Kudumbi</option>
                                        <option value="224">Kulal</option>
                                        <option value="225">Kulalar</option>
                                        <option value="226">Kulita</option>
                                        <option value="227">Kumawat</option>
                                        <option value="228">Kumbhakar</option>
                                        <option value="229">Kumbhar</option>
                                        <option value="230">Kumhar</option>
                                        <option value="231">Kummari</option>
                                        <option value="232">Kunbi</option>
                                        <option value="233">Kuravan</option>
                                        <option value="234">Kurmi/Kurmi Kshatriya</option>
                                        <option value="235">Kuruba</option>
                                        <option value="236">Kuruhina Shetty</option>
                                        <option value="237">Kurumbar</option>
                                        <option value="238">Kushwaha (Koiri)</option>
                                        <option value="239">Lambadi</option>
                                        <option value="240">Leva patel</option>
                                        <option value="241">Leva patil</option>
                                        <option value="242">Lingayath</option>
                                        <option value="243">Lodhi Rajput</option>
                                        <option value="244">Lohana</option>
                                        <option value="245">Lohar</option>
                                        <option value="246">Loniya</option>
                                        <option value="247">Lubana</option>
                                        <option value="248">Madiga</option>
                                        <option value="249">Mahajan</option>
                                        <option value="250">Mahar</option>
                                        <option value="251">Mahendra</option>
                                        <option value="252">Maheshwari</option>
                                        <option value="253">Mahishya</option>
                                        <option value="254">Majabi</option>
                                        <option value="255">Mala</option>
                                        <option value="256">Mali</option>
                                        <option value="257">Mallah</option>
                                        <option value="258">Malviya Brahmin</option>
                                        <option value="259">Mangalorean</option>
                                        <option value="260">Mapila</option>
                                        <option value="261">Maratha</option>
                                        <option value="262">Maruthuvar</option>
                                        <option value="263">Matang</option>
                                        <option value="264">Mathur</option>
                                        <option value="265">Maurya / Shakya</option>
                                        <option value="266">Meena</option>
                                        <option value="267">Meenavar</option>
                                        <option value="268">Mehra</option>
                                        <option value="269">Meru Darji</option>
                                        <option value="270">Mochi</option>
                                        <option value="271">Modak</option>
                                        <option value="272">Mogaveera</option>
                                        <option value="273">Mudaliyar</option>
                                        <option value="274">Mudiraj</option>
                                        <option value="275">Munnuru Kapu</option>
                                        <option value="277">Muthuraja</option>
                                        <option value="278">Naagavamsam</option>
                                        <option value="279">Nadar</option>
                                        <option value="280">Nagaralu</option>
                                        <option value="281">Nai</option>
                                        <option value="282">Naicker</option>
                                        <option value="283">Naidu</option>
                                        <option value="284">Naik</option>
                                        <option value="285">Nair</option>
                                        <option value="286">Namasudra / Namassej</option>
                                        <option value="287">Nambiar</option>
                                        <option value="288">Napit</option>
                                        <option value="289">Nayaka</option>
                                        <option value="290">Neeli</option>
                                        <option value="291">Nhavi</option>
                                        <option value="292">Oswal</option>
                                        <option value="293">Otari</option>
                                        <option value="294">Padmasali</option>
                                        <option value="295">Pal</option>
                                        <option value="296">Panchal</option>
                                        <option value="297">Pandaram</option>
                                        <option value="298">Panicker</option>
                                        <option value="299">Parkava Kulam</option>
                                        <option value="300">Parsi</option>
                                        <option value="301">Partraj</option>
                                        <option value="302">Pasi</option>
                                        <option value="303">Patel</option>
                                        <option value="304">Pathare Prabhu</option>
                                        <option value="305">Patnaick/Sistakaranam</option>
                                        <option value="306">Patra</option>
                                        <option value="307">Perika</option>
                                        <option value="308">Pillai</option>
                                        <option value="309">Poosala</option>
                                        <option value="310">Porwal</option>
                                        <option value="311">Prajapati</option>
                                        <option value="312">Raigar</option>
                                        <option value="313">Rajaka</option>
                                        <option value="314">Rajastani</option>
                                        <option value="315">Rajbhar</option>
                                        <option value="316">Rajbonshi</option>
                                        <option value="317">Rajpurohit</option>
                                        <option value="318">Rajput</option>
                                        <option value="319">Ramanandi</option>
                                        <option value="320">Ramdasia</option>
                                        <option value="321">Ramgariah</option>
                                        <option value="322">Ramoshi</option>
                                        <option value="323">Ravidasia</option>
                                        <option value="324">Rawat</option>
                                        <option value="325">Reddy</option>
                                        <option value="326">Relli</option>
                                        <option value="327">Ror</option>
                                        <option value="328">Sadgope</option>
                                        <option value="329">Sagara (Uppara)</option>
                                        <option value="330">Saha</option>
                                        <option value="331">Sahu</option>
                                        <option value="332">Saini</option>
                                        <option value="333">Saliya</option>
                                        <option value="334">Sathwara</option>
                                        <option value="335">Savji</option>
                                        <option value="336">SC</option>
                                        <option value="337">Senai Thalaivar</option>
                                        <option value="338">Senguntha Mudaliyar</option>
                                        <option value="339">Settibalija</option>
                                        <option value="340">Shimpi/Namdev</option>
                                        <option value="341">Sindhi-Amil</option>
                                        <option value="342">Sindhi-Baibhand</option>
                                        <option value="343">Sindhi-Bhanusali</option>
                                        <option value="344">Sindhi-Bhatia</option>
                                        <option value="345">Sindhi-Chhapru</option>
                                        <option value="346">Sindhi-Dadu</option>
                                        <option value="347">Sindhi-Hyderabadi</option>
                                        <option value="348">Sindhi-Larai</option>
                                        <option value="349">Sindhi-Larkana</option>
                                        <option value="350">Sindhi-Lohana</option>
                                        <option value="351">Sindhi-Rohiri</option>
                                        <option value="352">Sindhi-Sahiti</option>
                                        <option value="353">Sindhi-Sakkhar</option>
                                        <option value="354">Sindhi-Sehwani</option>
                                        <option value="355">Sindhi-Shikarpuri</option>
                                        <option value="356">Sindhi-Thatai</option>
                                        <option value="357">SKP</option>
                                        <option value="358">Sonar</option>
                                        <option value="359">Soni</option>
                                        <option value="360">Sozhiya Vellalar</option>
                                        <option value="361">Srisayana</option>
                                        <option value="362">ST</option>
                                        <option value="363">ENGLISH</option>
                                        <option value="364">Sunari</option>
                                        <option value="365">Sundhi</option>
                                        <option value="366">Surya Balija</option>
                                        <option value="367">Suthar</option>
                                        <option value="368">Swakula Sali</option>
                                        <option value="369">Tamboli</option>
                                        <option value="370">Tanti</option>
                                        <option value="371">Tantubai</option>
                                        <option value="372">Telaga</option>
                                        <option value="373">Teli</option>
                                        <option value="374">Thakkar</option>
                                        <option value="375">Thakore</option>
                                        <option value="376">Thakur</option>
                                        <option value="377">Thigala</option>
                                        <option value="378">Thiyya</option>
                                        <option value="379">Tili</option>
                                        <option value="380">Togata</option>
                                        <option value="381">Tonk Kshatriya</option>
                                        <option value="382">Turupu Kapu</option>
                                        <option value="383">Urali Gounder</option>
                                        <option value="384">Urs</option>
                                        <option value="385">Vada Balija</option>
                                        <option value="386">Vaddera</option>
                                        <option value="387">Vaish</option>
                                        <option value="388">Vaishnav</option>
                                        <option value="389">Vaishnava</option>
                                        <option value="390">Vaishya</option>
                                        <option value="391">Vaishya Vani</option>
                                        <option value="392">Valluvan</option>
                                        <option value="393">Valmiki</option>
                                        <option value="394">Vania</option>
                                        <option value="395">Vanika Vyshya</option>
                                        <option value="396">Vaniya</option>
                                        <option value="397">Vanjara</option>
                                        <option value="398">Vanjari</option>
                                        <option value="399">Vankar</option>
                                        <option value="400">Vannar</option>
                                        <option value="401">Vannia Kula Kshatriyar</option>
                                        <option value="402">Variar</option>
                                        <option value="403">Varshney</option>
                                        <option value="404">Veera Saivam</option>
                                        <option value="405">Velaan</option>
                                        <option value="406">Velama</option>
                                        <option value="407">Vellalar</option>
                                        <option value="408">Veluthedathu Nair</option>
                                        <option value="409">Vettuva Gounder</option>
                                        <option value="410">Vilakkithala Nair</option>
                                        <option value="411">Vishwakarma</option>
                                        <option value="412">Viswabrahmin</option>
                                        <option value="413">Vokkaliga</option>
                                        <option value="414">Vysya</option>
                                        <option value="415">Yadav</option>
                                        <option value="416">Yellapu</option>
                                        <option value="417">Brahmin - Embrandiri</option>
                                        <option value="418">Ansari</option>
                                        <option value="419">Arain</option>
                                        <option value="420">Awan</option>
                                        <option value="421">Bohra</option>
                                        <option value="422">Dekkani</option>
                                        <option value="423">Dudekula</option>
                                        <option value="424">Hanafi</option>
                                        <option value="425">Jat</option>
                                        <option value="426">Khoja</option>
                                        <option value="427">Lebbai</option>
                                        <option value="428">Malik</option>
                                        <option value="429">Mapila</option>
                                        <option value="430">Maraicar</option>
                                        <option value="431">Memon</option>
                                        <option value="432">Mughal</option>
                                        <option value="433">Others</option>
                                        <option value="434">Pathan</option>
                                        <option value="435">Qureshi</option>
                                        <option value="436">Rajput</option>
                                        <option value="437">Rowther</option>
                                        <option value="438">Shafi</option>
                                        <option value="439">Sheikh</option>
                                        <option value="440">Siddiqui</option>
                                        <option value="441">Syed</option>
                                        <option value="442">UnSpecified</option>
                                        <option value="443">Born Again</option>
                                        <option value="444">Bretheren</option>
                                        <option value="445">Church of South India</option>
                                        <option value="446">Evangelist</option>
                                        <option value="447">Jacobite</option>
                                        <option value="448">Knanaya</option>
                                        <option value="449">Knanaya Catholic</option>
                                        <option value="450">Knanaya Jacobite</option>
                                        <option value="451">Latin Catholic</option>
                                        <option value="452">Malankara</option>
                                        <option value="453">Marthoma</option>
                                        <option value="454">Others</option>
                                        <option value="455">Pentecost</option>
                                        <option value="456">Roman Catholic</option>
                                        <option value="457">Seventh-day Adventist</option>
                                        <option value="458">Syrian Catholic</option>
                                        <option value="459">Syrian Jacobite</option>
                                        <option value="460">Syrian Orthodox</option>
                                        <option value="461">Syro Malabar</option>
                                        <option value="463">Ahluwalia</option>
                                        <option value="464">Arora</option>
                                        <option value="465">Bhatia</option>
                                        <option value="466">Bhatra</option>
                                        <option value="467">Ghumar</option>
                                        <option value="468">Intercaste</option>
                                        <option value="469">Jat</option>
                                        <option value="470">Kamboj</option>
                                        <option value="471">Khatri</option>
                                        <option value="472">Kshatriya</option>
                                        <option value="473">Lubana</option>
                                        <option value="474">Majabi</option>
                                        <option value="475">Nai</option>
                                        <option value="476">Others</option>
                                        <option value="477">Rajput</option>
                                        <option value="478">Ramdasia</option>
                                        <option value="479">Ramgharia</option>
                                        <option value="480">Ravidasia</option>
                                        <option value="481">Saini</option>
                                        <option value="482">Tonk Kshatriya</option>
                                        <option value="484">Agarwal</option>
                                        <option value="485">Bania</option>
                                        <option value="486">Intercaste</option>
                                        <option value="487">Jaiswal</option>
                                        <option value="488">KVO</option>
                                        <option value="489">Khandelwal</option>
                                        <option value="490">Kutchi</option>
                                        <option value="491">Oswal</option>
                                        <option value="492">Others</option>
                                        <option value="493">Porwal</option>
                                        <option value="495">Vaishya</option>
                                        <option value="496">Intercaste</option>
                                        <option value="497">Irani</option>
                                        <option value="498">Parsi</option>
                                        <option value="499">Don&#39;t wish to specify</option>
                                        
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <input type="tel" id="SubCast" class="form-control" name="subcast">
                                <label for="SubCast" class="Ltr">Sub-Cast</label>
                            </div>
                        </div>
                    </div>
                    
                    <!--Contact-->
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-5">
                            <h1>Mother Tongue
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        <div class="col-md-5">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <label for='Religion'></label>
                                    <select class='form-control opt' id='MotherTongue' name='MotherTongue'>
                                        <option value="" class="hide">Mother Tongue</option>
                                        <option id="doUpdate" value="1">Angika</option>
                                        
                                        <option id="doUpdate" value="2">Arunachali</option>
                                        
                                        <option id="doUpdate" value="3">Assamese</option>
                                        
                                        <option id="doUpdate" value="4">Awadhi</option>
                                        
                                        <option id="doUpdate" value="5">Bengali</option>
                                        
                                        <option id="doUpdate" value="6">Bhojpuri</option>
                                        
                                        <option id="doUpdate" value="7">Brij</option>
                                        
                                        <option id="doUpdate" value="8">Bihari</option>
                                        
                                        <option id="doUpdate" value="9">Badaga</option>
                                        
                                        <option id="doUpdate" value="10">Chatisgarhi</option>
                                        
                                        <option id="doUpdate" value="11">Dogri</option>
                                        
                                        <option id="doUpdate" value="12">English</option>
                                        
                                        <option id="doUpdate" value="13">French</option>
                                        
                                        <option id="doUpdate" value="14">Garhwali</option>
                                        
                                        <option id="doUpdate" value="15">Garo</option>
                                        
                                        <option id="doUpdate" value="16">Gujarati</option>
                                        <option id="doUpdate" value="17">Haryanvi</option>
                                        
                                        <option id="doUpdate" value="18">Himachali/Pahari</option>
                                        
                                        <option id="doUpdate" value="19">Hindi</option>
                                        
                                        <option id="doUpdate" value="20">Kanauji</option>
                                        
                                        <option id="doUpdate" value="21">Kannada</option>
                                        
                                        <option id="doUpdate" value="22">Kashmiri</option>
                                        
                                        <option id="doUpdate" value="23">Khandesi</option>
                                        
                                        <option id="doUpdate" value="24">Khasi</option>
                                        
                                        <option id="doUpdate" value="25">Konkani</option>
                                        
                                        <option id="doUpdate" value="26">Koshali</option>
                                        
                                        <option id="doUpdate" value="27">Kumaoni</option>
                                        
                                        <option id="doUpdate" value="28">Kutchi</option>
                                        
                                        <option id="doUpdate" value="29">Lepcha</option>
                                        
                                        <option id="doUpdate" value="30">Ladacki</option>
                                        
                                        <option id="doUpdate" value="31">Magahi</option>
                                        
                                        <option id="doUpdate" value="32">Maithili</option>
                                        
                                        <option id="doUpdate" value="33">Malayalam</option>
                                        
                                        <option id="doUpdate" value="34">Manipuri</option>
                                        
                                        <option id="doUpdate" value="35">Marathi</option>
                                        
                                        <option id="doUpdate" value="36">Marwari</option>
                                        
                                        <option id="doUpdate" value="37">Miji</option>
                                        
                                        <option id="doUpdate" value="38">Mizo</option>
                                        
                                        <option id="doUpdate" value="39">Monpa</option>
                                        
                                        <option id="doUpdate" value="40">Nicobarese</option>
                                        
                                        <option id="doUpdate" value="41">Nepali</option>
                                        
                                        <option id="doUpdate" value="42">Oriya</option>
                                        
                                        <option id="doUpdate" value="43">Punjabi</option>
                                        
                                        <option id="doUpdate" value="44">Rajasthani</option>
                                        
                                        <option id="doUpdate" value="45">Sanskrit</option>
                                        
                                        <option id="doUpdate" value="46">Santhali</option>
                                        
                                        <option id="doUpdate" value="47">Sindhi</option>
                                        
                                        <option id="doUpdate" value="48">Sourashtra</option>
                                        
                                        <option id="doUpdate" value="49">Tamil</option>
                                        
                                        <option id="doUpdate" value="50">Telugu</option>
                                        
                                        <option id="doUpdate" value="51">Tripuri</option>
                                        
                                        <option id="doUpdate" value="52">Tulu</option>
                                        
                                        <option id="doUpdate" value="53">Urdu</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        
                    </div>
                    <!--Birthday-->
                    <h1 class="regtitle">Physical Characteristics</h1>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                        </div>
                        <div class=card-content>
                            
                            <div class="col-md-6">
                                <h1>Height Ft /Cms
                                <i class="fa fa-mail" aria-hidden="true"></i></h1>
                            </div>
                            
                            <div class="col-md-5">
                                <fieldset class="form-group">
                                    <label for='Height'></label>
                                    <select class='form-control opt' id='Height' name='height'>
                                        <option value="" class="hide">Select Height</option>
                                        <option value="1">4ft 6in - 137 cms</option>
                                        <option value="2">4ft 7in - 140 cms</option>
                                        <option value="3">4ft 8in - 142 cms</option>
                                        <option value="4">4ft 9in - 145 cms</option>
                                        <option value="5">4ft 10in - 147 cms</option>
                                        <option value="6">4ft 11in - 150 cms</option>
                                        <option value="7">5ft - 152 cms</option>
                                        <option value="8">5ft 1in - 155 cms</option>
                                        <option value="9">5ft 2in - 157 cms</option>
                                        <option value="10">5ft 3in - 160 cms</option>
                                        <option value="11">5ft 4in - 163 cms</option>
                                        <option value="12">5ft 5in - 165 cms</option>
                                        <option value="13">5ft 6in - 168 cms</option>
                                        <option value="14">5ft 7in - 170 cms</option>
                                        <option value="15">5ft 8in - 173 cms</option>
                                        <option value="16">5ft 9in - 175 cms</option>
                                        <option value="17">5ft 10in - 178 cms</option>
                                        <option value="18">5ft 11in - 180 cms</option>
                                        <option value="19">6ft - 183 cms</option>
                                        <option value="20">6ft 1in - 185 cms</option>
                                        <option value="21">6ft 2in - 188 cms</option>
                                        <option value="22">6ft 3in - 191 cms</option>
                                        <option value="23">6ft 4in - 193 cms</option>
                                        <option value="24">6ft 5in - 196 cms</option>
                                        <option value="25">6ft 6in - 198 cms</option>
                                        <option value="26">6ft 7in - 201 cms</option>
                                        <option value="27">6ft 8in - 203 cms</option>
                                        <option value="28">6ft 9in - 206 cms</option>
                                        <option value="29">6ft 10in - 208 cms</option>
                                        <option value="30">6ft 11in - 211 cms</option>
                                        <option value="31">7ft - 244 cms</option>
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
                            <h1>Weight In Kgs
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="tel" id="Weight" class="form-control" name="weight">
                                <label for="Weight" class="Ltr">Weight</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-6">
                            <h1>Body Type
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <label for='BodyType'></label>
                                    <select class='form-control opt' id='BodyType' name='body_type'>
                                        <option value="" class="hide">Select Body Type</option>
                                        <option value="1">Slim</option>
                                        <option value="3">Average</option>
                                        <option value="4">Athletic</option>
                                        <option value="5">Heavy</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <br>
                            
                        </div>
                        <div class="col-md-6">
                            <h1>Complexion
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <label for='Complexion'></label>
                                    <select class='form-control opt' id='Complexion' name='complexion'>
                                        <option value="" class="hide">Select Complexion</option>
                                        <option value="6">Very Fair</option>
                                        <option value="7">Fair</option>
                                        <option value="9">Wheatish</option>
                                        <option value="10">Wheatish Brown</option>
                                        <option value="11">Dark</option>
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
                            <h1>Physically
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <input name="PysicalStatus" type="radio" id="PhysicalStatus" value="Normal">
                                    <label for="PhysicalStatus">Normal</label>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <input name="PysicalStatus" type="radio" id="PhysicalStatus" value="Physically_challenged">
                                    <label for="PhysicalStatus">Pysically Challenged</label>
                                </fieldset>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row card">
                        <div class=card-title>
                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                <!--First panel-->
                                <div class="panel panel-default">
                                    <!--Panel heading-->
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h5 class="panel-title">
                                        <a class="arrow-r collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <h1 class="clps">Astrologycal Information<i class="fa fa-angle-down rotate-icon"></i></h1>
                                        </a>
                                        </h5>
                                    </div>
                                    
                                </div>
                                
                                <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                    
                                    <div class="row card">
                                        <div class=card-title>
                                            <br>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Star
                                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <label for='Star'></label>
                                                    <select class='form-control opt' id='Star' name='star'>
                                                        <option value="" class="hide">Select Star</option>
                                                        <option value="1">Aswini</option>
                                                        <option value="2">Bharani</option>
                                                        <option value="3">Kruthiga</option>
                                                        <option value="4">Rohini</option>
                                                        <option value="5">Mrigasira</option>
                                                        <option value="6">Arudra</option>
                                                        <option value="7">Punarvasu</option>
                                                        <option value="8">Pushya</option>
                                                        <option value="9">Asilesha</option>
                                                        <option value="10">Makha</option>
                                                        <option value="11">Poorvaphalguni</option>
                                                        <option value="12">Uthiraphalgunu</option>
                                                        <option value="13">Hastha</option>
                                                        <option value="14">Chitha</option>
                                                        <option value="15">Swathi</option>
                                                        <option value="16">Visaka</option>
                                                        <option value="17">Anuradha</option>
                                                        <option value="18">Jyeshta</option>
                                                        <option value="19">Moola</option>
                                                        <option value="20">Poorvashada</option>
                                                        <option value="21">Uthrashada</option>
                                                        <option value="22">Sravana</option>
                                                        <option value="23">Dhanishta</option>
                                                        <option value="24">Stabhishek</option>
                                                        <option value="25">Poorvabhadra</option>
                                                        <option value="26">Uthirabhadra</option>
                                                        <option value="27">Revathi</option>
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
                                            <h1>Rassi
                                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="md-form">
                                                <input type="text" id="OTPRassi" class="form-control"  name="rassi" >
                                                <label for="Rassi" class="Ltr" >Rassi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row card">
                                        <div class=card-title>
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Mangalik
                                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <input name="Mangalik" type="radio" id="Yes" value="Yes">
                                                    <label for="Yes">Yes</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <input name="Mangalik" type="radio" id="No" value="No">
                                                    <label for="No">No</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <input name="Mangalik" type="radio" id="Don't No" value="Don't No">
                                                    <label for="Don't No">Don't Know</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <!--Panel heading-->
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h5 class="panel-title">
                                        <a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  aria-controls="collapseTwo"><h1 class="clps">Habbits<i class="fa fa-angle-down rotate-icon"></i></h1></a></h5>
                                    </div>
                                    
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="row card">
                                        <div class=card-title>
                                            <br/>
                                        </div>
                                        <div class="col-md-5 ">
                                            <h1>Food Habits
                                            </h1>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <label for='Food'></label>
                                                    <select class='form-control opt' id='Food' name='food_habbits'>
                                                        <option class='op' class='op' disabled selected>Select Food habits</option>
                                                        <option class='op'  value='Bacholor'>Vegeterian</option>
                                                        <option class='op' value='Pg'>Non-Vegeterian</option>
                                                        <option class='op' value='En'>Eggeterian</option>
                                                        
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row card">
                                        <div class=card-title>
                                            <br/>
                                        </div>
                                        <div class="col-md-5 ">
                                            <h1>Smoking</h1>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="md-form">
                                                <fieldset class="form-group">
                                                    <label for='FoodSmoking'></label>
                                                    <select class='form-control opt' id='Smoking' name='smoking'>
                                                        <option class='op' class='op' disabled selected>Select Option</option>
                                                        <option class='op'  value='Bacholor'>No</option>
                                                        <option class='op' value='Pg'>Occasinally</option>
                                                        <option class='op' value='En'>Yes</option>
                                                        
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div> <div class="row card">
                                    <div class=card-title>
                                        <br/>
                                    </div>
                                    <div class="col-md-5 ">
                                        <h1>Drinking</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <fieldset class="form-group">
                                                <label for='FoodSmoking'></label>
                                                <select class='form-control opt' id='Smoking' name='drinking'>
                                                    <option class='op' class='op' disabled selected>Select Option</option>
                                                    <option class='op'  value='Bacholor'>No</option>
                                                    <option class='op' value='Pg'>Occasinally</option>
                                                    <option class='op' value='En'>Yes</option>
                                                    
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
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
                            <a type="button" data-toggle="modal" data-target="#cnf" class="btn btn-danger Frm">Skip Step</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                    </div> -->
                    
                    <!-- start version 0.2 -->
                </form>
                <!-- end version 0.2 -->
            </div>
            

        <div class="modal fade modal-ext" id="cnf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                              
                    <!--Body-->
                    
                    <div class="modal-body">
                        <div class="md-form">
                          
                        </div>
                        <div class="md-form">
                           <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Click Hear To Close Login Screen">I'll fill the form</button>
                      
                            <a href="<?php echo"$local_host_name"?>/VivahIndex.php"><button class="btn btn-primary btn-lg" type="submit" data-toggle="tooltip" data-placement="top" title="Click Hear To Login">Yes Please Proceed</button></a>
                        </div>
                    </div>
                    
                    <!--Footer-->
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Click Hear To Close Login Screen">Close</button>
                    </div>
                    <!-- Version 0.1 Start -->
                </form>
                <!-- Version 0.1 End -->
                
            </div>
            <!--/.Content-->
        </div>
    </div>
             <!--./MainContent -->
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