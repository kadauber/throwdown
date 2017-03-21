<!DOCTYPE html>
<html>
<head>
<title>Throwdown Admin</title>
</head>
<body>
<h1>You had better be the Storyteller</h1>
<table id="wonders">
  <tr>
    <td>Name</td>
    <td>Axiom</td>
    <td>Rank</td>
    <td>Description</td>
    <td>Effect</td>
  </tr>
</table>
<?php
require_once 'db_connect.php';

/*
function makeWonderRow($data) {

}
*/
$conn = connect_to_database();
echo "connected to db";
/*
$sth = $conn->prepare("SELECT * FROM Wonders");
$sth->execute();

$wonders = $sth->fetchAll();
print $wonders;
*/
?>

</body>
</html>
