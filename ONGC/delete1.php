

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONGC Requisition form</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="1.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />
</head>

<body>
<div id="headWrap">
 <div id="headpanel">
  <div id="logo">
    <h1>ONGC-Data Requisition Form</h1></div>
  <div id="quots"></div>
  <div id="menu">
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><div class="gap"></div></li>
    <li><a href="insert1.php">ADD</a></li>
    <li><div class="gap"></div></li>
    <li><a href="modify2.php">UPDATE</a></li>
    <li><div class="gap"></div></li>
    <li><a href="delete2.php">DELETE</a></li>
    <li><div class="gap"></div></li>
    <li><a href="www.ongcindia.com">Website</a></li>
    <li><div class="gap"></div></li>
    <li><a href="#">Solution</a></li>
    <li><div class="gap"></div></li>
    <li><a href="#">Testimonial</a></li>
    <li><div class="gap"></div></li>
    <li><a href="#">Contact Us</a></li>
   </ul>
  </div>
 </div>
</div>




<!------------------------------------------------------------------------------------------------------->
<div id="contentWrap">

<div align="center">
  <h1>EPINET , ONGC Dehradun</h1>
  <h1>DATA/SERVICE REQUISITION FORM</h1>
</div>
  	<div> 
  	  <h3 align="left">REQUISITION No. : 
	  <?php $ReqNo=$_POST["ReqNo"];
		session_start();
	  $_SESSION['r'] = $ReqNo;
	  echo $ReqNo ; 
	  ?>
	  <br />
  	    
  	    
      </h3>
	  <h3 align="left">EPINET SITE   
  	    <input type="text" />
  	</h3>
  	</div>
	
	
	
	<!Date >
	
	
	
	
	<div align ="right" id="right">
	
	<h2> Date :
		<?php
		echo date("d-m-Y");
		?>
	</h1>
	</div>
	
	
	
	
	
	
	
<! Here starts the form>





