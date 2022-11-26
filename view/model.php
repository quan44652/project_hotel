<?php
include('./header.php');
include('../model/pdo.php');
if(!isset($_SESSION['user'])) {
$_SESSION['user'] = array();
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {           
        case 'detail':
            if (isset($_GET['id'])) {
                $sql = "SELECT * from rooms where room_id = '{$_GET['id']}'";
                $room = pdo_query_one($sql);
            }

            if (isset($_GET['id'])) {
                $sql = "SELECT * from room_image where roomImage_id = '{$_GET['id']}'";
                $image = pdo_query_one($sql);
            }

            if (isset($_POST['submit'])) {
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $room_id = $_POST['room_id'];
                $sql = "INSERT into booking_detail (`room_id`,`start_date`,`end_date`) value ('{$room_id}','{$start_date}','{$end_date}')";
                pdo_execute($sql);
                header('location: ./model.php?act=booking');
            }

            require('./roomDetail.php');
            break;
        case 'home':
            require('./layout.php');
            break;
        case 'rooms':
            $sql = "SELECT * from rooms";
            $listRoom = pdo_query($sql);
            $isset_room = array();
            $is_listRoomId = array();
            if (isset($_POST['submit'])) {
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                // echo $checkin;
                // echo $checkout;
                // Lấy phòng đã được đặt
                $sql = "SELECT * from booking_detail";
                $listBook = pdo_query($sql);
                foreach ($listBook as $book) {
                    if (($book['start_date'] <= $checkin && $checkin < $book['end_date']) || ($book['start_date'] < $checkout && $checkout <= $book['end_date']) || ($book['start_date'] > $checkin && $book['end_date'] < $checkout)) {
                        array_push($isset_room, $book['room_id']);
                    }
                }
                //  Lấy tất cả id phòng
                $sql = "SELECT * FROM `rooms`";
                $listRoomId = pdo_query($sql);
                foreach ($listRoomId as $room) {
                    array_push($is_listRoomId, $room['room_id']);
                }
                $empty_room = array_diff($is_listRoomId, $isset_room);
                // chuyển đổi mảng -> string
                $isset_room_id = implode(',', $empty_room);
                // Lấy phòng chưa được đặt
                $sql = "SELECT * FROM `rooms` WHERE room_id IN ({$isset_room_id})";
                $listRoom = pdo_query($sql);
            }
            require('./rooms.php');
            break;
        case 'booking':
             $sql = "SELECT `booking_detail`.`start_date` as `start_date`, `booking_detail`.`end_date` as `end_date`, `rooms`.`image` as `image`, `rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `rooms` where `booking_detail`.`room_id` = `rooms`.`room_id` ";      
            $listBook = pdo_query($sql);
            require('./booking.php');
            break;
        case 'blog':
            require('./blog.php');
            break;
        case 'about':
            require('./about.php');
            break;
        case 'contact':
            require('./contact.php');
            break;
    }
}

include('./footer.php');