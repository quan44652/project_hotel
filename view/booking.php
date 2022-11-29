<?php require('./header.php'); ?>

    <div class="banner_img">
        <img style="height:40vh ;" src="../public/banner/banner1.jpg" alt="">
    </div>
    <div class="banner__content">
        <!-- <div class="seaarch_room">
                        <form action="">
                            <div class="form_group">
                                <label>Check-In</label>
                                <input type="date" placeholder="Check-In Date">
                            </div>
                            <div class="form_group">
                                <label>Check-Out</label>
                                <input type="date" placeholder="Check-Out Date">
                            </div>
                            <button class="btn"><a href="./rooms.html">Tìm kiếm</a></button>
                        </form> -->
    </div>

    </div>
</section>
<div class="booking_success section-m2">
    <div class="booking_room">
        <?php 
        $start_date = strtotime($_SESSION['search_history'][0]);
        $end_date = strtotime($_SESSION['search_history'][1]);
        $date = abs($end_date - $start_date)/(60*60*24);
        ?>
        <h4>Xin chào <span><?php echo $_SESSION['user']['ful_name'] ?></span>!</h4>
        <h1>Đặt phòng của bạn đã được xác nhận.</h1>
        <p>+ Phòng của bạn: <?php echo $room['name'] ?></p>
        <p>+ Giá phòng: <span style="color: red;"><?php echo $room['price']*$date?></span>.VNĐ</p>
        <p>+ Ngày nhận phòng: <?php echo $_SESSION['search_history'][0] ?></p>
        <p>+ Ngày trả phòng: <?php echo $_SESSION['search_history'][1] ?></p>
        <p>+ Liên hệ với chúng tôi: 01231241123</p>
    </div>
    <div class="client">
        <h1>Kiểm tra lại thông tin của bạn</h1>
        <?php print_r($_SESSION['user']) ?>
        <p>Họ và tên: <span><?php echo $_SESSION['user']['ful_name'] ?></span></p>
        <p>Số điện thoại: <span><?php echo $_SESSION['user']['phone'] ?></span></p>
        <p>Email: <span><?php echo $_SESSION['user']['email'] ?></span></p>
        <p>Địa chỉ: <span><?php echo $_SESSION['user']['address'] ?></span></p>
    </div>
    <div class="pay">
        <h1>Vui lòng thanh toán để được đặt phòng.</h1>
        <img src="../public/pay/momo.png" alt="">
    </div>
</div>

<?php require ('./footer.php') ?>;