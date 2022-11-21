<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>졸업이수 요건  </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/G.png" />

  </head>

<body>
     <?php
     session_start();
#쿠키에서 로그인정보 불러오기#
if (isset($_COOKIE['id'])){
    $id = $_COOKIE['id'];
    $save = "checked";
} else{
  $id = "";
  $save = "";
}
?>
    <form method="post" action="login_.php">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">로그인</h3>
                <form>
                  <div class="form-group">
                    <label>학번</label>
                    <input name="id" value="<?php echo $id ?>" type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>비밀번호</label>
                    <input name="password" type="password"  class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input name="save" type="checkbox" class="form-check-input"  <?php echo $save ?> > 이 아이디를 계속해서 저장합니다 </label>
                    </div>
                    <a href="#" class="forgot-pass">비밀번호를 잊어버리셨나요?</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">로그인</button>
                  </div>
                  <div class="d-flex">
                    
                  </div>
                  <p class="sign-up">회원이 아니신가요?<a href="page/join.html"> 회원가입</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </form>
  </body>
</html>