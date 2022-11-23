<section class="roomDetail section-m1">
    <div class="Sign-room--img col-6">
        <div class="room-main">
            <img src='../controller/<?php echo $room['image'] ?>' id="mainImg" alt="">
        </div>
        <div class="room-small">
            <div class="room-small--item ">
                <img src='../controller/<?php echo $image['image1'] ?>' alt="" class="smallImg">
            </div>
            <div class="room-small--item ">
                <img src='../controller/<?php echo $image['image2'] ?>' alt="" class="smallImg">
            </div>
            <div class="room-small--item ">
                <img src='../controller/<?php echo $image['image3'] ?>' alt="" class="smallImg">
            </div>
            <div class="room-small--item ">
                <img src='../controller/<?php echo $image['image4'] ?>' alt="" class="smallImg">
            </div>
            <div class="room-small--item ">
                <img src='../controller/<?php echo $image['image5'] ?>' alt="" class="smallImg">
            </div>
        </div>
    </div>

    <div class="sign-room--detail col-6">
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
                <p><span>$<?php echo $room['price'] ?></span> Per Night</p>
            </div>
        </div>
        <div class="seaarch_room">
            <form action="">
                <div class="form_group">
                    <label>Check-In</label>
                    <input type="date" placeholder="Check-In Date">
                </div>
                <div class="form_group">
                    <label>Check-Out</label>
                    <input type="date" placeholder="Check-Out Date">
                </div>
                <div class="form_group">
                    <label>People</label>
                    <select name="" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <button class="btn">Book Now</button>
            </form>
        </div>
    </div>

</section>


<section class="comment section-m2">
    <h1 class="comment-title">Feedback from our Guests</h1>
    <form action="">
        <textarea name="" id=""></textarea>
        <button class="btn2">Send</button>
    </form>

    <div class="comment_list">
        <div class="comment_list-item">
            <div class="comment_list-item--avt">
                <img src="../public/feedback/faces-1-scaled.jpg" alt="">
            </div>
            <div class="comment_list-item--content">
                <h1>Quân Nguyễn</h1>
                <span>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum

                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.</span>
            </div>
        </div>
        <div class="comment_list-item">
            <div class="comment_list-item--avt">
                <img src="../public/feedback/faces-2-scaled.jpg" alt="">
            </div>
            <div class="comment_list-item--content">
                <h1>Quân Nguyễn</h1>
                <span>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum

                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.</span>
            </div>
        </div>
        <div class="comment_list-item">
            <div class="comment_list-item--avt">
                <img src="../public/feedback/faces-3-scaled.jpg" alt="">
            </div>
            <div class="comment_list-item--content">
                <h1>Quân Nguyễn</h1>
                <span>Consectetur adipisicing elit. Nihil, illum voluptate
                    eveniet ex fugit ea delectus, sed voluptatem. Laborum

                    accusantium libero commodi id officiis itaque esse
                    adipisci, necessitatibus asperiores, illo odio.</span>
            </div>
        </div>
    </div>
</section>