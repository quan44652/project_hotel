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
              <h1>Quản lí phòng</h1>
              <a href="">Thêm phòng</a>
              <table border="1">
                <thead>
                    <tr>
                        <td width="100px">Room ID</td>
                        <td width="100px">Image</td>
                        <td width="200px">Name</td>
                        <td width="200px">Price</td>
                        <td width="200px">Type</td>
                        <td width="350px">Description</td>
                        <td width="200px" >Active</td>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="../public/feedback/faces-1-scaled.jpg" alt=""></td>
                        <td>quanna</td>
                        <td>Nguyễn Anh Quân</td>
                        <td>0123456789</td>
                        <td>quanna123456</td>
                        <td><button class="btn update">Sửa</button> | <button class="btn delete">Xóa</button></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><img src="../public/feedback/faces-1-scaled.jpg" alt=""></td>
                        <td>quanna</td>
                        <td>Nguyễn Anh Quân</td>
                        <td>0123456789</td>
                        <td> quanna123456 </td>
                        <td><a href=""><button class="btn update">Sửa</button></a> | <a href=""><button class="btn delete">Xóa</button></a></td>
                    </tr>
                </tbody>
              </table>
            </section>
        </div>
    </body>
</html>