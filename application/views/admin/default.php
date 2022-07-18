<!DOCTYPE html>
<html lang="tr">
  <head>
  <?php $this->load->view('admin/include/meta');?>
    <title>viho - Premium Admin Template</title>
  <?php $this->load->view('admin/include/css');?>
  </head>
  <body>
  <?php $this->load->view('admin/include/header');?>
      <div class="page-body-wrapper sidebar-icon">
  <?php $this->load->view('admin/include/menu');?>
        <div class="page-body">
          <div class="container-fluid dashboard-default-sec">
        
               
            <!-- #Bu alana  sistem dosyaları gelecek--> 
        
                  
            
          </div>
        </div>
       <?php $this->load->view('admin/include/footer');?>
      </div>
    </div>
    <?php $this->load->view('admin/include/javascript');?>
  </body>
</html>