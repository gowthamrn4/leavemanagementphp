<?php
include("db.php");
$name=$_SESSION['name'];

$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<?php
if($_GET['del'])
{
$delete=mysql_query("delete from letter where name='".$_GET['del']."'");
if($delete>0)
{
header('location:oldl.php');
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
  <title><?php echo @$_SESSION['name']; ?></title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/half-slider.css" rel="stylesheet">

  

</head>

<body background="../img/bg_noise.png">

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
                        <a href="reg.php"></a>
                    </li>
                    <li>
                        <a href="logout.php"><img src="../img/logoff.ico" width="20" height="20"></a>
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
                <div class="fill" style="background-image:url(../img/silder.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(../img/head.jpg); width:1500px; height:500px"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(../img/head1.jpg); width:1500px; height:500px"></div>
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
  <img src="../img/silder1.JPG" width="1366px"/>
  </div>
<div style="position:absolute; left:38.7%; top:50.2%; font-size:50px; font-family:Verdana, Arial, Helvetica, sans-serif"> 
<h3 style="color:#FFFFFF" >Online Leave Management</h3></div>
  <div style="position:absolute; left:25.7%; top:63.2%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <li ><a href="home2.php">Home</a></li>
    
   <li  ><a style="color:#666666" href="leave1.php">Leave</a></li>
   <?php
   $select=mysql_query("select * from letter where status=0");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="oldl.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FF66" class="badge bg-green"><?php echo $view;?> </span>Old Letter</a></li>
   <li ><a style="color:#666666" href="1sty.php">1st Year Leave Letter</a></li>
 
   <li ><a style="color:#666666" href="2ndy.php">2nd Year Leave Letter</a></li>
      <li><a style="color:#666666" href="3rdy.php">3rd Year Leave Letter</a></li>
   <li><a style="color:#666666" href="../logout.php">Logout</a></li>

</ul>


		 <?php
   $select=mysql_query("select * from letter where status=0");
   $view=mysql_num_rows($select);
   
   for($i=0;$i<$view;$i++)
   {
   ?> 
   <div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title"><?php echo mysql_result($select,$i,"class");?></h3>
   </div>
   <div class="panel-body">
  <table width="500" align="center" >
  <tr>
    <td align="center">No</td>
    <td align="center">Name</td>
    <td align="center">Time</td>
    <td align="center">View</td>
    

  </tr>
  <tr>
    <td align="center"><?php echo mysql_result($select,$i,"no");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"name");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"time");?></td>
    <td align="center"><a href="view.php?edit=<?php echo mysql_result($select,$i,"name");?>">View</a>
            <td align="right"><a href="<?php $_SERVER['DOCUMENT_ROOT'];?>?del=<?php echo mysql_result($select,$i,"name");?>"><img src="../img/Close.ico" width="30" height="30"/></a></td>

</td>
  </tr>
</table></div><div class="panel-footer"></div>
</div>


<br/>
<br/>
 
    <?php
	}
	?>
   

    
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
<br/>
<br/>
<br/>
<br/>
 <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
   

              <h3 class="profile-username text-center" style="color:#FFFFFF"> 
</h3>

              <p class="text-muted text-center" style="color:#FFFFFF"> 
</p>
              <ul class="list-group list-group-unbordered">
<?php
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
?>
<li class="list-group-item">
                  <b>Photo</b> <a class="pull-right"> <img class="img-circle" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</a><br/>
<br/>
<br/>
<br/>
<br/>

      
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
        

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
