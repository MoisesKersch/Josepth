<?php
include ('insert.php');

echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Birth Date</th><th> Sex </th></tr>";
foreach ($print as $key => $value)
{
  echo "<tr> <td>".$value['firstname']." <td>".$value['lastname']." <td>".$value['birth']." <td>".$value['sex']." </tr>";
}
echo "</table>";

?>
