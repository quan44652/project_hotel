<?php
include('../controller/header.php');
include('../model/pdo.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'cate':
            $sql = "SELECT * from categories";
            $listCate = pdo_query($sql);
            require "../controller/category/cat.php";
            break;
        case 'add_cate':
            if (isset($_POST['submit'])) {
                $name = $_POST['cat_name'];
                $sql = "INSERT into categories (cate_name) value ('$name')";
                pdo_execute($sql);
                $messager = "Thêm thành công";
            }
            require "../controller/category/add.php";
            break;
        case 'fix_cate':
            if (isset($_GET['id'])) {
                $sql = "SELECT * from categories where cate_id = '{$_GET['id']}'";
                $cate = pdo_query_one($sql);
            }
            require "../controller/category/update.php";
            break;
        case 'update_cate':
            if (isset($_POST['submit'])) {
                $cate_name = $_POST['cate_name'];
                $id = $_POST['id'];
                $sql = "UPDATE categories set cate_name = '{$cate_name}' where cate_id = '{$id}'";
                pdo_execute($sql);
                $messager = "Sửa thành công";
            }
            $sql = "SELECT * from categories";
            $listCate = pdo_query($sql);
            require "../controller/category/update.php";
            break;
        case 'delete_cate':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM categories WHERE cate_id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT * from categories";
            $listCate = pdo_query($sql);
            require "../controller/category/cat.php";
            break;
        case 'room':
            $sql = "SELECT `rooms`.`room_id` as `room_id` ,`rooms`.`roomImage_id` as `roomImage_id` ,`rooms`.`price` as `price` , `rooms`.`name` as `name`, `rooms`.`description` as `description`, `rooms`.`image` as `image`, `categories`.`cate_name` as `cate_name` from `rooms` , `categories` where `categories`.`cate_id` = `rooms`.`cate_id` ";
            $listRoom = pdo_query($sql);
            require "../controller/room/room.php";
            break;
        case 'add_room':
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $roomImage_id = $_POST['roomImage_id'];
                $cate_id = $_POST['cate_id'];
                $target_dir = "./room/img/";
                $image = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $image);
                $sql = "INSERT INTO `rooms` (`cate_id`, `price`, `name`, `description`, `roomImage_id`, `image`)
                         VALUES ('$cate_id', '$price', '{$name}', '$desc','$roomImage_id', '$image')";
                pdo_execute($sql);
                $messager = "Thêm thành công";
            }
            $sql = "SELECT * from categories";
            $listCate = pdo_query($sql);
            require "../controller/room/add.php";
            break;
        case 'fix_room':
            $sql = "SELECT `rooms`.`room_id` as `room_id` ,`rooms`.`price` as `price` , `rooms`.`name` as `name`, `rooms`.`description` as `description`, `rooms`.`image` as `image`, `categories`.`cate_name` as `cate_name` from `rooms` , `categories` where `categories`.`cate_id` = `rooms`.`cate_id` and room_id = '{$_GET['id']}' ";
            $room = pdo_query_one($sql);
            $sql = "SELECT * from categories";
            $listCate = pdo_query($sql);
            require "../controller/room/update.php";
            break;
        case 'update_room':
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $cate_id = $_POST['cate_id'];
                $target_dir = "./room/img/";
                $image = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $image);
                $sql = "UPDATE rooms set `name` = '{$name}',
                `price` = '{$price}',
                `description` = '{$desc}',
                `cate_id` = '{$cate_id}',
                `image` = '{$image}' WHERE room_id = '{$id}' ";
                pdo_execute($sql);
             
                $messager = "Sửa thành công";
            }
            require "../controller/room/update.php";
            break;
        case 'delete_room':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM rooms WHERE room_id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `rooms`.`room_id` as `room_id` ,`rooms`.`price` as `price` , `rooms`.`name` as `name`, `rooms`.`description` as `description`, `rooms`.`image` as `image`, `categories`.`cate_name` as `cate_name` from `rooms` , `categories` where `categories`.`cate_id` = `rooms`.`cate_id` ";
            $listRoom = pdo_query($sql);
            require "../controller/room/room.php";
            break;

        case 'order':
            if (isset($_GET['id'])) {
                $status = 3;
                $sql = "UPDATE booking_detail set `status` = '$status' where id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`status` as `status`,`booking_detail`.`id` as `id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`ful_name` as `ful_name`,`user`.`phone` as `phone`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `booking` , `user` , `rooms` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`and `booking_detail`.`room_id` = `rooms`.`room_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/order.php";
            break;
        case 'checkin':
            if (isset($_GET['id'])) {
                $status = 1;
                $sql = "UPDATE booking_detail set `status` = '$status' where id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`status` as `status`,`booking_detail`.`id` as `id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`ful_name` as `ful_name`,`user`.`phone` as `phone`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `booking` , `user` , `rooms` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`and `booking_detail`.`room_id` = `rooms`.`room_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/checkin.php";
            break;
        case 'checkout':
            if (isset($_GET['id'])) {
                $status = 2;
                $sql = "UPDATE booking_detail set `status` = '$status' where id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`status` as `status`,`booking_detail`.`id` as `id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`ful_name` as `ful_name`,`user`.`phone` as `phone`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `booking` , `user` , `rooms` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`and `booking_detail`.`room_id` = `rooms`.`room_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/checkout.php";
            break;
        case 'pay':
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`status` as `status`,`booking_detail`.`id` as `id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`ful_name` as `ful_name`,`user`.`phone` as `phone`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `booking` , `user` , `rooms` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`and `booking_detail`.`room_id` = `rooms`.`room_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/pay.php";
            break;
        case 'delete_booking':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM booking_detail WHERE id = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`status` as `status`,`booking_detail`.`id` as `id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`ful_name` as `ful_name`,`user`.`phone` as `phone`,`rooms`.`price` as `price` from `booking_detail` , `booking` , `user` , `rooms` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`and `booking_detail`.`room_id` = `rooms`.`room_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/pay.php";
            break;
        case 'delete_order':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM `booking` WHERE `booking_id` = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `booking`.`booking_id` as `booking_id`,`booking_detail`.`room_id` as `room_id`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`user`.`user_name` as `user_name`,`user`.`phone` as `phone` from `booking_detail` , `booking` , `user` where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user`.`user_id` = `booking`.`user_id`";
            $listbook = pdo_query($sql);
            require "../controller/order/order.php";
            break;
        case 'comment':
            $sql = "SELECT `comment`.`content` as  `content`,`comment`.`id` as  `id`, `comment`.`time` as  `time`,`rooms`.`name` as  `name`,`user`.`ful_name` as `ful_name` from `comment` , `user` , `rooms` where `comment`.`user_id` = `user`.`user_id` and `comment`.`room_id` = `rooms`.`room_id`  ORDER BY `id` DESC";
            $listComment = pdo_query($sql);
            require "../controller/comment/comment.php";
            break;
        case 'delete_comment':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM `comment` WHERE `id` = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT `comment`.`content` as  `content`,`comment`.`id` as  `id`, `comment`.`time` as  `time`,`rooms`.`name` as  `name`,`user`.`ful_name` as `ful_name` from `comment` , `user` , `rooms` where `comment`.`user_id` = `user`.`user_id` and `comment`.`room_id` = `rooms`.`room_id`  ORDER BY `id` DESC";
            $listComment = pdo_query($sql);
            require "../controller/comment/comment.php";
            break;
        case 'staff':
            if (isset($_GET['id'])) {
                $role = 2;
                $sql = "UPDATE user set `role` = '$role' where `user_id` = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT * from user";
            $listUser = pdo_query($sql);
            require "../controller/staff/staff.php";
            break;
        case 'detete_staff':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM `user` WHERE `user_id` = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT * from user";
            $listUser = pdo_query($sql);
            require "../controller/staff/staff.php";
            break;
        case 'user':
            $sql = "SELECT * from user";
            $listUser = pdo_query($sql);
            require "../controller/user/user.php";
            break;
        case 'detete_user':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM `user` WHERE `user_id` = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT * from user";
            $listUser = pdo_query($sql);
            require "../controller/user/user.php";
            break;
        case 'image':
            $sql = "SELECT  `room_image`.`image1` as `image1`,`room_image`.`image2` as `image2`, `room_image`.`image3` as `image3`,`room_image`.`image4` as `image4`,`room_image`.`image5` as `image5`,`rooms`.`name` as `name` from `rooms` , `room_image` where `room_image`.`roomImage_id` = `rooms`.`roomImage_id` ";
            // $sql = "SELECT * from room_image";
            $listImage = pdo_query($sql);
            require "../controller/image_room/image.php";
            break;
        case 'add_img':
            if (isset($_GET['id'])) {
                if (isset($_POST['submit'])) {
                    $roomImage_id = $_GET['id'];
                    $target_dir = "./image_room/img/";
                    $image1 = $target_dir . basename($_FILES["image1"]["name"]);
                    move_uploaded_file($_FILES["image1"]["tmp_name"], $image1);
                    $image2 = $target_dir . basename($_FILES["image2"]["name"]);
                    move_uploaded_file($_FILES["image2"]["tmp_name"], $image2);
                    $image3 = $target_dir . basename($_FILES["image3"]["name"]);
                    move_uploaded_file($_FILES["image3"]["tmp_name"], $image3);
                    $image4 = $target_dir . basename($_FILES["image4"]["name"]);
                    move_uploaded_file($_FILES["image4"]["tmp_name"], $image4);
                    $image5 = $target_dir . basename($_FILES["image5"]["name"]);
                    move_uploaded_file($_FILES["image5"]["tmp_name"], $image5);
                    $sql = "INSERT INTO `room_image` (`image1`, `image2`, `image3`, `image4`,`image5`,`roomImage_id`)
                         VALUES ('$image1', '{$image2}', '$image3', '$image4','{$image5}','{$roomImage_id}')";
                    pdo_execute($sql);
                    $messager = "Thêm thành công";
                }
            }
            // $sql = "SELECT * from rooms where roomImage_id = '{$_GET['id']}'";
            // $listRoom = pdo_query($sql);
            require "../controller/image_room/add.php";
            break;
        case 'detete_image':
            if (isset($_GET['id'])) {
                $sql = "DELETE FROM room_image WHERE roomImage_id  = '{$_GET['id']}'";
                pdo_execute($sql);
            }
            $sql = "SELECT * from room_image";
            $listImage = pdo_query($sql);
            require "../controller/image_room/image.php";
            break;
        case 'statistical':
            $sql = "SELECT `categories`.`cate_name` as `cate_name`,`booking_detail`.`status` as `status`,`booking_detail`.`start_date` as `start_date`,`booking_detail`.`end_date` as `end_date`,`rooms`.`price` as `price`,`rooms`.`name` as `name` from `booking_detail` , `booking` ,  `rooms`, categories where `booking_detail`.`booking_id` = `booking`.`booking_id` and `booking_detail`.`room_id` = `rooms`.`room_id`and `categories`.`cate_id` = `rooms`.`cate_id`";
            $listbook = pdo_query($sql);
            require('./statistical/statistical.php');
            break;
    }
}
include('../controller/footer.php');
