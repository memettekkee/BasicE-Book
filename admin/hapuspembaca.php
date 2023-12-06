<?php
include_once("../conn.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM pembaca WHERE id=$id");

header("Location: datapembaca.php");