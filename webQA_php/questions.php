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
      <p><a href="http://localhost:8080/webQA/dieu_khoan.php" target="_blank">ĐIỀU KHOẢN</a></p>
    </div>
    <!-- target: mở một tab mới -->
    <!-- đặt câu hỏi -->
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-12 text-left">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" placeholder="Title" id="title">
          </div>
          <div class="form-group">
            <label for="title">Question</label>
            <!-- <input type="text" class="form-control" placeholder="Your Questions" id="question"> -->
            <textarea name="" id="question" class="form-control" cols="30" rows="10"></textarea>
            <script>
              CKEDITOR.replace('question');
            </script>
          </div>
          <div class="form-inline">
            <a class="btn btn-info" href="#">Tạo câu hỏi</a>
            <a class="btn btn-info" href="http://localhost:8080/webQA/layout.php">Bỏ qua</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>