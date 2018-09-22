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


<section class="content">

      <div class="row" style="background:url(img/bg_noise.png)">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
   

              <h3 class="profile-username text-center" style="color:#FFFFFF"> <?php echo $row['name']; ?>
</h3>

              <p class="text-muted text-center" style="color:#FFFFFF"> <?php echo $row['year']; ?>
</p>
              <ul class="list-group list-group-unbordered">

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
                <li class="list-group-item" style="background:url(img/bg_noise.png)">
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
   <li class="active"><a style="color:#666666" href="leave.php">Leave</a></li>
   <li><a style="color:#666666" href="view.php">View Letters</a></li>
         <li ><a style="color:#666666" href="Message1.php">Message</a></li>

   <li><a style="color:#666666" href="notification.php">Older Message</a></li>
   
   <li><a style="color:#666666" href="logout.php">Log out</a></li>
</ul>

</div>
<center>
<div class="form-group">
             <div class="col-sm-6">
             <table align="center">
               <tr> <form name="form1" method="post" action="" enctype="multipart/form-data">
  <td> <input type="hidden" name="username" id="textfield"  placeholder="Userid" required  class="form-control" value="<?php echo $_SESSION['uname']; ?>"></td>
   </div></tr>
   <tr>
   <td>&nbsp;</td>
   </tr>
                <div class="col-sm-2">
      <tr>          
    <td> Name: </td><td><input type="text" name="name" id="textfield"  placeholder="Name" required  class="form-control">
   </div></td>
 </tr>
    <div class="col-sm-2">
    <tr>
    <td> Roll No </td><td><input type="text" name="rollno" id="textfield2"  placeholder="Roll No" required  class="form-control"></td>
    </tr>
  </div>
  
  <div class="col-sm-2">
    <tr><td>Class</td>
    <td><select name="class">
    <option>Cs1ndYear</option>
    <option>Cs2ndYear</option>
    <option>Cs3rdYear</option>
    <option>Others</option>
    </select></td>
    </tr>
    </div>
  
  <div class="col-sm-4">
     <tr>
    <td>&nbsp;</td><td> <input type="hidden" name="image" id="image" tabindex="3" class="form-control" value="<?php echo $row['image']; ?>" enctype="multipart/form-data"    required/></td></tr>
   </div>
   <div class="col-sm-4">
      <tr>
      <td>Leave Start Date</td><td><input type="text" name="leavesd" id="textfield3"  placeholder="2019/11/02" required  class="form-control"></td>
      </tr>
   </div>
   
   <div class="col-sm-4">
      <tr>
      <td>Leave End Date</td><td><input type="text" name="leaveed" id="textfield3"  placeholder="2019/11/02" required  class="form-control"></td>
      </tr>
   </div>
   
    
    <div class="col-sm-4">
      <tr>
      <td>Sub:</td><td><input type="text" name="sub" id="textfield3"  placeholder="Sub" required  class="form-control"></td>
      </tr>
   </div>
   
   <div class="col-sm-2">
     <tr><td> Reason:</td><td><textarea name="reason" id="textarea" cols="45" rows="5"  placeholder="Reason.........................." required  class="form-control"></textarea>
 </td></tr> </div>
   <div class="col-sm-2">
  <tr>
  <td> <input type="hidden" name="time" id="textfield3"  placeholder="Sub" required  class="form-control" onClick="date()">
   </td></tr></div>
  
      <tr>
      <td><input type="submit" name="button" id="button" value="Submit" size="100" ></td>
      </tr>
    </form>
    </table>
    </div>
    
</div>


 <br/>
 <br/>
<?php
$username=$_SESSION['uname'];
if($button)
		{
		$insert=mysql_query("insert into letter(username,name,rollno,class,image,leavesd,leaveed,sub,reason,time,status)values('$username','$name','$rollno','$class','$image','$leavesd','$leaveed','$sub','$reason','$time','$status')");
		
		}
		if($insert)
{
?>

  <div style="position:absolute; left:70%;  top:50.2%;"> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Register Sucessfull.........</p></div></div>
<?php
}
else
{
?>  <div style="position:absolute; left:60%;  top:50.2%;  "> 

	     <div class="alert alert-danger" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Error.....</p></div></div>

<?php
}
?>

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
