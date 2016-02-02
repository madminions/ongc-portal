<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONGC Requisition form</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
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

<!------------------------------------------------------------------------------------------------------------------------------->
<div id="contentWrap">

<link rel="stylesheet" type="text/css" href="1.css"/>



<div align="center">
  <h1>EPINET , ONGC Dehradun</h1>
  <h1>DATA/SERVICE REQUISITION FORM</h1>
</div>
  	<div>
  	  <h3 align="left">REQUISITION No. : <?php  session_start();
	  $ReqNo=time()-date("d");
	  $_SESSION['varname'] = $ReqNo;
	  echo $ReqNo;
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






<form action="insert.php" method="post">
<table width="1197" height="218" border="1">
  <tr>
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
    <td width="55" rowspan="2"><div align="center">Lease</div></td>
    <td width="46" rowspan="2"><div align="center">Walls</div></td>
  </tr>
  <tr>
    <td width="144" height="23"><div align="center">2D</div></td>
    <td width="144"><div align="center">3D</div></td>
  </tr>
  <tr>
    <td height="45">
	<?php
	/*$l="localhost";
	$r="root";
	$u="md";
	mysql_connect($l,$r,$u);
	@mysql_select_db('ONGC');
	$querySr = "Select max(SrNo) from Data";
	$result=mysql_query($querySr);
	global $a;
	$a=mysql_result($result,0);
	echo $a+1;
	
	mysql_close();
	
	*/
	echo 1;
	?>
	&nbsp;</td>
    <td> <input type="text" name="MinLat1"/>&nbsp;</td>
    <td> <input type="text" name="MaxLat1"/>&nbsp;</td>
    <td> <input type="text" name="MinLong1"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong1"/>&nbsp;</td>
    <td> <input type="text" name="Scale1"/>&nbsp;</td>
    <td> <input type="text" name="S2d1"/>&nbsp;</td>
    <td> <input type="text" name="S3d1"/>&nbsp;</td>
    <td> <select  name="Lease1">
				<option value="pel">PEL</option>
				<option value ="ml">ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells1">
			<option value="y">Y</option>
			<option value ="n">N</option>
		</select>&nbsp;</td>
  </tr>
  <tr>
  <td height="45"> <?php echo 2 ?>&nbsp;</td>
  <td height="45"> <input type="text" name="MinLat2"/>&nbsp; </td>
    <td> <input type="text" name="MaxLat2"/>&nbsp;</td>
    <td> <input type="text" name="MinLong2"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong2"/>&nbsp;</td>
    <td> <input type="text" name="Scale2"/>&nbsp;</td>
    <td> <input type="text" name="S2d2"/>&nbsp;</td>
    <td> <input type="text" name="S3d2"/>&nbsp;</td>
    <td> <select  name="Lease2">
				<option value="pel">PEL</option>
				<option value ="ml">ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells2">
			<option value="y">Y</option>
			<option value ="n">N</option>
		</select>&nbsp;</td>
  </tr>
  <tr>
<td height="45"><?php echo 3 ?>&nbsp;</td>
    <td> <input type="text" name="MinLat3"/>&nbsp;</td>
     <td> <input type="text" name="MaxLat3"/>&nbsp;</td>
    <td> <input type="text" name="MinLong3"/>&nbsp;</td>
    <td> <input type="text" name="MaxLong3"/>&nbsp;</td>
    <td> <input type="text" name="Scale3"/>&nbsp;</td>
    <td> <input type="text" name="S2d3"/>&nbsp;</td>
    <td> <input type="text" name="S3d3"/>&nbsp;</td>
    <td> <select  name="Lease3">
				<option value="pel">PEL</option>
				<option value ="ml">ML</option>
			</select>		
			
&nbsp;</td>
    <td><select name="Wells3">
			<option value="y">Y</option>
			<option value ="n">N</option>
		</select>&nbsp;</td>
  </tr>
</table>





<input type="submit" value="Submit">
<a href="index.php">
<input type="button" name="cancel" value="Cancel" />
</a>
</form>
</form>
</div>

<!--------------------------------------------------------------------------------------------------------------------------------->

<body>

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
   </ul>
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

