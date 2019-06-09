
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
 	<title></title>
 </head>
 <style type="text/css">
  
  #container
  {
  
  text-align: center;
margin-top :20px;


  }
  
table {

  margin-left:450px;
  border: 2px solid red;}
  th {
    height: 35px;
    width: 100px;
    font-size: 18px;
     border: 2px solid red;
    
     color:black;


  }
  
   td {
    height: 35px;
    width: 100px;
    font-size: 15px;
     border: 1px solid red;
     color:black;
     text-align: center;


  }
  a
  {

        font-size: 25px;
        color: black;
        margin-bottom: 10px;

  }
  #bo
  {

 margin-bottom: 10px;
  }

  
</style>
 <body>
  
     
     <?php
include ('database.php');
 $error= [];
 $i=-1;

if($_POST['submit']=="عرض القطارات")
{
	if(!empty($_POST['txt1']))
	{

		$l=$_POST['txt1'];
	}
	else
	{
		$error[++$i]=" ادخل محطه الوصول *";
 
		}
	if(!empty($_POST['txt2']))
	{

		$r=$_POST['txt2'];
	}
	else
	{
		$error[++$i]=" ادخل محطه المغادره *";
	}

	
	if(!empty($error))
	{
    echo "<div id='container'>";
		 echo "<div id='error'>";
		foreach ($error as  $value) {

			echo $value ."<br>";
            


		}
        echo "</div>";
  echo " </div>";
  
	}
	
}






 ?>
      <?php
      $t= $_POST['sel'];
     
     
if($t=="الكل")
{
$q= "SELECT * FROM train WHERE sl = ? AND sr = ?  ";
 $rows=$db->getRows($q,array($_POST['txt2'],$_POST['txt1']));
 
 echo "<div id='container'>";
 echo "<table><tr> <th>النوع</th><th>مرات الوقوف</th> <th>السرعه</th><th>المده</th><th>وقت القيام </th><th>وقت الوصول </th><th>رقم القطار</th></tr>";


   
     

if(count($rows)>0)
{
      foreach($rows as $row)
{

  echo "<tr>
    <td>" . $row['type'] ."</td>
    <td>" . $row['stops'] ."</td>
    <td>" . $row['speed'] ."</td>
    <td>" . $row['duration'] ."</td>
    <td>" . $row['timel'] . "</td>
    <td>" . $row['timer'] . "</td>
    <td>" . $row['t_id'] . "</td>
    </tr>" ;


}
}
else
{
  echo"<tr> <td  colspan='7'> لا يوجد </td></tr>";
}
}
  else
  {
$q= "SELECT * FROM train WHERE sl = ? AND sr = ? AND type=? ";
 $rows=$db->getRows($q,array($_POST['txt2'],$_POST['txt1'],$t));
 
 echo "<div id='container'>";
 echo "<table><tr> <th>مرات الوقوف</th> <th>السرعه</th><th>المده</th><th> وقت المغادره</th><th>وقت الوصول </th><th>رقم القطار</th></tr>";

   
     

if(count($rows)>0)
{
      foreach($rows as $row)
{

  echo "<tr>
    <td>" . $row['stops'] ."</td>
    <td>" . $row['speed'] ."</td>
    <td>" . $row['duration'] ."</td>
    <td>" . $row['timel'] . "</td>
    <td>" . $row['timer'] . "</td>
    <td>" . $row['t_id'] . "</td>
    </tr>" ;


}
}
else
  {
  echo"<tr> <td  colspan='7'>لا يوجد</td></tr>";
}

}
echo "</table>"  ;
echo "</div>";
?>
<div id="container">
  <div id="bo">
 <a href="main.php">الرجوع الي صفحه  العرض</a>
</div>
</div>
  
 </body>
 </html>