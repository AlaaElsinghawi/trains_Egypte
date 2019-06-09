<?php
include 'createDB.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
<style type="text/css">
 
  #container
  {
   
  text-align: center;



  }
  #fr
  {
    padding: 40px;
  }
  .in
  {
    margin:20px;
    
    width: 400px;
  height: 40px;
border : 2px solid black;
font-size :20px;
text-align: right;

  }
  #se
  {
margin: 20px;
border : 2px solid black;
width: 200px;
height:40px;
font-size :15px;
text-align: right;

  

  }
 


  #bt
  {
height: 40px;
background:  #999 ;
margin: 20px;
 border : 2px solid black;
    
    width: 300px;
    color:white;
    font-size:25px;
  }
#end 
{
  
  height: 75px;
  text-align: right;
  color: #999;
}
#final
{ padding: 10px;
font-size :12px; }
</style>
</head>
<body>

   <div id="container">
    <form id="fr" action="tr.php" method="post" id="main">
         محطه المغادره<input  class ="in" id ="t2"  type="text" name="txt2"  >
      <br>
      محطه الوصول<input class ="in"  id ="t1" type="text"  name="txt1">
      <br>
      <select  id ="se" name="sel">
         <option  value="الكل">
        الكل

      </option>

     
       <option value="مكيف">
        مكيف
      </option>
       
       
       <option  value="vip">
       vip
      </option >

      <option  value="مميز">

       مميز

      </option>
      <option  value="ركاب">
        ركاب
      </option>
      
      </select>
      <br>
      <input id ="bt" type="submit" value="عرض " name="submit" >
     </div>
 

  </form>
  
</body>
</html>
