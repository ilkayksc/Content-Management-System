
<?php 
include 'header.php'; 

$slidersor=$db->prepare("select * from slider where slider_id=:slider_id");
$slidersor->execute(array(  
  'slider_id' => $_GET['slider_id']
));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

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
                        <h3>Slider İşlemleri <small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">Slider Başarıyla Güncellendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Slider Güncellenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenize Slider Güncelleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>
                                            <a href="slider.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
                      <input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol']; ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_ad" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $slidercek['slider_ad']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <img width="300" height="200" src="../<?php echo $slidercek['slider_resimyol']; ?> ">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="slider_resimyol" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Açıklaması</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="slider_aciklama" class="ckeditor" ><?php echo $slidercek['slider_aciklama']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Durum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: -10px;">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="slider_durum" required="">
                            <?php 
                                                if ($slidercek['slider_durum']==0) {?>
                                                    <option value="0">Pasif</option>
                                                <option value="1">Aktif</option>
                                                <?php } 
                                                if ($slidercek['slider_durum']==1) {?>
                                                    <option value="1">Aktif</option> 
                                                    <option value="0">Pasif</option>
                                                
                                                <?php } ?>
                          
                          </select>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Sırası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Linki</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="slider_url" value="<?php echo $slidercek['slider_url']; ?>">
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="sliderduzenle">Kaydet</button>
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