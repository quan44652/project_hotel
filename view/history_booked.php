<?php require('./header.php'); ?>
<div class="banner_img">
    <img style="height:40vh ;" src="../public/banner/banner1.jpg" alt="">
</div>


</section>
<section class="history section-m2">
    <h1>Lịch sử đặt phòng</h1>
    <table width="100%" border="1">
        <thead>
            <tr>
                <td width="200px">Mã phòng</td>
                <td width="250px">Tên phòng</td>
                <td width="250px">Ngày đặt</td>
                <td width="250px">Ngày trả</td>
                <td width="200px">Giá</td>
                <td width="200px">Trạng thái</td>
            </tr>
        </thead>
        <tbody class="cart-box">
            <?php
            $stt = 0;
            foreach ($booked as $book) {
                if ($book['status'] >= 1) {
                    $stt += 1;
            ?>
                    <tr class="pro-box">
                        <td><?php echo $stt ?></td>
                        <td><?php echo $book['name'] ?></td>
                        <td><?php echo $book['start_date'] ?></td>
                        <td><?php echo $book['end_date'] ?></td>
                        <td><?php echo $book['price'] ?> .VNĐ</td>
                        <td><?php echo $book['status'] == 1 ? 'Đã đặt' : ($book['status'] == 2 ? 'Đang dùng' : 'Đã dùng');  ?></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>

</section>
<?php require('./footer.php'); ?>