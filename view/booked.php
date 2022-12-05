<?php require('./header.php');
session_start();?>
<div class="banner_img">
    <img style="height:40vh ;" src="../public/banner/banner1.jpg" alt="">
</div>


</div>
</section>
<section class="success section-m1">
    <h1>Dịch vụ đặt phòng</h1>
    <p>Chúc mừng bạn đã đặt phòng thành công!</p>
    <h4><?php echo $_SESSION['booking_room'][1]?>/<?php echo $_SESSION['booking_room'][2]?> đến ngày <?php echo $_SESSION['booking_room'][3]?>/<?php echo $_SESSION['booking_room'][0]?> vnđ</h4>
    <span>Đơn đặt hàng của bạn đã được xác nhận và chuyển đến nhà cung cấp</span><br>
    <span>Cảm ơn bạn đã chọn Kinsley</span><br>
    <span>Chúc quý khách có một chuyến du lịch như ý.</span>
</section>
<?php require('./footer.php') ?>