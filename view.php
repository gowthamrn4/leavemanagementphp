<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
$status=1;
	$time = date("j n   Y, \a\\t g.i a", time());
	?>
	
		
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?php echo @$_SESSION['uname']; ?></title>

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
                        <a  class="active" href="home.php">Home</a>
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
  <img src="img/silder1.JPG" width="1366px"/>
  </div>
<div style="position:absolute; left:38.7%; top:50.2%; font-size:50px; font-family:Verdana, Arial, Helvetica, sans-serif"> 
<h3 style="color:#FFFFFF" >Online Leave Management</h3></div>


<section class="content">

      <div class="row" style="background:url(img/bg_noise.png)">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
   

              <h3 class="profile-username text-center" style="color:#FFFFFF"> <?php echo $row['name']; ?>
</h3>

              <p class="text-muted text-center" style="color:#FFFFFF"> <?php echo $row['year']; ?>
</p>
              <ul class="list-group list-group-unbordered" style="background:url(img/bg_noise.png)">

<li class="list-group-item" style="background:url(img/bg_noise.png)">
                  <b>Photo</b> <a class="pull-right"> <img class="img-rounded" src="<?php 

echo $row['image']; ?>" alt="User profile picture" width="100" height="100">
</a><br/>
<br/>
<br/>
<br/>
<br/>

                <li class="list-group-item">
                  <b>Roll No</b> <a class="pull-right"> <?php echo $row['rollno']; ?>
</a>
                </li>
                <li class="list-group-item">
                  <b>Phone No</b> <a class="pull-right"> <?php echo $row['phone']; ?>
</a>
                </li>
                
                </li>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"> <?php echo $row['sex']; ?>
</a>
                </li>
                </li>
                <li class="list-group-item">
                  <b>Date Of birth</b> <a class="pull-right"> <?php echo $row['bdate']; ?>
</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        

             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        





  <div style="position:absolute; left:25.7%; top:63.2%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <li ><a style="color:#666666" href="home.php">Home</a></li>
   <li ><a style="color:#666666" href="leave.php">Leave</a></li>
   <?php
$select=mysql_query("select * from letter where username='".$username."' ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="view.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#FF9900" class="badge bg-green"><?php echo $view;?> </span>View Letters</a></li>
         <li ><a style="color:#666666" href="Message1.php">Message</a></li>

   <li><a style="color:#666666" href="notification.php">Older Message</a></li>
  
      <ul class="dropdown-menu">
         <li><a style="color:#CCCCCC" href="#">Swing</a></li>
         <li><a href="#">jMeter</a></li>
         <li><a href="#">EJB</a></li>
         <li class="divider"></li>
         <li><a href="#">Separated link</a></li>
      </ul>
   </li>
   <li><a style="color:#666666" href="logout.php">Logout</a></li>
</ul>
<center><div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">View Letter</h3>
   </div>
   <div class="panel-body">
<table class="table table-hover">

<table width="571" height="100" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <td width="54" height="45">No</td>
    <td width="200">Sub</td>
    <td width="171">Time</td>
    <td width="134">ACTION</td>
  </tr></div>
 <?PHP
$select=mysql_query("select * from letter where username='".$username."' ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?><div class="table-responsive">

 <tr>
    <td><?php echo mysql_result($select,$i,"no");?></td>
    <td><?php echo mysql_result($select,$i,"sub");?></td>
    <td><?php echo mysql_result($select,$i,"time");?></td>
    <td align="center"><a href="view1.php?edit=<?php echo mysql_result($select,$i,"name");?>">View</a>
  </tr></center>
  <?PHP
  }
  ?>
</table></div></div><div class="panel-footer"></div>
</div>




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
