<?php
$a = [1,2,3,4,5,6];

// Manual reverse
for($i=count($a)-1;$i>=0;$i--) echo $a[$i]." ";

// Using array_reverse
print_r(array_reverse($a));
?>
