<html>
<body>


<?php
session_start();

	$ReqNo = $_SESSION['r'];
	$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
	@mysql_select_db('ONGC');


	if(isset($_POST['first'])) 
	{		
			$sql = "DELETE FROM Data WHERE SrNo='1' and ReqNo='$ReqNo'";
			mysql_query($sql);
		 
	}
	
	if(isset($_POST['second'])) 
	{		
			$sql = "DELETE FROM Data WHERE SrNo='2' and ReqNo='$ReqNo'";
			mysql_query($sql);
		 
	}
	
	if(isset($_POST['third'])) 
	{		
			$sql = "DELETE FROM Data WHERE SrNo='3' and ReqNo='$ReqNo'";
			mysql_query($sql);
		 
	}



 //if successful redirect to delete_multiple.php 

echo "<meta http-equiv=\"refresh\" content=\"0;URL=changes.php\">";



mysql_close();
?>





</body>
</html>