<?php 
session_start(); 
$_SESSION['pagename'] = "index-main";
include 'db/pushhits.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>craigcoleman.com</title>
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/cwc.custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  <!-- home menu -->
	  <nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
			<a href = "http://www.veteransairlift.org/" target = "_blank" ><img src = "img/vac.png"></a>  
		</div>
	<div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="http://craigcoleman.com">Home</a></li>
			<li><a href="snow/" target = "_blank">sun&snow</a></li>
			<li><a href="https://craigcoleman.github.io" target = "_blank">cc.github.io</a></li>
				<li><a href="wootenjrgrangecamp/" target = "_blank">wooten jr grange camp </a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">57-111001<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="http://111001.cc" target - "_blank">111001.cc</a></li>
					<li><a href="http://www.111001.cc">www.111001.cc</a></li>    				
				</ul>
			</li>
		</ul>
    </div>
  </div> 
</nav>
<! -- end nav (i think) -->
<center>
<iframe src = "intro.html" name = "main" width = "1000" height = "400" frameborder="0" scrolling = "auto"></iframe>
<table><tr>
	<td><img src = "imagesjs/feet.jpg"  height = "100"></td><td>
This was an Epic day. <br />
Grinnell Glacier - Glacier National Park<br /> 
Montana - USA <br />
Thanks Bec!<br />
</td>

<td><img src = "imagesjs/hands.jpg"  height = "100"></td></tr></table>



 <div class="container">
		

 <button type="button" class="btn btn-primary btn-md">VAC</button>
  </a>
 <!-- -->
<a href = "stream/"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">stream</button>
  </a>
 <!-- -->
<a href = "linux/"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">linux</button>
  </a>
 <!-- -->
<a href = "math/"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">math</button>
  </a>
 <!-- -->
<a href = "/3d"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">3D</button>
  </a>
 <!-- --> 
<a href = "fractals/"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">fractals</button>
  </a>
 <!-- --> 
<a href = "java/"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">java</button>
  </a>
 <!-- --> 
<a href = "http://wa-appliedmath.org"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">WAMC</button>
  </a>
 <!-- --> 
<a href = "contact.html" target = "_blank">
 <button type="button" class="btn btn-primary btn-md">contact</button>
  </a>
 <!-- --> 
  
</div>



</center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
