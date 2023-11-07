<?php

require_once("config.php");

$id = $_GET['ID'];

$result = mysqli_query($mysqli, "DELETE FROM biodata WHERE ID = $id");

header("Location:index.php");

?>