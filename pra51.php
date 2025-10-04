<?php
if(!isset($_COOKIE['offer'])){
    setcookie("offer","1",time()+600); // 10 min
    echo "Welcome! You get 10% off (valid 10 min)";
} else {
    echo "Sorry, offer expired!";
}
?>
