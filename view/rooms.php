<?php include('./header.php'); ?>
<div class="banner_img">
    <img style="height:50vh ;" src="../public/banner/banner2.png" alt="">
</div>
<div class="banner__content">
    <div class="seaarch_room">
        <form action="../view/model.php?act=rooms" method="post">
            <div class="form_group">
                <label>Check-In</label>
                <input name="checkin" id="checkin" type="date" placeholder="Check-In Date" value="<?php if (isset($_SESSION['search_history'])) echo $_SESSION['search_history'][0] ?>" min="<?php echo $minDate ?>">
            </div>
            <div class="form_group">
                <label>Check-Out</label>
                <input name="checkout" id="checkout" type="date" placeholder="Check-Out Date" value="<?php if (isset($_SESSION['search_history'])) echo $_SESSION['search_history'][1] ?>" min="<?php echo $minDate ?>">
            </div>
            <button type="submit" name="submit" class="btn"> Tìm kiếm</button>
        </form>
    </div>

</div>
</section>

<section style="padding-top: 0;" class="place section-m1">
    <div class="room_container slider">
        <div class="room-width row">

            <?php 
            if(isset($listRoom)) {
                foreach ($listRoom as $room) {
                    ?>
                        <div class="room-item col-4">
                            <div class="room">
                                <div class="room-img">
                                    <img src="../controller/<?php echo $room['image'] ?>" alt="">
                                </div>
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
                                        <p><span> <?php echo $room['price'] ?>VNĐ</span> / Đêm</p>
                                        <a href="../view/model.php?act=detail&id=<?php echo $room['room_id']?>&id_img=<?php echo $room['roomImage_id']?>"><button class="btn">Book Now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
            }
            else {
                ?>
                <h1 style="margin-left: 50px;">Hiện tại ngày bạn đặt đã hết phòng</h1>
                <?php
            }
            ?>
        </div>

    </div>
    </div>
</section>

<section class="place">
    <div class="place-title">
        <h1>Feedback from our Guests</h1>
        <p>Consectetur adipisicing elit. Nihil, illum voluptate
            eveniet ex fugit ea delectus, sed voluptatem. Laborum
            <br>
            accusantium libero commodi id officiis itaque esse
            adipisci, necessitatibus asperiores, illo odio.
        </p>
    </div>
    <div class="slider">
        <div class="slides feedbacks">
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-3-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-2-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-1-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-4-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-5-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-6-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-7-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-8-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-box">
                <div class="feedback">
                    <div class="feedback-img">
                        <img src="../public/feedback/faces-3-scaled.jpg" alt="">
                        <h1>Viktoria Freeman</h1>
                        <span>From Ukraina</span>
                    </div>
                    <div class="feedback-content">
                        <span> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></span>
                        <p>
                            Dequi folores dolor sit amet,
                            consectetur
                            adipisicing elit. Nesciunt illo,
                            delectus
                            totam! Delectus illo magnam voluptatem a
                            tempora id vitae dolor, quis natus iusto
                            molestiae ab nam error vero possimus
                            ullam
                            facilis porro veritatis?
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?php include('./footer.php'); ?>