<?php
if(isset($_COOKIE['count'])){
    $count = $_COOKIE['count']+1;
} else {
    $count = 1;
}
setcookie("count",$count,time()+3600);

if($count==1)
    echo "This is your first visit!";
else
    echo "You have visited $count times.";
?>
