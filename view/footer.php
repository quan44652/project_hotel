<footer class="footer">
    <div class="row">
        <div class="col-4">
            <div class="logo footer-title">
                <img src="../public/logo/logo-w.svg" alt="">
            </div>
            <p>Sequi dolores ratione eos eveniet provident soluta.
                Omnis nesciunt sit eos at, eius voluptatum rem
                corporis. Doloremque labore assumenda explicabo
                velit illo, soluta, inventore hic.</p>
            <span class="footer-link">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </span>
        </div>
        <div class="col-2 ">
            <div class="footer-title">
                <h4>Menu</h4>
            </div>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Rooms</li>
                <li>Blog</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="col-2 ">
            <div class="footer-title">
                <h4>Meet Kinsley</h4>
            </div>
            <ul>
                <li>Gallery</li>
                <li>Restaurant</li>
            </ul>
        </div>
        <div class="col-4">
            <div class="footer-title">
                <h4>Instagram</h4>
            </div>
            <div class="row">
                <div class="ins-img col-4">
                    <img src="../public/about/about-6.jpg" alt="">
                </div>
                <div class="ins-img col-4">
                    <img src="../public/about/about-2.jpg" alt="">
                </div>
                <div class="ins-img col-4">
                    <img src="../public/about/about-3.jpg" alt="">
                </div>
                <div class="ins-img col-4">
                    <img src="../public/about/about-4.jpg" alt="">
                </div>
                <div class="ins-img col-4">
                    <img src="../public/about/about-5.jpg" alt="">
                </div>
                <div class="ins-img col-4">
                    <img src="../public/about/about-7.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="../public/main.js"></script>
<script>
       var checkin = document.getElementById('checkin');
        var checkout = document.getElementById('checkout');

        var getCheckIn =new Array();
        var getCheckOut =new Array();
     
        checkin.onchange = function () {
                getCheckIn.push(checkin.value);
                var date = getCheckIn[getCheckIn.length - 1]
                checkout.min = date;
                console.log(getCheckIn[getCheckIn.length - 1]);
            }
         

            // var array = [checkin()];
           
           
            checkout.onchange = function () {
               
                getCheckOut.push(checkout.value);
                var date = getCheckOut[getCheckOut.length - 1];
                checkin.max = date;
                console.log(getCheckOut[getCheckOut.length - 1]);
            }
           
    var nextWidth2 = 434;

    setInterval(function() {
        if (nextWidth2 <= -4046) {
            nextWidth2 = 434;
        }
        nextWidth2 += -640;
        document.querySelector('.feedbacks').style.marginLeft = nextWidth2 + 'px';
    }, 3000);
</script>
<script>
    var mainImg = document.getElementById('mainImg');
    var smallImg = document.getElementsByClassName('smallImg');

    smallImg[0].onclick = function() {
        mainImg.src = smallImg[0].src;
    }
    smallImg[1].onclick = function() {
        mainImg.src = smallImg[1].src;
    }
    smallImg[2].onclick = function() {
        mainImg.src = smallImg[2].src;
    }
    smallImg[3].onclick = function() {
        mainImg.src = smallImg[3].src;
    }
    smallImg[4].onclick = function() {
        mainImg.src = smallImg[4].src;
    }
</script>
<script>
    var prev = document.getElementById('prev');
    var next = document.getElementById('next');
    var nextWidth = -206;


    next.onclick = function() {
        if (nextWidth <= -4046) {
            nextWidth = 434;
        }
        nextWidth += -640;
        document.querySelector('.slides').style.marginLeft = nextWidth + 'px';
    }

    prev.onclick = function() {
        if (nextWidth >= -206) {
            nextWidth = -4046;

        }
        nextWidth += 640;
        document.querySelector('.slides').style.marginLeft = nextWidth + 'px';
        console.log(nextWidth);
    }

    setInterval(function() {
        if (nextWidth <= -4046) {
            nextWidth = 434;
        }
        nextWidth += -640;
        document.querySelector('.slides').style.marginLeft = nextWidth + 'px';
    }, 3000);

    // setInterval(function() {
    //     if (nextWidth <= -4046) {
    //         nextWidth = 434;
    //     }
    //     nextWidth += -640;
    //     document.querySelector('.feedbacks').style.marginLeft = nextWidth + 'px';
    // }, 3000);
</script>
</div>
</body>

</html>