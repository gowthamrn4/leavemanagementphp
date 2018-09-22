<?php
include("db.php");
if(isset($_POST['button']))
{
$file=mysql_query(" SELECT * FROM signup WHERE username='$username' and password='$password'");
		  $num=mysql_num_rows($file);
		  
		  if($num>0)
		{
$_SESSION['uname']=mysql_result($file,0,"username");

		header("Location:home.php");	
			}
		{
$file1=mysql_query(" SELECT * FROM admin WHERE username='$username' and password='$password' ");

		  $num=mysql_num_rows($file1);
		  if($num>0)
  {
$_SESSION['name']=mysql_result($file1,0,"name");

   header("location:admin\home2.php");
   }	
			
 else
   
			{
				echo"password is incorrect";
}
}	
}		
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leave Letter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

  

</head>

<body background="img/bg_noise.png">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a  class="active" href="index.php">Login</a>
                    </li>
                    <li>
                        <a href="reg.php">Register</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/silder.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2>C.P.A.College</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/head.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2>Computer Science Department</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/head1.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2>Bodinayakanur</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
  <div style="position:absolute;  top:50.2%;"> 
  <img src="img/silder1.JPG" width="1366px"/>
  </div>
<div style="position:absolute; left:38.7%; top:50.2%; font-size:50px; font-family:Verdana, Arial, Helvetica, sans-serif"> 
<h3 style="color:#FFFFFF" >Online Leave Management</h3></div>
 
   <div style="position:absolute; left:30%;  top:70.2%;"> 
<center>
  <section name="#log">
<table width="500" height="141">
  <tr>
    <td width="194">User ID</td>
    <td width="294"><form id="form1" name="form1" method="post" action="">
      <input type="text" name="username" id="textfield" placeholder="UserID" required  class="form-control"/>
   
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
      <input type="password" name="password" id="textfield2" placeholder="Password" required  class="form-control" />
   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" class="btn btn.bg-navy" />
    </form>
    </td>
  </tr>
</table>
</section></center></div></div>







>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
