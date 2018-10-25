<?php 
include 'header.php'; 
$iceriksor=$db->prepare("select * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(  
  'icerik_id' => $_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

 ?>

<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h3>İçerik İşlemleri <small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">İçerik Başarıyla Güncellendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">İçerik Güncellenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenize İçerik Güncelleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>
                                            <a href="icerik.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <input type="hidden" name="icerik_id" value="<?php echo $icerikcek['icerik_id']; ?>">
                      <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol']; ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="icerik_ad" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $icerikcek['icerik_ad']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Zaman <span class="required"></span>
                        </label>
                        
                          <div class="col-md-3" >
                            <input type="date" id="first-name" name="icerik_tarih"  class="form-control col-md-7 col-xs-12" value="<?php echo date("Y-m-d"); ?>">
                          </div>




                          <div class="col-md-2" >
                            <input type="time" id="first-name" name="icerik_saat"  class="form-control col-md-7 col-xs-12" value="<?php echo date("H:i:s"); ?>">
                          </div>

                          
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <img width="300" height="200" src="../<?php echo $icerikcek['icerik_resimyol']; ?> ">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="icerik_resimyol" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik Detay</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="icerik_detay" class="ckeditor" ><?php echo $icerikcek['icerik_detay']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik Durumu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: -10px;">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="icerik_durum" required="">
                            <?php 
                                                if ($icerikcek['icerik_durum']==0) {?>
                                                    <option value="0">Pasif</option>
                                                <option value="1">Aktif</option>
                                                <?php } 
                                                if ($icerikcek['icerik_durum']==1) {?>
                                                    <option value="1">Aktif</option> 
                                                    <option value="0">Pasif</option>
                                                
                                                <?php } ?>
                          
                          </select>
                        </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Anahtar Kelimeleri <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="icerik_keyword" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $icerikcek['icerik_keyword']; ?>">
                        </div>
                      </div>
                      
                      
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="icerikduzenle">Kaydet</button>
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