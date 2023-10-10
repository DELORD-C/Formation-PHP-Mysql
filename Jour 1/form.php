<?php

echo "<ul>";
foreach ($_POST as $index => $value) {
    echo "<li>";
    echo $index . " => " . $value;
    echo "</li>";
}
echo "</ul>";

?>

<!-- <ul>
<?php foreach ($_POST as $index => $value) { ?>
<li><?=$index?> => <?=$value?></li>
<?php } ?>
</ul> -->