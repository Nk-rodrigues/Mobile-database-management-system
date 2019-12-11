<?php 
session_start();

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>
<body class="background">
    <?php
    include 'style.css' ;
    //var_dump($_REQUEST);
    $brands = array("APPLE","GOOGLE","SAMSUNG","LG","BLACKBERRY","HUWAEI","LENOVO","ONEPLUS","VIVO","XIAOMI","NOKIA","XOLO","SONY","ACER","ASUS","HTC","VODAFONE","HP","MICROSOFT","RAZER","MOTOROLA");
    $brand_option = (int)$_REQUEST['option1'];
    
    $e=array(8,6,4,12,5,4,0,2,0);
    $brand = $brands[$brand_option-1];
    //var_dump($price_range);
    /*$servername = "localhost:3306";
    $username = "root";
    $password = "";
 
 // Create connection
    $conn = new mysqli($servername, $username, $password);
 
 // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully to mysql";
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #$name = test_input($_POST["name"]);
    #$email = test_input($_POST["email"]);
    #$website = test_input($_POST["website"]);
    #$comment = test_input($_POST["comment"]);
    #$gender = test_input($_POST["gender"]);
    }
 
     function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } */
    ?>
	<div id="aa" style="white-space:nowrap">
   	  <div id="image" style="display:inline;">
        <img src="icon.png"/>
      </div>
      <div id="texts" style="display:inline; white-space:nowrap;">SMARTPHONE FINDER</div>
      <div id="texts" style="display:inline; float:right; font-size:30px">BRAND NAME-
      <?php echo $brand;?>
      </div>
     </div>
     
     <h4 align=center><a href="login.php" style="font-family : Nexa Bold;text-align:center;font-size:15px;color:#D8D8D8;position:relative;top:-10;left:10;">Not satified? Try changing your budget here</a></h4>
    
      <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=mobiledb", 'root', '');
        // execute the stored procedure
        $sql = 'select model_id,model_name,price,img from model where brand_name = :brand  order by price';
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);        
        $r =$stmt->execute();
        $models = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($models);
        //var_dump($models[9]['model_name']);
       // while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
       //     $data = $row[0] . ":" . $row[1]  . "\n";
        //    print $data;
          //  var_dump($data);
        //}
        
       /* if($uid > 0) {
            $username = $_REQUEST['uname'];
            
        }*/
        //var_dump($uid);
        // execute the second query to get values from OUT parameter
        //var_dump($r);
    } catch (PDOException $pe) {
        die("Error occurred:" . $pe->getMessage());
    }

 ?>
    
    <?php $img='<img src="x31_.png" width="19.2%" height="50%">';
          $img2='<div style="position:relative;float:left;width:19.2%; font-size:90%; text-align:center;box-sizing:border-box;"><img src="x31_.png" alt="picture"   />';
          $img3='</div>';
    ?>
    
    <form action="specifications.php" method="post">
   <div style="position: relative;left:10;"> 
   
   <?php
      $start=0;
      while($brand="APPLE") {
          echo $img2;
          echo '<img src="' . $models[$start]['img'] . '"  style="position:absolute;top: 50px;left: 58px;z-index:10; width:172px; height:215px;">';
          $btn=$models[$start]['model_id'];
          $mod=$models[$start]['model_name'].'(Rs.'.$models[$start]['price'] . ')';
          echo '<input id="' .$btn. '" type="submit" name="' .$btn. '" value="' . $mod . '" style="position:absolute;top: 300px;left: 85px;text-align:center;z-index: 10000000; color:blue;">';
          //echo $models[$start]['model_name'].'(Rs.'.$models[$start]['price'] . ')';
          //echo '</p>';
          echo $img3;
          $start += 1;
      }
   ?>
   <!-- <img src="x31_.png" width="19.2%" height="50%">
    
    <?php //echo $img;echo $models[0]['model_name'].'(Rs.'.$models[0]['price'] . ')'; ?> 
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    
  
   </div>
   <div style="position: relative;left:10;">
   <div style="position:relative;float:left;width:19.2%; font-size:80%; text-align:center;box-sizing:border-box;">
       <img src="x31_.png" alt="picture"  style="padding-bottom:0.5em;" />This is my caption</div>
       <div style="position:relative;float:left;width:19.2%; font-size:80%; text-align:center;box-sizing:border-box;">
       <img src="x31_.png" alt="picture"  style="padding-bottom:0.5em;" />This is my caption2</div>
   
    </div>
    <div>
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    <img src="x31_.png" width="19.2%" height="50%">
    </div>
    
    
    --> 
    </div>
    </form>
</body>
</html>
