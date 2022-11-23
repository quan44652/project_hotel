    <section class="place section-m1">
                <div class="place-title">
                    <h1>Choose your Room</h1>
                    <p>Laborum accusantium libero commodi. Voluptate consequatur
                        itaque expedita accusamus impedit perspiciatis <br>
                        asperiores necessitatibus assumenda magnam ipsa.
                    </p>
                    <a href=""><button class="btn"> <span>Home <i
                                    class="fa-solid fa-chevron-right"></i></span>
                            Rooms</button></a>
                </div>
                <ul class="category">
                    <li> <a href=""> <button"
                                class="btn2 active cat-item">All Rooms</button></a></li>
                    <li> <a href=""> <button"
                                class="btn2 cat-item">Economy</button></a></li>
                    <li> <a href=""> <button"
                                class="btn2 cat-item">Luxe</button></a></li>
                    <li> <a href=""> <button"
                                class="btn2 cat-item">Standard</button></a></li>
                </ul>
                <div class="room_container slider">
                    <div class="room-width row">
                        <?php
                        foreach($listRoom as $room) {
                            ?>
                                   <div class="room-item col-4">
                            <div class="room">
                                <div class="room-img">
                                    <img src='../controller/<?php echo $room['image'] ?>' alt="">
                                </div>
                                <div class="room-content">
                                    <ul class="room-space">
                                        <li>
                                            <i class="fa-solid fa-bed"></i>
                                            <span>Adult: 2</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-square"></i>
                                            <span>Size: 35m<sup>2</sup></span>
                                        </li>
                                    </ul>
                                    <h1> <?php echo $room['name'] ?></h1>
                                    <p>
                                        <?php echo $room['description'] ?>
                                    </p>
                                    <div class="room-book">
                                        <p><span>$ <?php echo $room['price'] ?></span> Per Night</p>
                                        <a href="./model.php?act=detail&id= <?php echo $room['room_id']?>"><button class="btn">Book Now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                               <div class="room-item col-4">
                            <div class="room">
                                <div class="room-img">
                                    <img src="../public/room/room-1.jpg" alt="">
                                </div>
                                <div class="room-content">
                                    <ul class="room-space">
                                        <li>
                                            <i class="fa-solid fa-bed"></i>
                                            <span>Adult: 2</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-square"></i>
                                            <span>Size: 35m<sup>2</sup></span>
                                        </li>
                                    </ul>
                                    <h1>Business Class Room</h1>
                                    <p>
                                        Image for cattle earth. May one Which
                                        life divide sea. Optio veniam quibusdam
                                        fugit aspernatur ratione rerum
                                        necessitatibus ipsa eligendi? Laudantium
                                        beatae aut earum ab doloribus tempore
                                        veritatis repellat natus illo, veniam
                                        quibusdam fugit aspernatur
                                        cumque harum quos esse libero nesciunt,
                                        molestiae saepe, possimus a suscipit.
                                    </p>
                                    <div class="room-book">
                                        <p><span>$59</span> Per Night</p>
                                        <a href="./model.php?act=detail"><button class="btn">Book Now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="place">
                <div class="place-title">
                    <h1>Feedback from our Guests</h1>
                    <p>Consectetur adipisicing elit. Nihil, illum voluptate
                        eveniet ex fugit ea delectus, sed voluptatem. Laborum
                        <br>
                        accusantium libero commodi id officiis itaque esse
                        adipisci, necessitatibus asperiores, illo odio.
                    </p>
                </div>
                <div class="slider">
                    <div class="slides feedbacks">
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-3-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-2-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-1-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-4-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-5-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-6-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-7-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-8-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box">
                            <div class="feedback">
                                <div class="feedback-img">
                                    <img
                                        src="../public/feedback/faces-3-scaled.jpg"
                                        alt="">
                                    <h1>Viktoria Freeman</h1>
                                    <span>From Ukraina</span>
                                </div>
                                <div class="feedback-content">
                                    <span> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i></span>
                                    <p>
                                        Dequi folores dolor sit amet,
                                        consectetur
                                        adipisicing elit. Nesciunt illo,
                                        delectus
                                        totam! Delectus illo magnam voluptatem a
                                        tempora id vitae dolor, quis natus iusto
                                        molestiae ab nam error vero possimus
                                        ullam
                                        facilis porro veritatis?
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
