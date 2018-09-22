<?php
include("db.php");			
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

<body>

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
                        <a href="index.php">Login</a>
                    </li>
                    <li>
                        <a class="active" href="reg.php">Register</a>
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
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/head.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(img/head1.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2></h2>
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
  <div id="bg1">
  <img src="img/silder1.JPG" width="1366px"/>
  </div></div>
<div style="position:absolute; left:38.7%; top:50.2%; font-size:50px; font-family:Verdana, Arial, Helvetica, sans-serif"> 
<h3 style="color:#FFFFFF" >Online Leave Management</h3></div>
 
   



<?php
if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into signup(username,name,password,phone,rollno,year,image)values('$username','$name','$password','$phone','$rollno','$year','$second')");
}
if($insert)
{
?>
  <div style="position:absolute; left:70%;  top:70.2%;"> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Register Sucessfull.........</p></div></div>
<?php
}
else
{
?>
	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Error.....</p></div>

<?php
}
?>



<center><h1 style="color:#999999">Register</h1></center></div>
<br>
<br/>
<div id="reg">
<section name="reg">
    <div class="col-md-6">

              <ul class="list-group list-group-unbordered">
<li class="list-group-item" style="background:url(img/bg_noise.png) ">
<b></b>
    <div class="form-group">
    <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return(validate());">
     <div class="col-sm-6">
      <input type="text" name="username" id="name" class="form-control" placeholder="User ID" required />
   </div>
    
  <br/>
  <br/>
  
     <div class="col-sm-6">
      <input type="text" name="name" id="textfield2" class="form-control" placeholder="Name" required/>
    </div>
    <br/>
  <br/>
     <div class="col-sm-6">
      <input type="password" name="password" id="textfield3" class="form-control" placeholder="Password" required/>
   </div>
<br/>
  <br/>
   
   <div class="col-sm-6">
      <input type="text" name="phone" id="textfield4" class="form-control" placeholder="Phone No" required/>
   </div><br/>
  <br/>
    <div class="col-sm-6">
      <input type="text" name="rollno" id="textfield5" class="form-control"b placeholder="Roll No" required/>
  </div><br/>
  <br/>
     <div class="col-sm-6">
      <select name="year" id="select2" class="form-control" placeholder="Bsc CS" required>
      <option>Select</option>
      <option>Bsc Cs 1st Year</option>
      <option>Bsc Cs 2nd Year</option>
      <option>Bsc Cs 3rd Year</option>
      <option>Others</option>
      </select>
   </div><br/>
  <br/>
    <div class="col-sm-4">
      <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" required/>
   </div><br/>
  <br/>
    
    <td>&nbsp;</td>
    <td> <div class="col-sm-6">
      <input class="btn btn-primary" type="submit" name="button" id="button" value="Signup" /></div>
    </form></div></div>
   </center>
</div></div></section></li></ul></div>


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
