<?php
include('../model/m_user.php');
error_reporting(E_ALL ^ E_NOTICE);

$listClient = listClient();

foreach($listClient as $row)
{
echo "<tr>";
echo "<td>".$row['rut']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>+".$row['codephone'].$row['phone']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['alias']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['dbname']."</td>";
echo "<td>".$row['date']."</td>";
echo "</tr>";
}

//var_dump($listClient);



?>