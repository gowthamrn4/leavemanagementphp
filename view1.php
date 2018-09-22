<?php
include("db.php");
if($_GET['edit'])
{
$insert=mysql_query("update letter set status=1 where name='".$_GET['edit']."'");
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  
<title><?php echo $view['name'];?></title>

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
                        <a  class="active" href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="reg.php"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
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
                    <h2>Online Leave Management</h2>
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
  <div style="position:absolute; left:25.7%; top:63.2%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <li ><a style="color:#666666" href="home.php">Home</a></li>
   <li ><a style="color:#666666" href="leave.php">Leave</a></li>
   <li class="active"><a style="color:#666666" href="view.php">View Letters</a></li>
   <li ><a style="color:#666666" href="notification.php">Notification</a></li>
  
   <li><a style="color:#666666" href="logout.php">Log Out</a></li>
</ul>

<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<font size="+2" >
 <center>
<h><?php echo $view['time'];?></h>Sender(<h><?php echo $view['userid'];?>)</h>
<p>&nbsp;</p>
<center>
<div class="letter">
<table width="500" height="500" >
  <tr>
    <td width="77">Form</td>
    <td width="418">&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><font size="+1"><?php echo $view['name'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['class'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['rollno'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>To</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Head.Of.The.Department</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Computer Science</font></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>Sir/Madam</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Sub</td>
    <td><font size="+1"><?php echo $view['sub'];?></font></td>
  </tr>
  <tr>
    <td height="83">&nbsp;</td>
    <td><font size="+1"><?php echo $view['reason'];?></font></td>
  </tr>
  <tr>
    <td height="57">&nbsp;</td>
    <td align="center"><font size="+1">Thanking You</font></td>
  </tr>
  <tr>
    <td height="51">&nbsp;</td>
    
  </tr>
</table></center>
</div>


<br/>
<br/>
 
    
   

    
</div>
<br/>
<br/>

</div>


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
			  $username=$_SESSION['uname'];
$sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>

<li class="list-group-item" style="background:url(img/bg_noise.png)">
                  <b>Photo</b> <a class="pull-right" style="background:#999999"> <img class="img-rounded" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</a><br/>
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
