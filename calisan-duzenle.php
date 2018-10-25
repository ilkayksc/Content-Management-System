<?php 
include 'header.php'; 

$ekipsor=$db->prepare("select * from ekip where ekip_id=:ekip_id");
$ekipsor->execute(array(  
  'ekip_id' => $_GET['ekip_id']
));
$ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC);

 ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
       <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h3>Çalışan İşlemleri <small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">Çalışan Başarıyla Güncellendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Çalışan Güncellenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Çalışan Bilgilerini Güncelleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>
                                            <a href="calisan.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <input type="hidden" name="ekip_id" value="<?php echo $ekipcek['ekip_id']; ?>">
                      <input type="hidden" name="ekip_eskiresimyol" value="<?php echo $ekipcek['ekip_resimyol']; ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalışan Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ekip_ad" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ekipcek['ekip_ad']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <img width="300" height="200" src="../<?php echo $ekipcek['ekip_resimyol']; ?> ">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="ekip_resimyol" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      
                  
                     <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Çalışan Unvanı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_unvan" value="<?php echo $ekipcek['ekip_unvan']; ?>" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_facebook" value="<?php echo $ekipcek['ekip_facebook']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_twitter" value="<?php echo $ekipcek['ekip_twitter']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İnstagram</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_instagram" value="<?php echo $ekipcek['ekip_instagram']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Linkedin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_linkedin" value="<?php echo $ekipcek['ekip_linkedin']; ?>" >
                        </div>
                      </div>
                     
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="ekipduzenle">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                  </div>
                
                  
              </div> 
              </div>
                </div>
              </div>
      </section>
      <!-- /wrapper -->
    </section>
   <?php include 'footer.php';  ?>