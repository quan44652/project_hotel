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
                    <li><a class="navbar__link" href="">
                            <span class="navnar_icon"><i class="fa-solid
                                    fa-list"></i></span>
                            <span class="navnar_title">Kind of room</span>
                        </a></li>
                    <li><a class="navbar__link active" href="">
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
              <h1>Quản lí hóa đơn</h1>
              <table border="1">
                <thead>
                    <tr>
                        <td width="100px">Order ID</td>
                        <td width="180px">User name</td>
                        <td width="180px">Room</td>
                        <td width="180px">Start date</td>
                        <td width="180px">End date</td>
                        <td width="180px">Phone</td>
                        <td width="300px">ACtive</td>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>quanna</td>
                        <td>quanna</td>
                        <td>quanna</td>
                        <td>quanna</td>
                        <td>quanna</td>
                        <td><a href=""><button class="btn update">CheckIn</button></a> | <a href=""><button class="btn delete">CheckOut</button></a></td>
                    </tr>
                </tbody>
              </table>
    
            </section>
        </div>
    </body>
    <?php require ('../footer.php') ?>