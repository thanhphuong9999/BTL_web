<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Đăng nhập tài khoản</title>
       
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dang_nhap.css"/>
        <script src="jquery/jquery.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Question & Answer</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">TRANG CHỦ</a></li>
                    <li><a href="#">ASK QUESTIONS</a></li>
                </ul>
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
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://localhost:8080/webQA/sign_in.php">ĐĂNG NHẬP</a></li>
                    <li><a href="http://localhost:8080/webQA/sign_up.php">ĐĂNG KÝ</a></li>
                </ul>    
            </div>
        </div>
    </nav>
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-3 col-md-offset-4"> 
                <h2 style="color: blue">ĐĂNG NHẬP</h2> 
                <div class="login-form"> 
                   <div class="form-group"> <input class="form-control" value="" placeholder="name@gmail.com" id="login-name" type="email"> </div> 
                   <div class="form-group"> <input class="form-control" value="" placeholder="Password" id="login-pass" type="password"> </div> 
                   <div class="checkbox"> <label><input type="checkbox">Ghi nhớ tài khoản</label> </div> 
                   <a class="btn btn-info" href="http://localhost:8080/webQA/layout.php">Đăng nhập</a> 
                   <br> 
                   <br> <a href="#"><small>Quên mật khẩu</small></a> 
                   <br>
                   <div><small>Không có tài khoản?</small> <a href="http://localhost:8080/webQA/sign_up.php"><small>Tạo tài khoản</small></a></div> 
                </div> 
            </div> 
        </div>
    </div>
</body>
</html>
