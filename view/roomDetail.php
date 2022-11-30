<?php require('./header.php'); ?>
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


        <?php require('./footer.php'); ?>