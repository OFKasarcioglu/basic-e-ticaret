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
                </div>
              </div>
            </div>
          </div>
               
            <!-- #Bu alana  sistem dosyaları gelecek--> 
        
                  
            
          </div>
        </div>
       <?php $this->load->view('admin/include/footer');?>
      </div>
    </div>
    <?php $this->load->view('admin/include/javascript');?>
  </body>
</html>