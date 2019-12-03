<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Q & A</title>
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css"/>
  <script src="jquery/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>

  <!-- tạo nội dung trang trên cùng -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        
        <a class="navbar-brand" href="#">Question & Answer</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">TRANG CHỦ</a></li>
          <li><a href="http://localhost:8080/webQA/questions.php">ASK QUESTIONS</a></li>
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
          <li><a href="http://localhost:8080/webQA/sign_in.php">ĐĂNG NHẬP</a></li>
          <li><a href="http://localhost:8080/webQA/sign_up.php">ĐĂNG KÝ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- tạo nội dung cột trái -->
  <div class="container text-center">    
    <div class="row">
      <div class="col-sm-3 well">
        <div class="well">
          <p><a href="#">DANH MỤC</a></p>
          <p>
            <a class="label label-default" href="#">IT</a>
            <a class="label label-primary" href="#">IOS</a>
            <a class="label label-success" href="#">Khoa học</a>
            <a class="label label-info" href="#">Giải toán</a>
            <a class="label label-warning" href="#">Học tập</a>
            <a class="label label-danger" href="#">Sức khỏe và làm đẹp</a>
          </p>
        </div>
        <p><a href="#">HƯỚNG DẪN</a></p>
        <p><a href="http://localhost:8080/webQA/dieu_khoan.php"target="_blank">ĐIỀU KHOẢN</a></p>
        </div>
        
      <!-- tạo nội dung cột giữa -->
      <div class="col-sm-7">
      
        <!-- <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">
              <div class="panel-body">
                <p contenteditable="true">Question: ...</p>
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>     
                <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-comment"></span> Bình luận
                </button>     
              </div>
            </div>
          </div>
        </div> -->
        <div class="text-left">
         
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục
                  <span class="caret"></span>
                </button>
              <ul class="dropdown-menu">
                <li><a href="#">IT</a></li>
                <li><a href="#">IOS</a></li>
                <li><a href="#">Khoa học</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">IOS</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">Tiếng Anh</a></li>
                <li><a href="#">Phần mềm</a></li>
                <li><a href="#">Mạng xã hội</a></li>
                <li><a href="#">Sức khoẻ và làm đẹp</a></li>
              </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chọn lọc
                  <span class="caret"></span>
                </button>
              <ul class="dropdown-menu">
                <li><a href="#">Mới nhất</a></li>
                <li><a href="#">Bình luận nhiều nhất</a></li>
                <li><a href="#">Chưa trả lời</a></li>
              </ul>
            </div>
        </div> <br>

        <div class="row">
          <div class="col-sm-3">
            <div class="well">
             <p>John</p>
             <img src="image/avartar-1.jpg" class="img-circle" height="55" width="55" alt="Avatar">
             <button type="button" class="btn btn-default">Follow</button>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="well">
              <p>Deploy dự án Laravel lên hosting, ko chỉnh sửa cấu trúc thư mục</p>
              <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>     
              <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-comment"></span> Bình luận
              </button>   
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
             <p>Jane</p>
             <img src="image/avartar-3.jpg" class="img-circle" height="55" width="55" alt="Avatar">
             <button type="button" class="btn btn-default">Follow</button>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="well">
              <p>Thêm nút Settings cho Wordpress plugin</p>
              <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>     
              <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-comment"></span> Bình luận
              </button>   
            </div>
          </div>
        </div>

      </div>

      <!-- tạo nội dung cột phải -->
      <div class="col-sm-2 well">
        <div class="thumbnail">
          <p>QUESTIONS</p>
          <h2>200</h2>
          <p>MEMBERS</p>
          <h2>100</h2>
        </div>      
        <div class="well">
          <!-- đánh giá sao cho trang web -->
          <p style="color: #f00d23;font-size: 15px;">User Rating</p>
            <!-- <a href="#">
              <span class="glyphicon glyphicon-star-empty"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
            </a> -->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- chuyển trang -->
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>

  <!-- tạo phương thức liên hệ -->
  <footer class="container-fluid text-center">
      <div id="contact" class="container-fluid bg-grey">
          <h2 class="text-center">LIÊN HỆ</h2>
          <div class="row">
            <div class="col-sm-5">
              <p>Contact us and we'll get back to you within 24 hours.</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Cau Giay, Ha Noi</p>
              <p><span class="glyphicon glyphicon-phone"></span> +84 123456789</p>
              <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
            <div class="col-sm-7 slideanim">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
  </footer>
</body>
</html>