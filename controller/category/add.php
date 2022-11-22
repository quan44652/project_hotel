
            <section class=" layout">
              <h1>Thêm Kiểu Phòng</h1>
              <span><?php if(!empty($messager)) echo $messager ?></span>
                   <div class="form_container">
                    <form action="../controller/index.php?act=add_cate" method="POST">
                        <div class="form-group">
                            <label for="" class="form-lable">Tên Kiểu phòng</label>
                            <input name="cat_name" id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <button type="submit" name="submit" class="btn">Thêm</button>
                    </form>
                   </div>
            </section>
        </div>
    </body>