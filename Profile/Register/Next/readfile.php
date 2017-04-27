<?php
$conn = mysqli_connect('localhost','root','welcome','Matrimonial');
$myfp=fopen("newcast.txt","r") or die("unable to open");
while(!feof($myfp)) {
$letter=fgets($myfp) ;
$letter=rtrim($letter);
$letter=ltrim($letter);
$letter=trim($letter);
$sql = "insert into `cast`(`cast_name`)
values('$letter');";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
}
else {
	echo "wrong";
	}

  }
fclose($myfp);
mysqli_close($conn);

?>