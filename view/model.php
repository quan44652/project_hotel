<?php
include('./header.php');
include('../model/pdo.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'detail':
            if(isset($_GET['id'])) {
                $sql = "SELECT * from rooms where room_id = '{$_GET['id']}'";
                $room = pdo_query_one($sql);             
            }

            if(isset($_GET['id'])) {
                $sql = "SELECT * from room_image where roomImage_id = '{$_GET['id']}'";
                $image = pdo_query_one($sql);             
            }
            print_r($image);
   
            require('./roomDetail.php');
            break;
        case 'home':
            require('./layout.php');
            break;
        case 'rooms':
            $sql = "SELECT * from rooms";
            $listRoom = pdo_query($sql);
            require('./rooms.php');
            break;
    }
}

include('./footer.php');