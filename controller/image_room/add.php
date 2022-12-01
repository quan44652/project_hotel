<section class=" layout">
    <h1>Thêm Hình ảnh</h1>
    <span><?php if (!empty($messager)) echo $messager ?></span>
    <div class="form_container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group ">
                <label for="" class="form-lable">Hình ảnh</label>
                <input name="image1" id="fullname" type="file">
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <label for="" class="form-lable">Hình ảnh</label>
                <input name="image2" id="fullname" type="file">
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <label for="" class="form-lable">Hình ảnh</label>
                <input name="image3" id="fullname" type="file">
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <label for="" class="form-lable">Hình ảnh</label>
                <input name="image4" id="fullname" type="file">
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <label for="" class="form-lable">Hình ảnh</label>
                <input name="image5" id="fullname" type="file">
                <span class="form-message"></span>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>
</section>
</div>
</body>