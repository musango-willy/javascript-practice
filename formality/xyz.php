<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Welcome to this website <?php echo $row["name"]; ?></h1>
    <form>
  <label> Firstname </label>         
  <input type="text" name="firstname" size="35"/> <br> 
  <label> Middlename: </label>     
  <input type="text" name="middlename" size="35"/> <br>  
  <label> Lastname: </label>         
  <input type="text" name="lastname" size="35"/> <br> 
  <label> REG NO: </label>         
  <input type="text" name="REG NO" size="35"/> <br>
  <label>   
  Course :  
  </label>   
  <select>  
  <option value="Course">Course</option>  
  <option value="BCA">Bsc IT</option>  
  <option value="BBA">Bsc COMPUTER SCIENCE</option>  
  <option value="B.Tech">Bsc ARCHURIAL SCIENCE</option>  
  <option value="MBA">Bsc ECONFINANCE</option>  
  <option value="MCA">MCA</option>  
  <option value="M.Tech">M.Tech</option>  
  </select>  
  <br>  
  <br>  
  <label>   
  Gender :  
  </label><br>  
  <input type="radio" name="male"/> Male <br>  
  <input type="radio" name="female"/> Female <br>  
  <input type="radio" name="other"/> Other  
  <br>  
  <br>  
    
  <label>   
  Phone :  
  </label>  
  <input type="text" name="country code"  value="+254" size="2"/>   
  <input type="text" name="phone" size="10"/> <br> <br>  
  Email:  
  <input type="email" id="email" name="email" require/> <br>    
  <br> <br>   
  <input type="button" value="Submit"/><br><br>  
  </form>  
    <a href="logout.php">Logout</a>
  </body>
</html>
