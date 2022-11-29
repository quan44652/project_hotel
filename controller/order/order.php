<section class=" layout">
    <h1>Lịch sử đặt phòng</h1>
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
                <td width="240px">End date</td>
                <td width="200px">Phone</td>

            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($listbook as $book) {
                if($book['status'] == 3) {
            ?>
                <tr>
                    <td><?php echo $book['booking_id'] ?></td>
                    <td><?php echo $book['ful_name'] ?></td>
                    <td><?php echo $book['room_id'] ?></td>
                    <td><?php echo $book['start_date'] ?></td>
                    <td><?php echo $book['end_date'] ?></td>
                    <td><?php echo $book['phone'] ?></td>
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