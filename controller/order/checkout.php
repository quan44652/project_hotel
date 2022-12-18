<section class=" layout">
    <h1>Quản lí trả phòng</h1>
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
                <td width="200px">Full name</td>
                <td width="180px">Room</td>
                <td width="160px">Start date</td>
                <td width="160px">End date</td>
                <td width="180px">Phone</td>
                <td width="200px">Price</td>
                <td width="200px">ACtive</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbook as $book) {
                $date = abs(strtotime($book['end_date']) - strtotime($book['start_date'])) / (60 * 60 * 24) + 1;
                if ($book['status'] == 2) {
            ?>
                    <tr>
                        <td><?php echo $book['booking_id'] ?></td>
                        <td><?php echo $book['ful_name'] ?></td>
                        <td><?php echo $book['name'] ?></td>
                        <td><?php echo $book['start_date'] ?></td>
                        <td><?php echo $book['end_date'] ?></td>
                        <td><?php echo $book['phone'] ?></td>
                        <td><?php echo $book['price']*$date ?> .VNĐ</td>
                        <td><a href="../controller/index.php?act=order&id=<?php echo $book['id'] ?>"><button class="btn delete">CheckOut</button></a></td>
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