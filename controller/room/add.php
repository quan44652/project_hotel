
            <section class=" layout">
              <h1>Thêm phòng</h1>
            <span><?php if(!empty($messager)) echo $messager ?></span>
                   <div class="form_container">
                    <form action="../controller/index.php?act=add_room" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="form-lable">Tên phòng</label>
                            <input name="name" id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Giá</label>
                            <input name="price" id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Description</label>
                            <input name="desc" id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">image_id</label>
                            <input name="roomImage_id" id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Kiểu phòng</label>
                           <select name="cate_id" id="">
                           <option value="">Chọn kiểu phòng</option>
                            <?php
                            foreach($listCate as $cate) {
                                ?>
                                <option value="<?php echo $cate['cate_id'] ?>"><?php echo $cate['cate_name'] ?></option>
                                <?php
                            }
                            ?>
                           </select>
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Hình ảnh</label>
                            <input name="image" id="fullname" type="file">
                            <span class="form-message"></span>
                        </div>
                        <button name="submit" type="submit" class="btn">Thêm Phòng</button>
                    </form>
                   </div>
            </section>
        </div>
    </body>
