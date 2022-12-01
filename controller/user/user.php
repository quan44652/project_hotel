<section class=" layout">
    <h1>Quản lí tài khoản khách hàng</h1>
    <table border="1">
        <thead>
            <tr>
                <td width="100px">User ID</td>
                <td width="200px">Full name</td>
                <td width="200px">Phone</td>
                <td width="200px">Address</td>
                <td width="200px">Email</td>
                <td width="200px">Password</td>
                <td width="250px">Active</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listUser as $user) {
                if ($user['role'] == 1) {
            ?>
                    <tr>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['ful_name'] ?></td>
                        <td><?php echo $user['phone'] ?></td>
                        <td><?php echo $user['address'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['password'] ?></td>
                        <td><a href="../controller/index.php?act=staff&id=<?php echo $user['user_id'] ?>"><button class="btn update">Cấp quyền</button>|<a href="../controller/index.php?act=detete_user&id=<?php echo $user['user_id'] ?>"><button class="btn delete">Xóa</button></a></td>
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