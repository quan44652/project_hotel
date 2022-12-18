<section class=" layout">
    <h1>Thống kê doanh thu</h1>

    </ul>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">STT</td>
                <td width="200px">Loại phòng</td>
                <td width="180px">Tên phòng</td>
                <td width="200px">Ngày đặt phòng</td>
                <td width="200px">Ngày trả phòng</td>
                <td width="200px">Giá</td>
            </tr>
        </thead>
        <tbody>

            <?php
            $tatol = 0;
            $stt = 0;
            foreach ($listbook as $book) {
                $date = abs(strtotime($book['end_date']) - strtotime($book['start_date'])) / (60 * 60 * 24) + 1;
                if ($book['status'] == 3) {
                    $tatol += $book['price']*$date;
                    $stt += 1;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $book['cate_name'] ?></td>
                        <td><?php echo $book['name'] ?></td>
                        <td><?php echo $book['start_date'] ?></td>
                        <td><?php echo $book['end_date'] ?></td>
                        <td><?php echo $book['price']*$date ?> .VNĐ</td>
                    </tr>
                    </tr>
            <?php
                }
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Tổng tiền:</td>
                <td><?php echo $tatol ?> .VNĐ</td>
            </tr>
            <?php
            ?>
        </tbody>
    </table>

</section>
</div>
</body>