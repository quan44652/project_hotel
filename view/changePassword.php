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
                        <h4>Đổi mật khẩu</h4>
                        <p>Cập nhập thông tin! <a href="../view/model.php?act=update">Cập nhập</a>| <a href="../view/model.php?act=home">Trở về</a></p>
                        <form action="../view/model.php?act=changePW" method="post">
                            <div class="form-group ">
                            <span class="form-message"><?php if(!empty($messager)) echo $messager ?></span>
                            <span style="color: green;" class="form-message"><?php if(!empty($success)) echo $success ?></span>
                                <label for="" class="form-lable">Mật khẩu cũ</label>
                                <input name="password" id="fullname" type="text">
                                <span class="form-message"></span>
                            </div> 
                            <div class="form-group ">
                                <label for="" class="form-lable">Mật khẩu mới</label>
                                <input name="new_password" id="fullname" type="text">
                                <span class="form-message"></span>
                            </div> 
                            <div class="form-group ">
                                <label for="" class="form-lable"> Nhập lại mật khẩu mới</label>
                                <input name="cf_password" id="fullname" type="text">
                                <span class="form-message"></span>
                            </div> 
                            <button type="submit" name="submit" class="btn3">Đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>