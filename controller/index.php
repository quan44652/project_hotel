<?php
include ('../controller/header.php');
include ('../model/pdo.php');
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'cate':
                $sql = "SELECT * from categories";
                $listCate = pdo_query($sql);
                require "../controller/category/cat.php";
                break;
            case 'add_cate':
                if(isset($_POST['submit'])) {
                    $name = $_POST['cat_name'];
                    $sql = "INSERT into categories (cate_name) value ('$name')";
                    pdo_execute($sql);
                    $messager = "Thêm thành công";
                }
                require "../controller/category/add.php";
                break;
            case 'room':
                $sql = "SELECT * from rooms";
                $listRoom = pdo_query($sql);
                require "../controller/room/room.php";
                break;
            case 'add_room':
                    if(isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $desc = $_POST['desc'];
                        $cate_id = $_POST['cate_id'];
                        $target_dir = "./room/img/";
                        $image = $target_dir . basename($_FILES["image"]["name"]);
                        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
                        $sql = "INSERT INTO `rooms` (`cate_id`, `price`, `name`, `description`, `image`)
                         VALUES ('$cate_id', '$price', '{$name}', '$desc', '$image')";
                        pdo_execute($sql);
                        $messager = "Thêm thành công";
                    }
                    $sql = "SELECT * from categories";
                    $listCate = pdo_query($sql);
                    require "../controller/room/add.php";
                    break;
            case 'order':
                require "../controller/order/order.php";
                break;
            case 'comment':
                require "../controller/comment/comment.php";
                break;
            case 'staff':
                require "../controller/staff/staff.php";
                break;
            case 'user':
                require "../controller//user/user.php";
                break;
        }
    }
include ('../controller/footer.php')
?>