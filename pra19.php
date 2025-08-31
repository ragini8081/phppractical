<?php
$name = "Ragini Maurya";
$roll = "32";
$sub1 = 85;
$sub2 = 78;
$sub3 = 92;
$total = $sub1+$sub2+$sub3;
$percent = $total/3;
?>
<h2>Student Marksheet</h2>
<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <td><?= $name ?></td>
</tr>
<tr>
    <th>Roll No</th>
    <td><?= $roll ?></td>
</tr>
<tr>
    <th>Subject 1</th>
    <td><?= $sub1 ?></td>
</tr>
<tr>
    <th>Subject 2</th>
    <td><?= $sub2 ?></td>
</tr>
<tr>
    <th>Subject 3</th>
    <td><?= $sub3 ?></td>
</tr>
<tr>
    <th>Total</th>
    <td><?= $total ?></td>
</tr>
<tr>
    <th>Percentage</th>
    <td><?= $percent ?>%</td>
</tr>
</table>