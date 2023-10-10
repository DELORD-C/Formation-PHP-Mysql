<?php

function redirect_user_if_not_connected () {
    if (!isset($_SESSION['connected'])) {
        header('location: connection.php');
    }
}

redirect_user_if_not_connected();