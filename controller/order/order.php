<section class=" layout">
    <h1>Quản lí hóa đơn</h1>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">Order ID</td>
                <td width="180px">User name</td>
                <td width="180px">Room</td>
                <td width="200px">Start date</td>
                <td width="200px">End date</td>
                <td width="200px">Phone</td>
                <td width="300px">ACtive</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbook as $book) {
            ?>
                <tr>
                    <td><?php echo $book['booking_id'] ?></td>
                    <td><?php echo $book['user_name'] ?></td>
                    <td><?php echo $book['room_id'] ?></td>
                    <td><?php echo $book['start_date'] ?></td>
                    <td><?php echo $book['end_date'] ?></td>
                    <td><?php echo $book['phone'] ?></td>
                    <td><a href=""><button class="btn update">CheckIn</button></a> | <a href=""><button class="btn delete">CheckOut</button></a>| <a href="../controller/index.php?act=delete_order&id=<?php echo $book['booking_id'] ?>"><button class="btn delete">Thanh toán</button></a></td>
                </tr>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</section>
</div>
</body>