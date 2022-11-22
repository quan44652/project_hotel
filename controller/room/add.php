<?php require ('../header.php') ?> 
    <body>
        <div class="app">
            <header>
                <ul class="navnar">
                    <li><a class="navbar__link " href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-house"></i></span>
                            <span class="navnar_title">Home</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-user"></i></span>
                            <span class="navnar_title">User</span>
                        </a></li>
                    <li><a class="navbar__link active" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-briefcase"></i></span>
                            <span class="navnar_title">Room</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-list"></i></span>
                            <span class="navnar_title">Kind of room</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-book"></i></span>
                            <span class="navnar_title">Booking</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-comment"></i></span>
                            <span class="navnar_title">Comment</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-right-from-bracket"></i></span>
                            <span class="navnar_title">Sign Out</span>
                        </a></li>
                </ul>
            </header>
            <section class=" layout">
              <h1>Thêm phòng</h1>
          
                   <div class="form_container">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="form-lable">Tên phòng</label>
                            <input id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Giá</label>
                            <input id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Description</label>
                            <input id="fullname" type="text">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Kiểu phòng</label>
                           <select name="" id="">
                            <option value="">Chọn kiểu phòng</option>
                            <option value="">Chọn kiểu phòng</option>
                            <option value="">Chọn kiểu phòng</option>
                            <option value="">Chọn kiểu phòng</option>
                           </select>
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group ">
                            <label for="" class="form-lable">Hình ảnh</label>
                            <input id="fullname" type="file">
                            <span class="form-message"></span>
                        </div>
                        <button class="btn">Thêm Phòng</button>
                    </form>
                   </div>
            </section>
        </div>
    </body>
    <?php require ('../footer.php') ?>