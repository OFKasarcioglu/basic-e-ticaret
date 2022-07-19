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
                <div class="col-sm-6">
                  <h3><?php if(isset($breadcrumb)){echo $breadcrumb;} ?></h3>
                </div>
                <div class="col-sm-6">
                  <div class="bookmark">
                    <ul>
                    <li><a class="nav-link" href="<?php echo base_url('admin/CategoryAdd');?>"><i data-feather="plus"></i><span>Yeni Kategori Ekle</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
               
            <!-- #Bu alana  sistem dosyaları gelecek--> 
          
            <div class="col-sm-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-striped bg-primary">
                      <thead class="tbl-strip-thad-bdr" align="center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Kategori Adı</th>
                          <th scope="col">Üst Kategori</th>
                          <th scope="col">Slug URI</th>
                          <th scope="col">Oluşturulma Tarihi</th>
                          <th scope="col">İşlemler</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <?php foreach($categories as $category){ ?>
                        <tr>
                          <th scope="row"><?= $category->id ?></th>
                          <td><?= $category->name?></td>
                          <td><?php if($category->topcategory==1){echo "Erkek";}elseif($category->topcategory==2){echo "Kadın";}else{echo "Çocuk";} ?></td>
                          <td class="visibility"><?= $category->slug ?></td>
                          <td><?= $category->createdAt ?></td>
                          <td>
                          <a href="#" class="btn btn-pill btn-air-danger btn-danger-gradien btn-sm" type="button" title="btn btn-pill btn-air-danger btn-danger-gradien">Sil</a>
                          <a href="<?php echo base_url('admin/CategoryEdit/'.$category->id); ?>" class="btn btn-pill btn-air-warning btn-warning-gradien btn-sm" type="button" title="btn btn-pill btn-air-danger btn-danger-gradien">Düzenle</a>
                        </td>
                        </tr>

                      <?php } ?>
                      </tbody>
                    </table>
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