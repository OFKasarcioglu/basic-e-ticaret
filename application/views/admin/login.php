<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url('assets/back/');?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('assets/back/');?>assets/images/favicon.png" type="image/x-icon">
    <title>Site | Yönetim Paneli</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/themify.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url('assets/back/');?>assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/');?>assets/css/responsive.css">
  </head>
  <body>
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" action="<?php echo base_url('admin/login');?>" method="post">
                <h4>Hoşgeldiniz.</h4>
                <h6>Yönetici hesabınıza giriş yapın</h6>
                <div class="form-group">
                  <label>E-Posta Adresiniz.</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" type="email" required="" name="email" placeholder="test@gmail.com">
                  </div>
                </div>
                <div class="form-group">
                  <label>Şifreniz</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="sifre" required="" placeholder="*********">
                  </div>
                </div>
                <div class="form-group">
                  <button style="width:100%;"class="btn btn-primary btn-block" type="submit">Giriş Yap</button>
                </div>  
                <?php  if($this->session->flashdata('error')){ echo "<div class='alert alert-danger dark alert-dismissible fade show'>" .$this->session->flashdata('error')."</div>";}?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="<?php echo base_url('assets/back/');?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/config.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/back/');?>assets/js/script.js"></script>
  </body>
</html>