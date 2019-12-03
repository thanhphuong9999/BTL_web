<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Đăng nhập tài khoản</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dang_ki.css"/>
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
                    <li><a href="../web/giao%20dien/sign_in.html">ĐĂNG NHẬP</a></li>
                    <li class="active"><a href="../web/giao%20dien/sign_up.html">ĐĂNG KÝ</a></li>
                </ul>    
            </div>
        </div>
    </nav>
    <div class="container"> 
            <div class="row"> 
                <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
                   

                    <div class="form-group">
                            <div class="form-row">
                               <div class="col">
                                  <label>Tên</label>
                                  <input type="text" class="form-control" placeholder="Tên của bạn" required name="">
                               </div>
                               <div class="col">
                                  <label>Họ</label>
                                  <input type="text" class="form-control" placeholder="Họ của bạn" required name="">
                               </div>
                            </div>
                    </div>
        
                    <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="name@gmail.com" required name="">
                    </div>
        
                    <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Password của bạn" required name="">
                    </div>
        
                    
                    <div class="form-group">
                            <input type="checkbox" required name="">
                            <label>Tôi đồng ý điều khoản sử dụng</label>
                    </div>
        
                    <div class="form-group">
                            <a href="http://localhost:8080/webQA/layout.php"><button class="btn btn-success" type="submit">Tạo tài khoản</button></a> 
                    </div>
                </div> 

                
            </div>
    </div>
</body>
</html>
