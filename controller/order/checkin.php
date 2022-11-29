<section class=" layout">
    <h1>Quản lí Đặt phòng</h1>
    <ul class="booking">
        <li><a class="btn update" href="../controller/index.php?act=pay">Thanh toán</a></li>
        <li><a class="btn update" href="../controller/index.php?act=checkin">Đặt phòng</a></li>
        <li><a class="btn update" href="../controller/index.php?act=checkout">Trả phòng</a></li>
        <li><a class="btn update" href="../controller/index.php?act=order">Lịch sử đặt phòng</a></li>

    </ul>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">Order ID</td>
                <td width="250px">Full name</td>
                <td width="180px">Room</td>
                <td width="200px">Start date</td>
                <td width="200px">End date</td>
                <td width="240px">Phone</td>
                <td width="200px">ACtive</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbook as $book) {
                if ($book['status'] == 1) {
            ?>
                    <tr>
                        <td><?php echo $book['booking_id'] ?></td>
                        <td><?php echo $book['ful_name'] ?></td>
                        <td><?php echo $book['room_id'] ?></td>
                        <td><?php echo $book['start_date'] ?></td>
                        <td><?php echo $book['end_date'] ?></td>
                        <td><?php echo $book['phone'] ?></td>
                        <td><a href="../controller/index.php?act=checkout&id=<?php echo $book['id'] ?>"><button class="btn update">CheckIn</button></a></td>
                    </tr>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

</section>
</div>
</body>