
            <section class=" layout">
              <h1>Quản lí tài khoản nhan vien</h1>
              <table border="1">
                <thead>
                    <tr>
                        <td width="100px">User ID</td>
                        <td width="100px">Image</td>
                        <td width="200px">Username</td>
                        <td width="200px">Full name</td>
                        <td width="150px">Phone</td>
                        <td width="200px">Address</td>
                        <td width="150px">Email</td>
                        <td width="150px" >Password</td>
                        <td width="100px" >Active</td>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
            foreach ($listUser as $user) {
                if($user['role'] == 2) {
                    ?>
                    <tr>
                    <td><?php echo $user['user_id'] ?></td>
                        <td><img src='<?php echo $user['image'] ?>'alt=""></td>
                        <td><?php echo $user['user_name'] ?></td>
                        <td><?php echo $user['ful_name'] ?></td>
                        <td><?php echo $user['phone'] ?></td>
                        <td><?php echo $user['address'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['password'] ?></td>
                        <td><a href="../controller/index.php?act=detete_staff&id=<?php echo $user['user_id'] ?>"><button class="btn delete">Xóa</button></a></td>
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
