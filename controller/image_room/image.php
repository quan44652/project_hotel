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
                    <li><a class="navbar__link " href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-briefcase"></i></span>
                            <span class="navnar_title">Room</span>
                        </a></li>
                    <li><a class="navbar__link " href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-list"></i></span>
                            <span class="navnar_title">Kind of room</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-book"></i></span>
                            <span class="navnar_title">Booked</span>
                        </a></li>
                    <li><a class="navbar__link" href="">    
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-comment"></i></span>
                            <span class="navnar_title">Comment</span>
                        </a></li>
                    <li><a class="navbar__link active" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-image"></i></span>
                            <span class="navnar_title">Image Room</span>
                        </a></li>
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-right-from-bracket"></i></span>
                            <span class="navnar_title">Sign Out</span>
                        </a></li>
                </ul>
            </header>
            <section class=" layout">
                <h1>Quản lí hình ảnh</h1>
                <a href="">Thêm hình ảnh</a>
                <table border="1">
                    <thead>
                        <tr>
                            <td width="200px"> Room Name</td>
                            <td width="200px">Image</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td width="200px"><img src="../public/room/room-1.jpg"
                                    alt=""></td>
                            <td width="200px"><img src="/public/room/room-1.jpg"
                                    alt=""></td>
                            <td width="200px"><img src="/public/room/room-1.jpg"
                                    alt=""></td>
                            <td width="200px"><img src="/public/room/room-1.jpg"
                                    alt=""></td>
                            <td width="200px"><img src="/public/room/room-1.jpg"
                                    alt=""></td>

                            <td><button class="btn update">Sửa</button> |
                                <button class="btn delete">Xóa</button></td>
                        </tr>


                    </tbody>
                </table>

            </section>
        </div>
    </body>
    <?php require ('../footer.php') ?> 