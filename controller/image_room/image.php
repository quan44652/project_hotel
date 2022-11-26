<section class=" layout">
    <h1>Quản lí hình ảnh</h1>
    <a href="../controller/index.php?act=add_img">Thêm hình ảnh</a>
    <table border="1">
        <thead>
            <tr>
                <td width="200px"> Room ID</td>
                <td width="200px">Image</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listImage as $image) {
            ?>
                <tr>
                <td><?php echo $image['roomImage_id'] ?></td>
                <td width="200px"><img src='<?php echo $image['image1'] ?>' alt=""></td>
                <td width="200px"><img src='<?php echo $image['image2'] ?>' alt=""></td>
                <td width="200px"><img src='<?php echo $image['image3'] ?>' alt=""></td>
                <td width="200px"><img src='<?php echo $image['image4'] ?>' alt=""></td>
                <td width="200px"><img src='<?php echo $image['image5'] ?>' alt=""></td>
                <td><button class="btn update">Sửa</button> |
                    <button class="btn delete">Xóa</button>
                </td>
                </tr>
            <?php
            }
            ?>


        </tbody>
    </table>

</section>
</div>
</body>