
            <section class=" layout">
              <h1>Quản lí kiểu phòng</h1>
                <a href="../controller/index.php?act=add_cate">Thêm kiểu phòng</a>
              <table border="1">
                <thead>
                    <tr>
                        <td width="100px">Cate ID</td>
                        <td width="300px">Name</td>
                        <td width="200px">Active</td>
                       
                    </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($listCate as $cate) {
                    ?>
                      <tr>
                        <td><?php echo $cate['cate_id'] ?></td>
                        <td><?php echo $cate['cate_name'] ?></td>
                        <td><a href="../controller/index.php?act=fix_cate&id=<?php echo $cate['cate_id'] ?>"><button class="btn update">Sửa</button></a> | <a href="../controller/index.php?act=delete_cate&id=<?php echo $cate['cate_id'] ?>"><button class="btn delete">Xóa</button></a></td>
                    </tr>
                    <?php
                  }
                  ?>

                 
                </tbody>
              </table>
    
            </section>
        </div>
    </body>