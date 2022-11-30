<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../public/layout.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="modal-section ">
            <div class="modal_overlay">
                <div class="auth_form ">
                    <div class="auth_form__container">
                        <h4>Đăng nhập</h4>
                        <p>Bạn đã có tài khoản? <a href="../view/model.php?act=resgeter">Đăng ký</a> | <a href="../view/model.php?act=home">Trở về</a></p>
                        <form action="../view/model.php?act=login" method="post">
                            <div class="form-group">
                            <span class="form-message"><?php if(!empty($messager)) echo $messager ?></span>
                                <label for="" class="form-lable">Email</label>
                                <input name="email" id="fullname" value="<?php if(!empty($email)) echo $email ?>" type="text">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group ">
                                <label for="" class="form-lable">Mật khẩu</label>
                                <input name="password" id="fullname" type="text">
                                <span class="form-message"></span>
                            </div> 
                            <p>Bạn đã quên mật khẩu? <a href="../view/model.php?act=forget">Quên mật khẩu</a></p>
                            <button type="submit" name="submit" class="btn3">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>