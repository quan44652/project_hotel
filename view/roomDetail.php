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
        <section style="height:40vh ;" class="banner">
            <header class="header">
                <div class="logo">
                    <a href="./layout.html"> <img src="../public/logo/logo-w.svg" alt=""></a>
                </div>

                <div class="modal ">
                    <div class="modal_item ">
                        <a class="btn" href="./login.html">Sign In</a>
                        <a class="btn" href="./resgeter.html">Sign Up</a>
                    </div>
                    <div class="modal_item hidden">
                        <div class="modal_img">
                            <img src="../public/feedback/faces-1-scaled.jpg" width="50px" height="50px" alt="">
                        </div>
                        <ul class="modal_content">
                            <li><a href="">Thông tin tài khoản</a></li>
                            <li><a href="">Đổi mật khẩu</a></li>
                            <li><a href="">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>

            </header>
            <div class="banner_img">
                <img style="height:40vh ;" src="../public/banner/banner1.jpg" alt="">
            </div>
            <div class="banner__content">
            <div class="seaarch_room">
        <form action="">
            <div class="form_group">
                <label>Check-In</label>
                <input name="checkin" type="date" placeholder="Check-In Date" value="<?php if (isset($_SESSION['search_history']))
                                                                                            echo $_SESSION['search_history'][0] ?>">
            </div>
            <div class="form_group">
                <label>Check-Out</label>
                <input type="date" placeholder="Check-Out Date" value="<?php if (isset($_SESSION['search_history']))
                                                                            echo $_SESSION['search_history'][1] ?>">
            </div>
            <button class="btn"><a href="./rooms.html">Tìm kiếm</a></button>
        </form>
    </div>

            </div>
        </section>


        <section class="roomDetail section-m1">
            <div class="Sign-room--img col-6">
                <div class="room-main">
                    <img src='../controller/<?php echo $room['image'] ?>' id="mainImg" alt="">
                </div>
                <div class="room-small">
                    <div class="room-small--item ">
                        <img src='../controller/<?php echo $image['image1'] ?>' alt="" class="smallImg">
                    </div>
                    <div class="room-small--item ">
                        <img src='../controller/<?php echo $image['image2'] ?>' alt="" class="smallImg">
                    </div>
                    <div class="room-small--item ">
                        <img src='../controller/<?php echo $image['image3'] ?>' alt="" class="smallImg">
                    </div>
                    <div class="room-small--item ">
                        <img src='../controller/<?php echo $image['image4'] ?>' alt="" class="smallImg">
                    </div>
                    <div class="room-small--item ">
                        <img src='../controller/<?php echo $image['image5'] ?>' alt="" class="smallImg">
                    </div>
                </div>
            </div>

            <div class="sign-room--detail col-6">
                <div class="room-content">
                    <ul class="room-space">
                        <li>
                            <i class="fa-solid fa-bed"></i>
                            <span>Adult: 2</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-square"></i>
                            <span>Size: 35m<sup>2</sup></span>
                        </li>
                    </ul>
                    <h1><?php echo $room['name'] ?></h1>
                    <p>
                        <?php echo $room['description'] ?>
                    </p>
                    <div class="room-book">
                        <p><span><?php echo $room['price'] ?>.VNĐ</span> / Đêm</p>
                    </div>
                </div>
                <?php 
                echo $booking['booking_id'];
                echo $_SESSION['search_history'][0];
                echo $_SESSION['search_history'][1];
                echo $room['room_id'];
                ?>
                <div class="seaarch_room">
                    <form action="../view/model.php?act=detail" method="POST">
                        <input type="hidden" name="booking_id" value="<?php echo $booking['booking_id'] ?>">
                        <input type="hidden" name="start_date" value="<?php echo $_SESSION['search_history'][0] ?>">
                        <input type="hidden" name="end_date" value="<?php echo $_SESSION['search_history'][1] ?>">
                        <input type="hidden" name="room_id" value="<?php echo $room['room_id'] ?>">
                        <button name="submit" type="submit" class="btn">Book Now</button>
                    </form>
                </div>
            </div>

        </section>


        <section class="comment section-m2">
            <h1 class="comment-title">Feedback from our Guests</h1>
            <form action="">
                <textarea name="" id=""></textarea>
                <button class="btn2">Send</button>
            </form>

            <div class="comment_list">
                <div class="comment_list-item">
                    <div class="comment_list-item--avt">
                        <img src="../public/feedback/faces-1-scaled.jpg" alt="">
                    </div>
                    <div class="comment_list-item--content">
                        <h1>Quân Nguyễn</h1>
                        <span>Consectetur adipisicing elit. Nihil, illum voluptate
                            eveniet ex fugit ea delectus, sed voluptatem. Laborum

                            accusantium libero commodi id officiis itaque esse
                            adipisci, necessitatibus asperiores, illo odio.</span>
                    </div>
                </div>
                <div class="comment_list-item">
                    <div class="comment_list-item--avt">
                        <img src="../public/feedback/faces-2-scaled.jpg" alt="">
                    </div>
                    <div class="comment_list-item--content">
                        <h1>Quân Nguyễn</h1>
                        <span>Consectetur adipisicing elit. Nihil, illum voluptate
                            eveniet ex fugit ea delectus, sed voluptatem. Laborum

                            accusantium libero commodi id officiis itaque esse
                            adipisci, necessitatibus asperiores, illo odio.</span>
                    </div>
                </div>
                <div class="comment_list-item">
                    <div class="comment_list-item--avt">
                        <img src="../public/feedback/faces-3-scaled.jpg" alt="">
                    </div>
                    <div class="comment_list-item--content">
                        <h1>Quân Nguyễn</h1>
                        <span>Consectetur adipisicing elit. Nihil, illum voluptate
                            eveniet ex fugit ea delectus, sed voluptatem. Laborum

                            accusantium libero commodi id officiis itaque esse
                            adipisci, necessitatibus asperiores, illo odio.</span>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer">
            <div class="row">
                <div class="col-4">
                    <div class="logo footer-title">
                        <img src="../public/logo/logo-w.svg" alt="">
                    </div>
                    <p>Sequi dolores ratione eos eveniet provident soluta.
                        Omnis nesciunt sit eos at, eius voluptatum rem
                        corporis. Doloremque labore assumenda explicabo
                        velit illo, soluta, inventore hic.</p>
                    <span class="footer-link">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </span>
                </div>
                <div class="col-2 ">
                    <div class="footer-title">
                        <h4>Menu</h4>
                    </div>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Rooms</li>
                        <li>Blog</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="col-2 ">
                    <div class="footer-title">
                        <h4>Meet Kinsley</h4>
                    </div>
                    <ul>
                        <li>Gallery</li>
                        <li>Restaurant</li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="footer-title">
                        <h4>Instagram</h4>
                    </div>
                    <div class="row">
                        <div class="ins-img col-4">
                            <img src="../public/about/about-6.jpg" alt="">
                        </div>
                        <div class="ins-img col-4">
                            <img src="../public/about/about-2.jpg" alt="">
                        </div>
                        <div class="ins-img col-4">
                            <img src="../public/about/about-3.jpg" alt="">
                        </div>
                        <div class="ins-img col-4">
                            <img src="../public/about/about-4.jpg" alt="">
                        </div>
                        <div class="ins-img col-4">
                            <img src="../public/about/about-5.jpg" alt="">
                        </div>
                        <div class="ins-img col-4">
                            <img src="../public/about/about-7.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="../public/main.js"></script>
    <script>
        var mainImg = document.getElementById('mainImg');
        var smallImg = document.getElementsByClassName('smallImg');

        smallImg[0].onclick = function() {
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function() {
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function() {
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function() {
            mainImg.src = smallImg[3].src;
        }
        smallImg[4].onclick = function() {
            mainImg.src = smallImg[4].src;
        }
    </script>
</body>

</html>