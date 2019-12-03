<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Q & A</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/capnhat.css" />
  <link rel="stylesheet" href="css/dang_ki.css" />
  <link rel="stylesheet" href="css/dang_nhap.css" />
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>

</head>

<body>

  <!-- header -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Question & Answer</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">TRANG CHỦ</a></li>
          <li><a href="index.php?page_layout=qa">ASK QUESTIONS</a></li>
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
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Acount
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="index.php?page_layout=capnhat"><span class="glyphicon glyphicon-edit"></span> Cập nhật thông tin</a></li>

              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Thoát</a></li>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- gọi trang con vào vì có header và footer chung -->
  <?php
  if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
      case 'qa':
        include_once('questions.php');
        break;
      case 'login':
        include_once('sign_in.php');
        break;
      case 'logout':
        include_once('sign_up.php');
        break;
      case 'dieukhoan':
        include_once('dieu_khoan.php');
        break;
      case 'capnhat':
        include_once('cap_nhat.php');
        break;
    }
  } else {
    include_once('QA.php');
  }
  ?>
    <!-- tạo phương thức liên hệ -->
    <!-- footer -->
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