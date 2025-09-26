<?php
if(isset($_POST['name'])){
    setcookie("name", $_POST['name'], time()+3600);
    echo "Hello, ".$_POST['name']."!";
} elseif(isset($_COOKIE['name'])){
    echo "Welcome back, ".$_COOKIE['name']."!";
} else {
    echo '<form method="post">
            Enter Name: <input type="text" name="name">
            <input type="submit" value="Save">
          </form>';
}
?>
