<?php
session_start();
// session_destroy();
include('../model/pdo.php');
// if (!isset($_SESSION['user'])) {
$date = getdate();
if ($date['mday'] < 10) {
    $today =  "0" . $date['mday'];
} else {
    $today =  $date['mday'];
}
$getToday = [$date['year'], $date['mon'], $today];
$minDate = implode('-', $getToday);
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

            if (isset($_GET['id_img'])) {
                $sql = "SELECT * from room_image where roomImage_id = '{$_GET['id_img']}'";
                $image = pdo_query_one($sql);
            }

            if (isset($_SESSION['user'])) {
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
                $room_id = $_POST['room_id'];
                header("location: ./model.php?act=booking&id=$room_id");
            }
            require('./roomDetail.php');
            break;
        case 'home':
            $isset_room = array();
            $is_listRoomId = array();
            if (isset($_POST['submit'])) {
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                $sql = "SELECT * from rooms";
                $listRoom = pdo_query($sql);
                // L???y ph??ng ???? ???????c ?????t
                $sql = "SELECT * from booking_detail";
                $listBook = pdo_query($sql);
                foreach ($listBook as $book) {
                    if ($book['status'] >= 1) {
                        if (($book['start_date'] <= $checkin && $checkin <= $book['end_date']) || ($book['start_date'] <= $checkout && $checkout <= $book['end_date']) || ($book['start_date'] >= $checkin && $book['end_date'] <= $checkout)) {
                            array_push($isset_room, $book['room_id']);
                        }
                    }
                }
                //  L???y t???t c??? id ph??ng
                $sql = "SELECT * FROM `rooms`";
                $listRoomId = pdo_query($sql);
                foreach ($listRoomId as $room) {
                    array_push($is_listRoomId, $room['room_id']);
                }
                $empty_room = array_diff($is_listRoomId, $isset_room);
                // chuy???n ?????i m???ng -> string
                $isset_room_id = implode(',', $empty_room);
                $_SESSION['search_history'] = [$checkin, $checkout, $isset_room_id];

                header('location: ./model.php?act=rooms');
            }

            require('./layout.php');
            break;
        case 'rooms':
            $isset_room = array();
            $is_listRoomId = array();
            if (isset($_POST['submit'])) {
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                $sql = "SELECT * from rooms";
                $listRoom = pdo_query($sql);
                // L???y ph??ng ???? ???????c ?????t
                $sql = "SELECT * from booking_detail";
                $listBook = pdo_query($sql);
                foreach ($listBook as $book) {
                    if ($book['status'] >= 1) {
                        if (($book['start_date'] <= $checkin && $checkin <= $book['end_date']) || ($book['start_date'] <= $checkout && $checkout <= $book['end_date']) || ($book['start_date'] >= $checkin && $book['end_date'] <= $checkout)) {
                            array_push($isset_room, $book['room_id']);
                        }
                    }
                }
                //  L???y t???t c??? id ph??ng
                $sql = "SELECT * FROM `rooms`";
                $listRoomId = pdo_query($sql);
                foreach ($listRoomId as $room) {
                    array_push($is_listRoomId, $room['room_id']);
                }
                $empty_room = array_diff($is_listRoomId, $isset_room);
                // chuy???n ?????i m???ng -> string
                $isset_room_id = implode(',', $empty_room);
                $_SESSION['search_history'] = [$checkin, $checkout, $isset_room_id];
            }
            if (isset($_SESSION['search_history'])) {
                $isset_room_id = $_SESSION['search_history'][2];
                if ($isset_room_id != "") {
                    $sql = "SELECT * FROM `rooms` WHERE room_id  IN ({$isset_room_id})";
                    $listRoom = pdo_query($sql);
                }
            }

            require('./rooms.php');
            break;
        case 'booking':
            if (isset($_GET['id'])) {
                $sql = "SELECT * FROM `rooms` WHERE room_id='{$_GET['id']}'";
                $room = pdo_query_one($sql);
            }
            require('./booking.php');
            break;
        case 'history_booked':
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']['user_id'];
            }
            if (isset($user_id)) {
                $sql = "SELECT `booking_detail`.`status` as `status`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from booking_detail ,booking ,rooms where `booking_detail`.`booking_id` = `booking`.`booking_id` and `rooms`.`room_id` = `booking_detail`.`room_id` and `user_id` = '{$user_id}'";
                $booked = pdo_query($sql);
            }
            require('./history_booked.php');
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
                if ($user) {
                    foreach ($listBook as $book) {
                        if ($book['user_id'] == $user['user_id']) {
                            $stt += 1;
                        }
                    }
                    $_SESSION['user'] = $user;
                    if ($password === $user['password']) {
                        if ($stt < 1) {
                            $sql = "INSERT into booking(`user_id`) value ('{$user['user_id']}')";
                            pdo_execute($sql);
                        }
                        header('location: ./model.php?act=home');
                    } else {
                        $messager = "Sai m???t kh???u";
                    }
                }
                else {
                    $messager = "T??i kho???n ch??a t???n t???i";
                }
            }
            require('./login.php');
            break;
        case 'resgeter':
            $sql = "SELECT * from user";
            $listUser = pdo_query($sql);
            if (isset($_POST['submit'])) {
                $regEmail = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                $regPhone = "/((09|03|07|08|05)+([0-9]{8})\b)/";
                $full_name = $_POST['full_name'];
                $password = $_POST['password'];
                $comfirm_password = $_POST['comfirm_password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $role = 1;
                $s = 0;
                foreach ($listUser as $user) {
                    if ($email == $user['email']) {
                        $s += 1;
                    }
                }
                if ($s >= 1) {
                    $messager = 'T??i kho???n ???? t???n t???i';
                } else if ($full_name == "") {
                    $messager = 'H??? t??n kh??ng ???????c ????? tr???ng';
                } else if ($email == "") {
                    $messager = 'Email kh??ng ???????c ????? tr???ng';
                } else if ($password !== $comfirm_password) {
                    $messager = 'M???t kh???u kh??ng tr??ng kh???p';
                } else if ($phone == "") {
                    $messager = 'S??? ??i???n tho???i kh??ng ???????c ????? tr???ng';
                } else if ($phone == "") {
                    $messager = 'S??? ??i???n tho???i kh??ng ???????c ????? tr???ng';
                } else if ($address == "") {
                    $messager = '?????a ch??? kh??ng ???????c ????? tr???ng';
                } else if (!preg_match($regEmail, $email)) {
                    $messager = 'Email kh??ng ????ng ?????nh d???ng';
                } else if (!preg_match($regPhone, $phone)) {
                    $messager = 'S??? ??i???n tho???i kh??ng ????ng ?????nh d???ng';
                } else {
                    $sql = "INSERT into user(`ful_name`,`password`,`email`,`phone`,`address`,`role`) value ('{$full_name}','{$password}','{$email}','{$phone}','{$address}','{$role}')";
                    pdo_execute($sql);
                    $success = "T???o th??nh c??ng";
                }
            }
            require('./resgeter.php');
            break;
        case 'logout':
            session_unset();
            header('location: ./model.php?act=home');
            break;
        case 'forget':
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                if ($email == "") {
                    $messager = "Email kh??ng ???????c ????? tr???ng";
                } else if ($phone == "") {
                    $messager = "S??? ??i???n tho???i kh??ng ???????c ????? tr???ng";
                } else {
                    $sql = "SELECT * from user";
                    $listUser = pdo_query($sql);
                    foreach ($listUser as $user) {
                        if ($email == $user['email'] && $phone == $user['phone']) {
                            $success = "M???t kh???u c???a b???n l??: {$user['password']}";
                        }
                    }
                    if (!isset($success)) {
                        $messager = "Kh??ng h???p l???";
                    }
                }
            }
            require('./forget.php');
            break;
        case 'changePW':
            if (isset($_POST['submit'])) {
                $user_id = $_SESSION['user']['user_id'];
                $password = $_POST['password'];
                $new_password = $_POST['new_password'];
                $cf_password = $_POST['cf_password'];
                if ($password != $_SESSION['user']['password']) {
                    $messager = "M???t kh???u kh??ng ????ng";
                } else if ($new_password != $cf_password) {
                    $messager = "M???t kh???u m???i kh??ng gi???ng nhau";
                } else {
                    $sql = "UPDATE user set `password` = '{$new_password}' where `user_id` = '{$user_id}'";
                    pdo_execute($sql);
                    $success = "?????i th??nh c??ng";
                }
            }
            require('./changePassword.php');
            break;
        case 'update':
            $sql = "SELECT * from user where user_id = '{$_SESSION['user']['user_id']}'";
            $user = pdo_query_one($sql);
         
            require('./update.php');
            break;
        case 'fix_user':
            if(isset($_POST['submit'])) {
                $regEmail = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $id = $_POST['id'];
                if ($full_name == "") {
                    $messager = 'H??? t??n kh??ng ???????c ????? tr???ng';
                } else if ($email == "") {
                    $messager = 'Email kh??ng ???????c ????? tr???ng';
                }  else if ($phone == "") {
                    $messager = 'S??? ??i???n tho???i kh??ng ???????c ????? tr???ng';
                } else if ($address == "") {
                    $messager = '?????a ch??? kh??ng ???????c ????? tr???ng';
                } else if (!preg_match($regEmail, $email)) {
                    $messager = 'Email kh??ng ????ng ?????nh d???ng';
                } else {
                    $sql = "UPDATE user set
                    `ful_name` = '{$full_name}',
                    `email` = '{$email}',
                    `phone` = '{$phone}',
                    `address` = '{$address}' where `user_id` = '{$id}'";
                    pdo_execute($sql);
                    $success = "?????i th??nh c??ng";
                }
               
           
            }
            // $sql = "SELECT * from user where user_id = '{$_SESSION['user']['user_id']}'";
            // $user = pdo_query_one($sql);
            require('./update.php');
            break;
    }
}
