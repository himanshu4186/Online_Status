<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script>
 function loadXMLDoc()
 {
 var xmlhttp;
 if (window.XMLHttpRequest)
   {
   xmlhttp=new XMLHttpRequest();
   }
 else
   {
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","getdatabase.php",true);
 xmlhttp.send();
 }
 window.setInterval(function(){
   loadXMLDoc();
 }, 1000);

 </script>
</head>

<body>
<?php session_start(); 

if(isset($_SESSION["user"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 600)
           {  
                header("location:logout.php");  
           }  
           else  
           {  
                $_SESSION['last_login_timestamp'] = time();
           }  
      }  
      else  
      {  
           header('location:login.php');  
      }  
?>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					
					<div class="col-lg-12 col-sm-12 col-12 header-top-right">
						<a href="loggedin.php" class="text-uppercase">Home</a>
						<a href="history.php" class="text-uppercase">History</a>
						<a href="logout.php" class="text-uppercase">Logout</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						
					</div>
				</div>
			</div>
		</div>

		
	</header>
	<br>
	<br>
	
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
	
	 <div id="myDiv"></div>
	 </div>
	 
    <div class="col-md-7">
	 <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScWNnDynJuyrHWSOPri8GQufv-yozbKdwJBjx7axe49wpJrSg/formResponse" target="_self" method="POST" id="mG61Hd">
	 
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="First Name" aria-describedby="i.desc.826355120 i.err.826355120" name="entry.2092238618" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Last Name" aria-describedby="i.desc.1710940970 i.err.1710940970" name="entry.751974781" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Email" aria-describedby="i.desc.1149713456 i.err.1149713456" name="entry.1556369182" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="" aria-invalid="true">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Registration no.</label>
    <input type="text" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Registration no." aria-describedby="i.desc.1267111247 i.err.1267111247" name="entry.106086319" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="" aria-invalid="true">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">University</label>
   <input type="text" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="University" aria-describedby="i.desc.1738146785 i.err.1738146785" name="entry.355299863" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
 </div>
</div>
	
</body>

</html>

