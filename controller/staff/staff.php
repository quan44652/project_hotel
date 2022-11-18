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
                    <li><a class="navbar__link active" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-user"></i></span>
                            <span class="navnar_title">User</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
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
              <h1>Quản lí tài khoản khách hàng</h1>
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
                    <tr>
                        <td>1</td>
                        <td><img src="../public/feedback/faces-1-scaled.jpg" alt=""></td>
                        <td>quanna</td>
                        <td>Nguyễn Anh Quân</td>
                        <td>0123456789</td>
                        <td>Hà Nội</td>
                        <td>quanna123456</td>
                        <td>123456789</td> 
                        <td><button class="btn delete">Xóa</button></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><img src="../public/feedback/faces-1-scaled.jpg" alt=""></td>
                        <td>quanna</td>
                        <td>Nguyễn Anh Quân</td>
                        <td>0123456789</td>
                        <td>Hà Nội</td>
                        <td>quanna123456</td>
                        <td>123456789</td> 
                        <td><button class="btn delete">Xóa</button></td>
                    </tr>
                </tbody>
              </table>
            </section>
        </div>
    </body>
<?php require ('../footer.php') ?>