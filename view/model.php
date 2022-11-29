<?php
session_start();
// session_destroy();
include('../model/pdo.php');
// if (!isset($_SESSION['user'])) {
  
// }
if (!isset($_SESSION['search_history'])) {
    $_SESSION['search_history'] = array();
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

            if($_SESSION['user']) {
                $sql = "SELECT * from booking where `user_id` = '{$_SESSION['user']['user_id']}'";
                $booking = pdo_query_one($sql);
            }

            if (isset($_POST['submit'])) {
                $booking_id = $_POST['booking_id'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $room_id = $_POST['room_id'];
                $status = 0;
                $sql = "INSERT into booking_detail(`booking_id`,`start_date`,`end_date`,`room_id`,`status`) value ('{$booking_id}','{$start_date}','{$end_date}','{$room_id}','{$status}')";
                pdo_execute($sql);
                header("location: ./model.php?act=booking&id=$room_id");
            }
            require('./roomDetail.php');
            break;
        case 'home':
            $sql = "SELECT * from rooms";
            $listRoom = pdo_query($sql);
            $isset_room = array();
            $is_listRoomId = array();
            if (isset($_POST['submit'])) {
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
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
                $_SESSION['search_history'] = [$checkin, $checkout, $isset_room_id];
                header('location: ./model.php?act=rooms');
            }
            print_r($_SESSION['search_history']);

            require('./layout.php');
            break;
        case 'rooms':
            // $sql = "SELECT * from rooms";
            // $listRoom = pdo_query($sql);
            // $isset_room = array();
            // $is_listRoomId = array();
            // if (isset($_POST['submit'])) {
            //     $checkin = $_POST['checkin'];
            //     $checkout = $_POST['checkout'];
            //     // Lấy phòng đã được đặt
            //     $sql = "SELECT * from booking_detail";
            //     $listBook = pdo_query($sql);
            //     foreach ($listBook as $book) {
            //         if (($book['start_date'] <= $checkin && $checkin < $book['end_date']) || ($book['start_date'] < $checkout && $checkout <= $book['end_date']) || ($book['start_date'] > $checkin && $book['end_date'] < $checkout)) {
            //             array_push($isset_room, $book['room_id']);
            //         }
            //     }
            //     //  Lấy tất cả id phòng
            //     $sql = "SELECT * FROM `rooms`";
            //     $listRoomId = pdo_query($sql);
            //     foreach ($listRoomId as $room) {
            //         array_push($is_listRoomId, $room['room_id']);
            //     }
            //     $empty_room = array_diff($is_listRoomId, $isset_room);
            //     // chuyển đổi mảng -> string
            //     $isset_room_id = implode(',', $empty_room);
            //     echo $isset_room_id;
            //     // Lấy phòng chưa được đặt
            //     $sql = "SELECT * FROM `rooms` WHERE room_id IN ({$isset_room_id})";
            //     $listRoom = pdo_query($sql);
            // }
            if (isset($_SESSION['search_history'])) {
                $isset_room_id = $_SESSION['search_history'][2];
                $sql = "SELECT * FROM `rooms` WHERE room_id IN ({$isset_room_id})";
                $listRoom = pdo_query($sql);
            }
            print_r($_SESSION['search_history']);
            require('./rooms.php');
            break;
        case 'booking':
             if(isset($_GET['id'])) {
                $sql = "SELECT * FROM `rooms` WHERE room_id='{$_GET['id']}'";
                $room = pdo_query_one($sql);
                print_r($room);
             }
            require('./booking.php');
            break;
        case 'booked':
            require('./booked.php');
            break;
        case 'login':
            $stt = 0;
            if (isset($_POST['submit'])) {
                $_SESSION['user'] = array();
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * from user where `email` = '{$email}'";
                $user = pdo_query_one($sql);
                $sql = "SELECT * from booking";
                $listBook = pdo_query($sql);
                foreach($listBook as $book) {
                    if($book['user_id'] == $user['user_id'] ) {
                        $stt +=1;
                        echo $stt;
                    }
                   }
                if ($user) {
                    $_SESSION['user'] = $user;
                    if ($password === $user['password']) {
                        if($stt < 1) {
                            $sql = "INSERT into booking(`user_id`) value ('{$user['user_id']}')";
                            pdo_execute($sql);
                        }       
                        header('location: ./model.php?act=home');
                        print_r($_SESSION['user']);
                    } else {
                        echo 'mật khẩu sai';
                    }
                }
            }
            require('./login.php');
            break;
        case 'resgeter':
            if(isset($_POST['submit'])) {
                echo 123;
                $full_name = $_POST['full_name'];
                $password = $_POST['password'];
                $comfirm_password = $_POST['comfirm_password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $sql = "INSERT into user(`ful_name`,`password`,`email`,`phone`,`address`) value ('{$full_name}','{$password}','{$email}','{$phone}','{$address}')";
                pdo_execute($sql);
            }
            require('./resgeter.php');
            break;
        case 'logout':
            session_unset();
            header('location: ./model.php?act=home');
            break;
    }
}