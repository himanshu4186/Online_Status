<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>History</title>
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
     document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","gettime.php",true);
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
	<div class="container-fluid">
	
	<br>
	 <div id="myDiv2"></div>
	
	</div>
</body>

</html>