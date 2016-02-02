<html>
<body>


<?php
session_start();

$ReqNo = $_SESSION['varname'];


$MinLat1=$_POST["MinLat1"];
$MaxLat1=$_POST["MaxLat1"];
$MinLong1=$_POST["MinLong1"];
$MaxLong1=$_POST["MaxLong1"];
$Scale1=$_POST["Scale1"];
$S2d1=$_POST["S2d1"];
$S3d1=$_POST["S3d1"];
$Leas1=$_POST["Lease1"];
$Wells1=$_POST["Wells1"];

	$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
@mysql_select_db('ONGC');
$query = "INSERT INTO Data
			VALUES ('$ReqNo',1,'$MinLat1','$MaxLat1','$MinLong1','$MaxLong1','$Scale1','$S2d1','$S3d1','$Leas1','$Wells1')";
mysql_query($query);



$MinLat2=$_POST["MinLat2"];
$MaxLat2=$_POST["MaxLat2"];
$MinLong2=$_POST["MinLong2"];
$MaxLong2=$_POST["MaxLong2"];
$Scale2=$_POST["Scale2"];
$S2d2=$_POST["S2d2"];
$S3d2=$_POST["S3d2"];
$Leas2=$_POST["Lease2"];
$Wells2=$_POST["Wells2"];

	$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
@mysql_select_db('ONGC');
$query = "INSERT INTO Data
			VALUES ('$ReqNo',2,'$MinLat2','$MaxLat2','$MinLong2','$MaxLong2','$Scale2','$S2d2','$S3d2','$Leas2','$Wells2')";
mysql_query($query);




$MinLat3=$_POST["MinLat3"];
$MaxLat3=$_POST["MaxLat3"];
$MinLong3=$_POST["MinLong3"];
$MaxLong3=$_POST["MaxLong3"];
$Scale3=$_POST["Scale3"];
$S2d3=$_POST["S2d3"];
$S3d3=$_POST["S3d3"];
$Leas3=$_POST["Lease3"];
$Wells3=$_POST["Wells3"];

	$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
@mysql_select_db('ONGC');
$query = "INSERT INTO Data
			VALUES ('$ReqNo',3,'$MinLat3','$MaxLat3','$MinLong3','$MaxLong3','$Scale3','$S2d3','$S3d3','$Leas3','$Wells3')";
mysql_query($query);
mysql_close();
echo "<meta http-equiv=\"refresh\" content=\"0;URL=changes.php\">";
?>
























</body>
</html>