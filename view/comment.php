<?php
require('../model/pdo.php');
session_start();
$date = getdate();
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}

$sql = "SELECT * FROM rooms where room_id = '{$_GET['id']}'";
$room = pdo_query_one($sql);
if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $content = $_POST['content'];
    $room_id = $_POST['room_id'];
    $time = $_POST['time'];
    $sql = "INSERT INTO `comment` ( `content`, `room_id` , `user_id` , `time`) VALUES ('{$content}','{$room_id}','{$user_id}','{$time}')";
    pdo_execute($sql);
}
$sql = "SELECT `comment`.`content` as  `content`,`comment`.`time` as  `time`,`rooms`.`room_id` as  `room_id`,`comment`.`user_id` as  `user_id`,`user`.`ful_name` as `ful_name` from `comment` , `user` , rooms where `comment`.`user_id` = `user`.`user_id` and `comment`.`room_id` = `rooms`.`room_id`  ORDER BY `id` DESC";
$listComment = pdo_query($sql);

if (isset($user_id)) {
    $sql = "SELECT `booking_detail`.`status` as `status`,`booking_detail`.`room_id` as `room_id`,`booking`.`user_id` as `user_id` from booking_detail ,booking where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user_id` = '{$user_id}'";
    $user = pdo_query_one($sql);
}

if (isset($user_id)) {
    $sql = "SELECT `booking_detail`.`room_id` as `room_id` from booking_detail ,booking where `booking_detail`.`booking_id` = `booking`.`booking_id` and `user_id` = '{$user_id}'";
    $getRoomIds = pdo_query($sql);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/layout.css">
    <title>Document</title>
</head>

<body>
    <section class="comment section-m2">
        <h1 class="comment-title">Feedback from our Guests</h1>
        <?php
        if (isset($_SESSION['user'])) {
            if (isset($user['status'])  && $user['status'] >= 1 )  {
                foreach($getRoomIds as $roomId) {
                    if($roomId['room_id'] == $room['room_id']) {
                        ?>
                        <form action="" method="POST">
                            <textarea name="content" id=""></textarea>
                            <input type="hidden" value="<?php echo $_SESSION['user']['user_id'] ?>" name="user_id">
                            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="room_id">
                            <input type="hidden" value="<?php
                                                        echo (int)($date['hours'] + 6) . ':';
                                                        echo $date['minutes'] . ':';
                                                        echo $date['seconds'] . '--';
                                                        echo $date['mday'] . '/';
                                                        echo $date['mon'] . '/';
                                                        echo $date['year'];
                                                        ?>" name="time">
                            <button type="submit" name="submit" class="btn2">Send</button>
                            
                        </form>
                    <?php
                    }
                }
            }
        }
        else {
            echo '<h1>Bạn cần đăng nhập mới có thể gửi phản hồi</h1>';
        }
        foreach ($listComment as $comment) {
            if ($room['room_id'] == $comment['room_id']) {
            ?>
                <div class="comment_list">
                    <div class="comment_list-item">
                        <div class="comment_list-item--avt">
                            <img src="../public/feedback/user.png" alt="">
                        </div>
                        <div class="comment_list-item--content">
                            <h1><?php echo $comment['ful_name'] ?></h1>
                            <span><?php echo $comment['time'] ?></span><br>
                            <span><?php echo $comment['content'] ?></span>
                        </div>
                    </div>
            <?php
            }
        }
            ?>
                </div>
    </section>
</body>

</html>