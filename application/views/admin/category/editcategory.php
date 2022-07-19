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
                    <form class="needs-validation" autocomplate="off" method="post" action="<?php echo base_url('admin/CategoryEdit/'.$category->id);?>">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label class="form-label" for="categoryName">Kategori Adı</label>
                          <input class="form-control" id="categoryName" name="category" type="text" required="" value="<?=$category->name?>">

                        </div>

                        <div class="col-md-6">
                          <label class="form-label" for="topCategory">Üst Kategori</label>
                          <select class="form-select" id="topCategory" name="topcategory" required="">
                            <option <?php if ($category->topcategory==1){echo "selected";}?> value="1">Erkek<option>
                            <option <?php if ($category->topcategory==2){echo "selected";}?> value="2">Kadın<option>
                            <option <?php if ($category->topcategory==3){echo "selected";}?> value="3">Çocuk<option>
                          </select>
                        </div>
                      </div>
                     <br>
                      <button class="btn btn-primary" type="submit">Kategori Güncelle</button>
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