<form action="delete.php" method="post">
<table width="1238" height="218" border="1">
  <tr>
    <td width="28" rowspan="3">Delete</td>
    <td width="28" rowspan="3"><div align="center">Sr .No.</div></td>
    <td colspan="4"><div align="center">Boundary</div></td>
    <td width="144" rowspan="3"><div align="center">Scale</div></td>
    <td colspan="4"><div align="center">Data Type</div></td>
  </tr>
  <tr>
    <td width="144" rowspan="2"><div align="center">Min Lat</div></td>
    <td width="144" rowspan="2"><div align="center">Max Lat</div></td>
    <td width="144" rowspan="2"><div align="center">Min Long</div></td>
    <td width="144" rowspan="2"><div align="center">Max Long</div></td>
    <td colspan="2"><div align="center">Sciesmic</div></td>
    <td width="58" rowspan="2"><div align="center">Lease</div></td>
    <td width="46" rowspan="2"><div align="center">Walls</div></td>
  </tr>
  <tr>
    <td width="144" height="23"><div align="center">2D</div></td>
    <td width="144"><div align="center">3D</div></td>
  </tr>
  <tr>
    <td><input name="first" type="checkbox" id="first" value="<? echo 1 ?>">&nbsp;</td>
    <td height="45">

	<?php
	$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
	@mysql_select_db('ONGC');

	echo 1;
	 
	  //$_SESSION['a'] = $a;
	
		for($j=0;$j<3;$j++)
		{
		$NLatr[$j]=NULL;
		$MLatr[$j]=NULL;
		$NLongr[$j]=NULL;
		$MLongr[$j]=NULL;
		$Scaler[$j]=NULL;
		$S2dr[$j]=NULL;
		$S3dr[$j]=NULL;
		$Leaser[$j]=NULL;
		$Wellsr[$j]=NULL;
		}
		
	
	$queryRow1="Select * from Data where ReqNo='$ReqNo' and SrNo=1 ";
	$result2=mysql_query($queryRow1);

	if($result2){
	while ($data2 = mysql_fetch_assoc($result2))
	{$i=0;
	$NLatr[$i]=$data2["MinLat"];
	$MLatr[$i]=$data2["MaxLat"];
	$NLongr[$i]=$data2["MinLong"];
	$MLongr[$i]=$data2["MaxLong"];
	$Scaler[$i]=$data2["Scale"];
	$S2dr[$i]=$data2["Seis2d"];
	$S3dr[$i]=$data2["Seis3d"];
	$Leaser[$i]=$data2["Lease"];
	$Wellsr[$i]=$data2["Wells"];
	}
	}if($NLatr[0]==NULL){ $NLatr[0]="deleted";$MLatr[0]="row";}
	
		$queryRow1="Select * from Data where ReqNo='$ReqNo' and SrNo=2 ";
	$result2=mysql_query($queryRow1);

	while ($data2 = mysql_fetch_assoc($result2))
	{$i=1;
	$NLatr[$i]=$data2["MinLat"];
	$MLatr[$i]=$data2["MaxLat"];
	$NLongr[$i]=$data2["MinLong"];
	$MLongr[$i]=$data2["MaxLong"];
	$Scaler[$i]=$data2["Scale"];
	$S2dr[$i]=$data2["Seis2d"];
	$S3dr[$i]=$data2["Seis3d"];
	$Leaser[$i]=$data2["Lease"];
	$Wellsr[$i]=$data2["Wells"];
	}if($NLatr[1]==NULL){ $NLatr[1]="deleted";$MLatr[1]="row";}
	
		$queryRow1="Select * from Data where ReqNo='$ReqNo' and SrNo=3 ";
	$result2=mysql_query($queryRow1);

	while ($data2 = mysql_fetch_assoc($result2))
	{$i=2;
	$NLatr[$i]=$data2["MinLat"];
	$MLatr[$i]=$data2["MaxLat"];
	$NLongr[$i]=$data2["MinLong"];
	$MLongr[$i]=$data2["MaxLong"];
	$Scaler[$i]=$data2["Scale"];
	$S2dr[$i]=$data2["Seis2d"];
	$S3dr[$i]=$data2["Seis3d"];
	$Leaser[$i]=$data2["Lease"];
	$Wellsr[$i]=$data2["Wells"];
	}if($NLatr[2]==NULL){ $NLatr[2]="deleted";$MLatr[2]="row";}

	mysql_close();
	?>

	&nbsp;</td>
    <td><input type="text" name="MinLat1" value="<?php echo $NLatr[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MaxLat1" value="<?php echo $MLatr[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MinLong1" value="<?php echo $NLongr[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong1" value="<?php echo $MLongr[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="Scale1" value="<?php echo $Scaler[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S2d1" value="<?php echo $S2dr[0];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S3d1" value="<?php echo $S3dr[0]; ?>"/>&nbsp;</td>
    <td> <select  name="Lease1" >
				<option value="pel"  <?php if($Leaser[0] == "pel") echo 'selected="selected"'; ?> >PEL</option>
				<option value ="ml"  <?php if($Leaser[0] == "ml") echo 'selected="selected"'; ?> >ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells1">
			<option value="y" <?php if($Wellsr[0] == "y") echo 'selected="selected"'; ?> >Y</option>
			<option value ="n" <?php if($Wellsr[0] == "n") echo 'selected="selected"'; ?>  >N</option>
		</select>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td><input name="second" type="checkbox" id="second" value="<? echo 2 ?>">&nbsp;</td>
  <td height="45"> <?php echo 2 ?>&nbsp;</td>
  <td height="45"> <input type="text" name="MinLat2" value="<?php echo $NLatr[1];  ?>"/>&nbsp; </td>
    <td> <input type="text" name="MaxLat2" value="<?php echo $MLatr[1];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MinLong2" value="<?php echo $NLongr[1];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong2" value="<?php echo $MLongr[1];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="Scale2" value="<?php echo $Scaler[1];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S2d2" value="<?php echo $S2dr[1];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S3d2" value="<?php echo $S3dr[1];  ?>"/>&nbsp;</td>
    <td> <select  name="Lease2">
				<option value="pel" <?php if($Leaser[1] == "pel") echo 'selected="selected"'; ?> >PEL</option>
				<option value ="ml" <?php if($Leaser[1] == "ml") echo 'selected="selected"'; ?> >ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells2">
			<option value="y" <?php if($Wellsr[1] == "y") echo 'selected="selected"'; ?>>Y</option>
			<option value ="n" <?php if($Wellsr[1] == "n") echo 'selected="selected"'; ?>>N</option>
		</select>&nbsp;</td>
  </tr>
  
  
  
  
  <tr>
    <td><input name="third" type="checkbox" id="third" value="<? echo 3 ?>">&nbsp;</td>
<td height="45"><?php echo 3 ?>&nbsp;</td>
    <td> <input type="text" name="MinLat3" value="<?php echo $NLatr[2];  ?>"	/>&nbsp;</td>
     <td> <input type="text" name="MaxLat3" value="<?php echo $MLatr[2];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MinLong3" value="<?php echo $NLongr[2];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong3" value="<?php echo $MLongr[2];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="Scale3" value="<?php echo $Scaler[2];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S2d3" value="<?php echo $S2dr[2];  ?>"/>&nbsp;</td>
    <td> <input type="text" name="S3d3" value="<?php echo $S3dr[2];  ?>"/>&nbsp;</td>
    <td> <select  name="Lease3">
				<option value="pel" <?php if($Leaser[2] == "pel") echo 'selected="selected"'; ?> >PEL</option>
				<option value ="ml"  <?php if($Leaser[2] == "ml") echo 'selected="selected"'; ?> >ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells3">
			<option value="y" <?php if($Wellsr[2] == "y") echo 'selected="selected"'; ?>>Y</option>
			<option value ="n" <?php if($Wellsr[2] == "n") echo 'selected="selected"'; ?>>N</option>
		</select>&nbsp;</td>
  </tr>
</table>





<input type="submit" value="Submit"><a href="index.php">

<a href="index.php">
<input type="button" name="cancel" value="Cancel" />
</a>

</form>



</form>
</div>
<!------------------------------------------------------------------------------------------------------------------>




<div id="footWrap">
 <div id="footPanel">
  <div id="footNav">
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="insert1.php">ADD</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="modify2.php">UPDATE</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="delete2.php">DELETE</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="www.ongcindia.com">Website</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="#">Solution</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="#">Testimonial</a></li>
    <li><div class="blank">|</div></li>
    <li><a href="#">Contact Us</a></li>
  </div>
  <p>� Copyright Information Goes Here. All Rights Reserved.</p>
 
  <div id="validation">
   <ul>
    <li><a href="http://validator.w3.org/check?uri=referer">xhtml</a></li>
    <li><div class="blank"></div></li>
    <li><a href="http://jigsaw.w3.org/css-validator/check/referer">css</a></li>
   </ul>
  </div>
 </div>
</div>
</body>
</html>
