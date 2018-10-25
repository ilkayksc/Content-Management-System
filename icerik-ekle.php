<?php 
include 'header.php'; 


  $iceriksor=$db->prepare("select * from icerik  order by icerik_id DESC limit 25");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();




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
                            <b style="color: #00CA79 " class="page-subhead-line">İçerik Başarıyla Eklendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">İçerik Eklenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenize İçerik Ekleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>
                                            <a href="icerik.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="icerik_ad" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lütfen İçerik Adını Giriniz.">
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
                          <input type="file" id="first-name" name="icerik_resimyol" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lütfen İçerik Resmini Seçiniz.">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik Detay</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="icerik_detay" class="ckeditor"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik Durum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: -10px;">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="icerik_durum" required="">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          
                          </select>
                        </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik Anahtar Kelimeleri</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="icerik_keyword" placeholder="Lütfen İçerik Anahtar Kelimeleri Giriniz." required="">
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="icerikkaydet">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
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