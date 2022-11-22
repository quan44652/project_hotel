<section class=" layout">
    <h1>Quản lí phòng</h1>
    <a href="../controller/index.php?act=add_room">Thêm phòng</a>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">Room ID</td>
                <td width="100px">Image</td>
                <td width="200px">Name</td>
                <td width="200px">Price</td>
                <td width="200px">Type</td>
                <td width="350px">Description</td>
                <td width="200px">Active</td>

            </tr>
        </thead>
        <tbody>


            <?php
            foreach ($listRoom as $room) {
            ?>
                <tr>
                    <td><?php echo $room['room_id'] ?></td>
                    <td><img src='<?php echo $room['image'] ?>'alt=""></td>
                    <td><?php echo $room['name'] ?></td>
                    <td><?php echo $room['price'] ?></td>
                    <td><?php echo $room['cate_name'] ?></td>
                    <td><?php echo $room['description'] ?></td>
                    <td><button class="btn update">Sửa</button> | <button class="btn delete">Xóa</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>
</div>
</body>

</html>