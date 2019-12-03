<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dang_nhap.css" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST['sbm'])) {
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM user_customer
			WHERE email = '$mail'
			AND password = '$pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);

        if ($row > 0) {
            $_SESSION['mail'] = $mail;
            $_SESSION['pass'] = $pass;
            header('location:index.php');
        } else {
            $error1 = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
        }
    }

    ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Question & Answer</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">


                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6" style="border-right: 2px;">
            <?php
            if (isset($error1)) {
                echo $error1;
            }
            ?>
                <form action="" method="post">
                    <div class="col-md-offset-4">
                        <h2 style="color: blue">ĐĂNG NHẬP</h2>
                        <div class="login-form">
                            <div class="form-group"> <input class="form-control" value="" placeholder="name@gmail.com" id="login-name" type="email" name="email"> </div>
                            <div class="form-group"> <input class="form-control" value="" placeholder="Password" id="login-pass" type="password" name="password"> </div>
                            <div class="checkbox"> <label><input type="checkbox">Ghi nhớ tài khoản</label> </div>
                            <button type="submit" name="sbm" class="btn btn-info">Đăng nhập</button>
                            <br>
                            <br> <a href="#"><small>Quên mật khẩu</small></a>
                            <br>

                        </div>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $user_full = $_POST['user_full'];
                $user_mail = $_POST['user_mail'];
                $user_pass = $_POST['user_pass'];
                $user_re_pass = $_POST['user_re_pass'];


                $sql = "SELECT * FROM user_customer
                        WHERE email = '$user_mail'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                if ($row > 0) {
                    $error = '<div class="alert alert-danger">Email đã tồn tại</div>';
                } elseif ($user_pass != $user_re_pass) {
                    $error = '<div class="alert alert-danger">Mật khẩu không khớp !</div>';
                } else {
                    $sql = "INSERT INTO user_customer(name, email, password)
                            VALUES('$user_full', '$user_mail', '$user_pass')";
                    $query = mysqli_query($conn, $sql);
                    header('location:index.php');
                }
            }
            ?>

            <div class="col-md-6" style="border-left: 2px solid">
                <?php
                if (isset($error)) {
                    echo $error;
                }else{
                    echo '<div class="alert alert-secondary" style="background: #2196f3;">Đăng ký thành công mời bạn đăng nhập!</div>';
                }
                
                ?>
                <h2 style="color: blue">ĐĂNG KÝ</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input type="text" class="form-control" placeholder="Tên của bạn" required name="user_full">

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="name@gmail.com" required name="user_mail">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Password của bạn" required name="user_pass">
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Password của bạn" required name="user_re_pass">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" required name="">
                        <label>Tôi đồng ý điều khoản sử dụng</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="submit">Tạo tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>