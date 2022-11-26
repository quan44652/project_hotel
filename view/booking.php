<section class="place booking_header">
    <div class="place-title">
        <h1>Kinsley is Waiting for You!</h1>
        <p>Consectetur adipisicing elit. Nihil, illum voluptate
            eveniet ex fugit ea delectus, sed voluptatem. Laborum
            <br>
            accusantium libero commodi id officiis itaque esse
            adipisci, necessitatibus asperiores, illo odio.
        </p>
    </div>
</section>

<div class="booking_list">
    <table width="100%">
        <thead>
            <td>STT</td>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td>Check In</td>
            <td>Check Out</td>
            <td>Status</td>
        </thead>
        <tbody>
            <?php
            $total = 0;
            $stt = 0;
            foreach ($listBook as $book) {
                $stt +=1;
                $total += $book['price'];
              
            ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><img src="../controller/<?php echo $book['image'] ?>" alt=""></td>
                    <td><?php echo $book['name'] ?></td>
                    <td><?php echo $book['price'] ?></td>
                    <td><?php echo $book['start_date'] ?></td>
                    <td><?php echo $book['end_date'] ?></td>
                    <td>Đang đặt</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="total">
        <h4>Tổng số tiền: <span>$<?php echo $total ?></span></h4>
        <button class="btn">Thanh toán</button>
    </div>

</div>