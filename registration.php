
<?php

$name = '';
$password = '';
$gender = '';
$color =  '';
$languages = [];
$comment = '';
$tc = '';
 if(isset($_POST["submit"])){
     $ok = true;

    if(!isset($_POST['name']) || $_POST['name'] ===''){
        $ok = false;    
    }else{
        $name = $_POST['name'];
    }


    if(!isset($_POST['password']) || $_POST['password'] ==='' ){
        $ok = false;     
    }else{
        $password = $_POST['password'];
    }


    if(!isset($_POST['gender']) || $_POST['gender'] ==='' ){
        $ok=false;       
    }else{
        $gender = $_POST['gender'];
    }


    if(!isset($_POST['color']) || $_POST['color'] ===''){
        $ok = false;
    }else{
        $color = $_POST['color'];
    }


    if(!isset($_POST['languages']) || !is_array($_POST['languages'])  
    || count($_POST['languages']) === 0){
        $ok=false;
    }else{
        $languages = $_POST['languages'];
    }


    if(!isset($_POST['comment']) || $_POST['comment'] ===''){
        $ok=false;
    }else{
        $comment = $_POST['comment'];
    }


    if(!isset($_POST['tc']) || $_POST['tc'] ===''){
        $ok = false;
    }else{
        $tc = $_POST['tc'];
    }

    if($ok){
            echo "Username: " . htmlspecialchars($name);
            echo "<br>Password: " . htmlspecialchars($password);
            echo "<br>Gender: " . htmlspecialchars($gender);
            echo "<br>Color: " . htmlspecialchars($color);
            echo "<br>Languages: " . htmlspecialchars(implode(' ',$languages));
            echo "<br>Comment: " . htmlspecialchars($comment);
            echo "<br>T&C: " . htmlspecialchars($tc);
    }

     


 }


?>
<form method="post">
  Username: <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES);?>"><br>
  Password: <input type="password" name="password"><br>
  Gender : 
        <input type="radio" name="gender" value="male"<?php 
            if($gender==='male'){
                echo " checked";
            }
        ?>> male
        <input type="radio" name="gender" value="female"<?php 
            if($gender==='female'){
                echo " checked";
            }
        ?>> female<br>

  Select Colour:
   <select name="color">
   <option value="">Select color</option>
        <option value="red"<?php 
            if($color === "red"){
                echo " selected";
            }?>>Red</option>
        <option value="green" <?php 
            if($color === "green"){
                echo " selected";
            }?>>Green</option>
        <option value="blue"<?php 
            if($color === "blue"){
                echo " selected";
            }?>>Blue</option>
  </select><br>

  Select spoken languages:
  <select name="languages[]" multiple size="3">
        <option value="english"<?php
            if(in_array("english", $languages)){
                echo " selected";
            }
        ?>>English</option>
        <option value="french"<?php
            if(in_array("french", $languages)){
                echo " selected";
            }
        ?>>French</option>
        <option value="italian"<?php
            if(in_array("italian", $languages)){
                echo " selected";
            }
        ?>>Italian</option>
  </select><br>
  Comments:<textarea name="comment"><?php echo htmlspecialchars($comment,ENT_QUOTES);?></textarea><br>

  
  <input type="checkbox" name="tc" value="ok" <?php
    if($tc==='ok'){
        echo " checked";
    }
  ?>>I accept the terms and conditions.<br>
  <input type="submit" name="submit" value="Register">
</form>

