<?php
include("db.php");
if($button)
{
$insert=mysql_query("insert into show(name,status)values('$name','$status')");
}
if($insert)
{
echo"hi";
}
else
{
echo"error";
}
?>

<table width="500">
  <tr>
    <td>Name</td>
    <td><form name="form1" method="post" action="">
      <input type="text" name="name" id="textfield" value="<?php echo $name;?>">
   
    </td>
  </tr>
  <tr>
    <td>Status</td>
    <td>
      <input type="text" name="status" id="textfield2" value="<?php echo $status;?>">
   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit">
    </form>
    </td>
  </tr>
</table>
