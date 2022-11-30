
            <section class=" layout">
              <h1>Sửa Kiểu Phòng</h1>
              <span><?php if(!empty($messager)) echo $messager ?></span>
                   <div class="form_container">
                    <form action="../controller/index.php?act=update_cate" method="post">
                        <div class="form-group">
                            <label for="" class="form-lable">Tên Kiểu phòng</label>
                            <input name="cate_name" id="fullname" type="text" value="<?php if(!empty($cate['cate_name'])) echo $cate['cate_name'] ?>">
                            <input name="id" type="hidden" value="<?php if(!empty($cate['cate_id'])) echo $cate['cate_id'] ?>">
                            <span class="form-message"></span>
                        </div>
                        <button name="submit" type="submit" class="btn">Sửa</button>
                    </form>
                   </div>
            </section>
        </div>
    </body>
