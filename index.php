<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Throwdown</title>
</head>
<body>
<form action="submit_wonder.php" method="post">
<input type="text" name="name" placeholder="Name">
<select name="axiom">
    <option value="Apokalypsi">Apokalypsi</option>
    <option value="Automata">Automata</option>
    <option value="Epikrato">Epikrato</option>
    <option value="Exelixi">Exelixi</option>
    <option value="Katastrofi">Katastrofi</option>
    <option value="Metaptropi">Metaptropi</option>
    <option value="Prostasia">Prostasia</option>
    <option value="Skafoi">Skafoi</option>
</select>
<select name="rank">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<input type="text" name="phys_description" placeholder="What does this look like?">
<input type="text" name="effect_description" placeholder="What does this do?">
<input type="submit">
</form>
<?php
print "hello<br>";
require_once 'db_connect.php';
echo DATABASE;
?>
</body>
</html>
