<!DOCTYPE html>
<html lang="tr">
  <head>
  <?php $this->load->view('admin/include/meta');?>
    <title><?php if(isset($breadcrumb)){echo $breadcrumb.' |';} ?> Yönetim Paneli</title>
  <?php $this->load->view('admin/include/css');?>
  </head>
  <body>
  <?php $this->load->view('admin/include/header');?>
      <div class="page-body-wrapper sidebar-icon">
  <?php $this->load->view('admin/include/menu');?>
        <div class="page-body">
          <div class="container-fluid dashboard-default-sec">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-12">
                  <h3><?php if(isset($breadcrumb)){echo $breadcrumb;} ?></h3>
                  <br>
                  <?php AlertifysSee();?>
                </div>
              </div>
            </div>
          </div>
               
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                  </div>
                  <div class="card-body">
                    <form class="needs-validation" autocomplate="off" method="post" action="<?php echo base_url('admin/settingsInsert');?>" enctype="multipart/form-data">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label class="form-label" for="siteName">Site Adı</label>
                          <input class="form-control" id="siteName" name="title" type="text" required="" value="<?=$config->title;?>">
                          <input class="form-control" id="siteName" name="id" type="hidden" required="" value="<?=$config->id;?>">

                        </div>

                        <div class="col-md-6">
                          <label class="form-label" for="siteMail">E-Posta Adresi</label>
                          <input class="form-control" id="siteMail" name="mail" type="email" required="" value="<?=$config->mail;?>">
                        </div>
                      </div>
                      <br>
                      <div class="row g-3">
                      <div class="col-md-6">
                          <label class="form-label" for="sitePhone">Telefon Numarası</label>
                          <input class="form-control" id="sitePhone" name="phone" type="text" required="" value="<?=$config->phone;?>">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="siteInfo">Kısa Açıklama</label>
                          <input class="form-control" id="siteInfo" name="info" type="text" value="<?=$config->info;?>">
                        </div>
                      </div>
<br>
                      <div class="row g-3">
                      <div class="col-md-6">
                          <label class="form-label" for="siteFacebook">Facebook URL</label>
                          <input class="form-control" id="siteFacebook" name="facebook" type="text" value="<?=$config->facebook;?>">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="siteInstagram">Instagram URL</label>
                          <input class="form-control" id="siteInstagram" name="instagram" type="text" value="<?=$config->instagram;?>">
                        </div>
                      </div>
                        <br>
                      <div class="row g-3">
                      <div class="col-md-12">
                          <label class="form-label" for="siteYoutube">Youtube URL</label>
                          <input class="form-control" id="siteYoutube" name="youtube" type="text" value="<?=$config->youtube;?>">
                        </div>
                      </div>
                      <br>
                      <div class="row g-3">
                      <div class="col-md-6">
                          <label class="form-label" for="siteLogo">Site Logosu</label>
                          <input class="form-control" id="siteLogo" name="logo" type="file">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="siteIcon">Site Favicon</label>
                          <input class="form-control" id="siteIcon" name="icon" type="file" >
                        </div>
                      </div>

                     <br>
                      <button class="btn btn-primary" type="submit">Ayarları Güncelle</button>

                     

                    </form>
                  </div>
                </div>
              </div>
            </div>
        
                  
            
          </div>
        </div>
       <?php $this->load->view('admin/include/footer');?>
      </div>
    </div>
    <?php $this->load->view('admin/include/javascript');?>
  </body>
</html>