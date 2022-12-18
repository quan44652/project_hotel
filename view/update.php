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
                <div id="signUp" class="auth_form ">
                    <div class="auth_form__container">
                        <h4>Đăng ký tài khoản</h4>
                        <p> <a href="../view/model.php?act=changePW">Đổi mật khẩu</a>| <a href="../view/model.php?act=home">Trở về</a> </p>
                        <form action="../view/model.php?act=fix_user" method="post">
                            <div class="form-group">
                            <span class="form-message"><?php if(!empty($messager)) echo $messager ?></span>
                            <span style="color: green;" class="form-message"><?php if(!empty($success)) echo $success ?></span>
                                <label for="" class="form-lable">Tên đầy đủ</label>
                                <input name="full_name" id="fullname" type="text" value="<?php if(!empty($user['ful_name'])) echo $user['ful_name'] ?>">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group ">
                                <label for="" class="form-lable">Email</label>
                                <input name="email" id="fullname" type="text" value="<?php if(!empty($user['email'])) echo $user['email'] ?>">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group ">
                                <label for="" class="form-lable">Phone</label>
                                <input name="phone" id="fullname" type="text" value="<?php if(!empty($user['phone'])) echo $user['phone'] ?>">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group ">
                                <label for="" class="form-lable">Địa chỉ</label>
                                <input name="address" id="fullname" type="text" value="<?php if(!empty($user['address'])) echo $user['address'] ?>">
                                <span class="form-message"></span>
                            </div>
                            <input type="hidden" name="id" value="<?php if(!empty($user['user_id'])) echo $user['user_id'] ?>" >
                            <button type="submit" name="submit"  class="btn3">Cập nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>