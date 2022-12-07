<?php require('./header.php'); ?>
<div class="banner_img">
    <img style="height:40vh ;" src="../public/banner/banner1.jpg" alt="">
</div>
<div class="banner__content">
    <div class="seaarch_room">
        <form action="../view/model.php?act=detail" method="post">
            <div class="form_group">
                <label>Check-In</label>
                <input name="checkin" type="date" placeholder="Check-In Date" value="<?php if (isset($_SESSION['search_history'])) echo $_SESSION['search_history'][0] ?>" min="<?php echo $minDate ?>">
            </div>
            <div class="form_group">
                <label>Check-Out</label>
                <input name="checkout" type="date" placeholder="Check-Out Date" value="<?php if (isset($_SESSION['search_history'])) echo $_SESSION['search_history'][1] ?>" min="<?php echo $minDate ?>">
            </div>
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
        if (isset($_SESSION['user'])) {
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
        <?php
        } else {
        ?>
            <h1 style="padding: 50px 20px;">Bạn cần đăng nhập để đặt phòng!</h1>
        <?php
        }
        ?>
    </div>

</section>


<iframe src="./comment.php?id=<?php echo $room['room_id'] ?>" frameborder="0" width="100%" scrolling="no" onload="resizeIframe(this)"></iframe>

<script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    }
</script>

<?php require('./footer.php'); ?>