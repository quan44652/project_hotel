
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <section class="banner">
            <header class="header" >
                <div class="logo">
                    <a href="../view/model.php?act=home"><img src="../public/logo/logo-w.svg" alt=""></a>
                </div>

                <div class="modal ">
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) {
                    ?>
                        <div class="modal_item">
                            <div class="modal_img">
                                <img src="../public/feedback/user.png" width="60px" height="60px" alt="">
                                <p>Xin chào: <br> <span><?php echo $_SESSION['user']['ful_name'] ?></span></p>
                            </div>
                            <ul class="modal_content">
                                <li><a href="./model.php?act=history_booked">Phòng đã đặt</a></li>
                                <li><a href="./model.php?act=update">Cập nhập tài khoản</a></li>
                                <li><a href="./model.php?act=changePW">Đổi mật khẩu</a></li>
                                <li><a href="./model.php?act=logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    <?php
                    } else if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 2) {
                        ?>
                        <div class="modal_item">
                            <div class="modal_img">
                                <img src="../public/feedback/user.png" width="60px" height="60px" alt="">
                                <p>Xin chào: <br> <span><?php echo $_SESSION['user']['ful_name'] ?></span></p>
                            </div>
                            <ul class="modal_content">
                                <li><a href="../manager.html">Trang quản lý</a></li>
                                <li><a href="./model.php?act=history_booked">Phòng đã đặt</a></li>
                                <li><a href="./model.php?act=update">Cập nhập tài khoản</a></li>
                                <li><a href="./model.php?act=changePW">Đổi mật khẩu</a></li>
                                <li><a href="./model.php?act=logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="modal_item ">
                            <a class="btn" href="./model.php?act=login">Sign In</a>
                            <a class="btn" href="./model.php?act=resgeter">Sign Up</a>
                        </div>
                    <?php
                    }
                    ?>


                </div>

            </header>