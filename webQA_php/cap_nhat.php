<div class="container text-center">
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
         <legend>
            <a href="#"><i class="glyphicon glyphicon-globe"></i></a> Cập nhật thông tin
         </legend>
         <form action="#" method="post" class="form" role="form">
            <label class="HangMoi">Họ và tên đầy đủ</label>
            <div class="row">
               <div class="col-xs-12 col-md-12">
                  <input class="form-control" name="firstname" required="" autofocus="" type="text">
               </div>
            </div>
            <br>

            <!-- <label class="HangMoi">Nơi ở</label>     
                     <input class="form-control" name="youremail" type="text"> 
                  <br> -->

            <div class="form-group">
               <label class="HangMoi">Nơi sống</label>
               <select class="form-control">
                  <option value="" selected>Nơi sống của bạn</option>
                  <option value="">TPHCM</option>
                  <option value="">Hà Nội</option>
                  <option value="">Khác</option>
               </select>
            </div>

            <label class="HangMoi">Giới thiệu bản thân</label>
            <input class="form-control" name="gioiThieu" type="text">
            <br>

            <label class="HangMoi">Ngày sinh</label>
            <br>
            <input class="form-control" type="date" name="ngaysinh">
            <br>

            <label class="HangMoi">Giới tính</label>

            <input name="sex" id="inlineCheckbox1" value="male" type="radio" checked>Nam

            <input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ
            <br>
            <br>
            <a class="btn btn-info" href="http://localhost:8080/webQA/trangchu.php">Cập nhật</a>
         </form>
      </div>
   </div>
</div>