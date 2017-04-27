<?php

						require_once(join('//', array(dirname(__FILE__), 'common', 'const.php')));
						require_once(join('//', array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die('No database connection. Please try again');
	}
	$select_query="select first_name,last_name,date,Religon,Height,annual_income,iam,cast,degree from Registration,Personal_info,Education_info;";
    $stmt = $conn->prepare($select_query);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$counter;
  foreach($stmt->fetchAll() as $k=>$v) { 
       /* $counter++;
        if($counter%3==0)
        {

        	echo"<br><br><br><br>";
        }
    	*/		echo"

		<div class='row'>
			
			<div class='col-lg-4 col-md-6 col-sm-6'>
				<div class='card-container manual-flip'>
					<div class='card'>
						<div class='front'>
							<div class='cover'>
								<img src='http://localhost/Vivah_MDB/images/rotating_card_thumb.png'>
							</div>
							<div class='user'>
								<img class='img-circle' src='http://localhost/Vivah_MDB/images/rotating_card_profile2.png'>
							</div>";
							

	echo"
		<div class='content'>
								<div class='main'>
									<h1 class='name'>".$v['first_name']."</h3>
									<p class='profession'>(CEO)</p>
									<div class='stats-container'>
										<div class='stats'>
											<h4>23</h4>
											<p>
											".$v['last_name']."
											</p>
										</div>
										<div class='stats'>
											<h4>".$v['Religon']."</h4>
											<p>
												Religon
											</p>
										</div>
										<div class='stats'>
											<h4>".$v['Height']."</h4>
											<p>
												Height
											</p>
										</div>
									</div>
								</div>
								<div class='footer'>
									<button class='btn btn-success' onclick='rotateCard(this)'>
									<i class='fa fa-mail-forward'></i>Know More
									</button>
								</div>
							</div>
							</div> <!-- end front panel -->
							
							<div class='back'>
								<div class='header'>
									<h5 class='motto'>'Other Details'</h5>
								</div>
								<div class='content'>
									<div class='main'>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Status
											</div>
											<div class='col-lg-6 sub'>
												".$v['iam']."
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Income
											</div>
											<div class='col-lg-6 sub'>
											".$v['annual_income']."
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Current City
											</div>
											<div class='col-lg-6 sub'>
												Mumbai
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Cast
											</div>
											<div class='col-lg-6 sub'>
												".$v['cast']."
											</div>
											
										</div>
										
									</div>
								</div>
								<div class='footer'>
									<button class='btn btn-danger' rel='tooltip' title='' onclick='rotateCard(this)' data-original-title='Flip Card'>
									<i class='fa fa-reply'></i> Back
									</button>
									
								</div>
						    </div> <!-- end back panel -->
								
						</div> <!-- end card -->
	
				</div> <!-- end card-container -->";
			}
		}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
?>