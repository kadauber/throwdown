<?php
header('Location: /throwdown/index.php');

require_once '~/web_scripts_config/throwdown_config.php';
require_once 'db_connect.php';

$conn = connect_to_database();

// Try to submit a wonder to the database
if (isset($_POST['submit'])) {
    // Assign appropriate variables
    $name = $_POST['name'];
    $owner = $_POST['owner'];
    $axiom = $_POST['axiom'];
    $rank = $_POST['rank'];

    // Sanitize user inputs by escaping them (also adds appropriate single quotes)
    $name = $conn->quote($name);
    $owner = $conn->quote($owner);
    $axiom = $conn->quote($axiom);
    $rank = $conn->quote($rank);

    // Submit a wonder through the connection
    $statement = $conn->prepare("insert into Wonders (Name, Owner, Axiom, Rank) values ({$name},{$owner},{$axiom},{$rank})");
    $statement->execute();
}

exit;
?>
