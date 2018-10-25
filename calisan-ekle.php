<?php 
include 'header.php'; 



 ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
       <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h2><small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">Çalışan Başarıyla Eklendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Çalışan Eklenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenize Çalışan Ekleyebilirsiniz..</b>


                                            <?php }  ?></small></h2>
                                            <a href="calisan.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalışan Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ekip_ad" required="" class="form-control col-md-7 col-xs-12" placeholder="Lütfen Slider Adını Giriniz.">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="ekip_resimyol" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lütfen Slider Adını Giriniz.">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Çalışan Unvanı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_unvan" placeholder="Lütfen Slider Linkini Giriniz." >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_facebook" placeholder="Lütfen Facebook Kullanıcı Adını Giriniz." >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_twitter" placeholder="Lütfen Twitter Kullanıcı Adını Giriniz." >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İnstagram</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_instagram" placeholder="Lütfen İnstagram Kullanıcı Adını Giriniz." >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Linkedin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ekip_linkedin" placeholder="Lütfen İnstagram Kullanıcı Adını Giriniz." >
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="ekipkaydet">Kaydet</button>
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