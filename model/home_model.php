<?php
$prepSelect = $conn->query("SELECT * FROM students WHERE id = " . rng());
$row = $prepSelect->fetch();
?>
