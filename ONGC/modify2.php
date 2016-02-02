

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



<form action ="modify.php" method="post">
<div align="center">
  <h1>EPINET , ONGC Dehradun</h1>
  <h1>DATA/SERVICE REQUISITION FORM</h1>
</div>
  	<div> 
  	  <h3 align="left">REQUISITION No. : 
	  <input type="text" name="ReqNo" >
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
	

<input type="submit" value="Submit">
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
   </ul>
  </div>
  <p>© Copyright Information Goes Here. All Rights Reserved.</p>
   
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