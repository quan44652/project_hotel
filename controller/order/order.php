<body>
    <div>
        <section class=" layout">
            <h1>Quản lí hóa đơn</h1>
            <table border="1">
                <thead>
                    <tr>
                        <td width="100px">Order ID</td>
                        <td width="180px">User name</td>
                        <td width="180px">Room</td>
                        <td width="200px">Start date</td>
                        <td width="200px">End date</td>
                        <td width="200px">Phone</td>
                        <td width="300px">ACtive</td>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listbook as $book) {
            ?>
                    <tr>
                        <td>
                            <?php echo $book['booking_id'] ?>
                        </td>
                        <td>
                            <?php echo $book['user_name'] ?>
                        </td>
                        <td>
                            <?php echo $book['room_id'] ?>
                        </td>
                        <td>
                            <?php echo $book['start_date'] ?>
                        </td>
                        <td>
                            <?php echo $book['end_date'] ?>
                        </td>
                        <td>
                            <?php echo $book['phone'] ?>
                        </td>
                        <td>
                            <a href="./checkin.php" target="_blank">
                                <button id="btn_checkin <?php echo $book['booking_id']?>"
                                    onclick="CheckInClick(<?php echo $book['booking_id'] ?>)" class="btn update">
                                    CheckIn
                                </button>
                            </a>
                            |
                            <a href="./checkout.php" target="_blank">
                                <button id="btn_checkout <?php echo $book['booking_id'] ?>"
                                    onclick="CheckOutClick(<?php echo $book['booking_id'] ?>)" class="btn delete">
                                    CheckOut
                                </button>
                            </a>
                        </td>
                    </tr>
                    </tr>
                    <?php
            }
            ?>
                </tbody>
            </table>

        </section>
    </div>
</body>
<script>
    function CheckInClick(checkin) {
        var btn_checkin = document.getElementById("btn_checkin " + checkin);
        btn_checkin.style.display = "none"
    };
    function CheckOutClick(id) {
        var btn_checkin = document.getElementById("btn_checkin " + id);
        btn_checkin.style.display = "inline-block";
        var btn_checkout = document.getElementById("btn_checkout " + id);
        btn_checkout.style.display = "inline-block";
    };
</script>

