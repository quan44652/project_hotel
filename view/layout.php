<?php require('./header.php'); ?>
            <div class="banner_img">
                <img src="../public/banner/banner1.jpg" alt="">
            </div>
            <div class="banner__content">
                <div class="banner_title">
                    <span class="banner_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                    <h1>
                        Welcome To Kinsley
                    </h1>
                    <p>Deleniti nostrum laboriosam praesentium quasi quam
                        voluptate.</p>
                </div>
                <div class="seaarch_room">
                    <form action="../view/model.php?act=home" method="post">
                        <div class="form_group">
                            <label>Check-In</label>
                            <input name="checkin" id="checkin" type="date" placeholder="Check-In Date" value = "<?php echo $minDate ?>" min="<?php echo $minDate ?>">
                        </div>
                        <div class="form_group">
                            <label>Check-Out</label>
                            <input name="checkout" id="checkout" type="date" placeholder="Check-Out Date" value = "<?php echo $minDate ?>" min="<?php echo $minDate ?>">
                        </div>
                        <button type="submit" name="submit" class="btn"> Tìm kiếm</button>
                    </form>
                </div>

            </div>
        </section>
        <section class="feature ">
            <div class="features">
                <div class="feature_item col-3">
                    <img src="../public/feature/f-1.svg" alt="">
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <img src="../public/feature/f-2.svg" alt="">
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <img src="../public/feature/f-3.svg" alt="">
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <img src="../public/feature/f-4.svg" alt="">
                    <span>All inclusive</span>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about-cart">
                <div class="row">
                    <div class="about-img col-6">
                        <img src="../public/about/about-t1.jpg" alt="">
                    </div>
                    <div class="about-content col-6">
                        <h2 class="about-cart--title">
                            We have 17+ years of Experience
                        </h2>
                        <p>Consectetur adipisicing elit. Nihil, illum
                            voluptate eveniet ex fugit ea delectus, sed
                            voluptatem. Laborum accusantium libero commodi
                            id officiis itaque esse adipisci, necessitatibus
                            asperiores, illo odio.</p>
                        <button class="btn">More About Us</button>
                    </div>
                    <div class="about-content col-6">
                        <h2>Start your Amazing Adventure!</h2>
                        <p>Consectetur adipisicing elit. Nihil, illum
                            voluptate eveniet ex fugit ea delectus, sed
                            voluptatem. Laborum accusantium libero commodi
                            id officiis itaque esse adipisci, necessitatibus
                            asperiores, illo odio.</p>
                        <button class="btn">Chose A Room</button>
                    </div>
                    <div class="about-img col-6">
                        <img src="../public/about/about-t2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="place">
            <div class="place-title">
                <h1>Kinsley is Waiting for You!</h1>
                <p>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum
                    <br>
                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.
                </p>
                <button class="btn">More Our Places</button>
            </div>
            <div class="slider">
                <div class="slides">
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-7.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-1.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-2.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-3.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-4.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-5.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-6.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-7.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                    <div class="slide-box">
                        <div class="slide">
                            <img src="../public/about/about-1.jpg" alt="">
                            <i class="fa-solid
                                    fa-magnifying-glass icon"></i>
                            <span>View form sea</span>
                        </div>
                    </div>
                </div>
                <span class="navigation-manual">
                    <i id="prev" class="fa-solid fa-arrow-left"></i>
                    <i id="next" class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
        </section>

        <section class="feature ">
            <div class="features">
                <div class="feature_item col-3">
                    <p class="font">4</p>
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <p class="font">145</p>
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <p class="font">6</p>
                    <span>All inclusive</span>
                </div>
                <div class="feature_item col-3">
                    <p class="font">4587</p>
                    <span>All inclusive</span>
                </div>
            </div>
        </section>

        <section class="place section-m1">
            <div class="place-title">
                <h1>Our Best Rooms</h1>
                <p>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum
                    <br>
                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.
                </p>
                <a href=""><button class="btn">All Room</button></a>
            </div>
            <div class="room_container slider">
                <div class="room-width row">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/room/room-2.jpg" alt="">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/room/room-3.jpg" alt="">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/room/room-4.jpg" alt="">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/room/room-5.jpg" alt="">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/room/room-6.jpg" alt="">
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
                                    <a href=""><button class="btn">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="place ">
            <div class="place-title">
                <h1>Around The Hotel</h1>
                <p>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum
                    <br>
                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.
                </p>
                <button class="btn">Services</button>
            </div>
            <div class="services section-m1">
                <div class="row">
                    <div class="service-item col-4">
                        <div class="service">
                            <div class="service-img">
                                <img src="../public/services/service-4.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h1>Playroom</h1>
                                <div class="hidden">
                                    <p>
                                        Image for cattle earth. May one
                                        Which life divide sea. Commodi
                                        soluta minima nemo,…
                                    </p>
                                    <button class="btn">Read More</button>
                                </div>
                            </div>
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="service-item col-4">
                        <div class="service">
                            <div class="service-img">
                                <img src="../public/services/service-2.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h1>Pool</h1>
                                <div class="hidden">
                                    <p>
                                        Image for cattle earth. May one
                                        Which life divide sea. Commodi
                                        soluta minima nemo,…
                                    </p>
                                    <button class="btn">Read More</button>
                                </div>
                            </div>
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="service-item col-4">
                        <div class="service">
                            <div class="service-img">
                                <img src="../public/services/service-1.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h1>Lounge Bar</h1>
                                <div class="hidden">
                                    <p>
                                        Image for cattle earth. May one
                                        Which life divide sea. Commodi
                                        soluta minima nemo,…
                                    </p>
                                    <button class="btn">Read More</button>
                                </div>
                            </div>
                            <span>Free</span>
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
                                <img src="../public/feedback/faces-3-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-2-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-1-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-4-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-5-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-6-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-7-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-8-scaled.jpg" alt="">
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
                                <img src="../public/feedback/faces-3-scaled.jpg" alt="">
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

        <section class="place section-m2">
            <div class="place-title">
                <h1>Our Newsletter</h1>
                <p>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum
                    <br>
                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.
                </p>
                <a href=""><button class="btn">All Publications</button></a>
            </div>
            <div class="room_container slider">
                <div class="room-width row">

                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img height="240px" src="../public/blog/blog-1.jpg" alt="">
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
                                <h1>The Ultimate Guide to Traveling When You
                                    Have No Money</h1>
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
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/blog/blog-2.jpg" alt="">
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
                                <h1>The Ultimate Guide to Traveling When You
                                    Have No Money</h1>
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
                            </div>
                        </div>
                    </div>
                    <div class="room-item col-4">
                        <div class="room">
                            <div class="room-img">
                                <img src="../public/blog/blog-3.jpg" alt="">
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
                                <h1>The Ultimate Guide to Traveling When You
                                    Have No Money</h1>
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php include('./footer.php'); ?>
