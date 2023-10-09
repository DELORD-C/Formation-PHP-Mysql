<?php


echo "<ul>";
foreach ($_POST as $index => $value) {
    echo "<li>";
    echo $index . " => " . $value;
    echo "</li>";
}
echo "</ul>";