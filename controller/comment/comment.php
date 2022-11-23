<section class=" layout">
    <h1>Quản lí bình luận</h1>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">Comment ID</td>
                <td width="150px">User name</td>
                <td width="200px">Room</td>
                <td width="500px">Content</td>
                <td width="200px">Time</td>
                <td width="200px">ACtive</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listComment as $comment) {
            ?>
                <tr>
                    <td><?php echo $comment['id'] ?></td>
                    <td><?php echo $comment['user_name'] ?></td>
                    <td><?php echo $comment['name'] ?></td>
                    <td><?php echo $comment['content'] ?></td>
                    <td><?php echo $comment['time'] ?></td>
                    <td><a href="../controller/index.php?act=delete_cate&id=<?php echo $comment['cate_id'] ?>"><button class="btn delete">Xóa</button></a></td>
                </tr>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>1</td>
                <td>quanna</td>
                <td>quanna</td>
                <td>quanna</td>
                <td>quanna</td>
                <td><button class="btn delete">Xóa</button></td>
            </tr>
        </tbody>
    </table>

</section>
</div>
</body>