<?php include 'header.php';  ?>
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
                            <b style="color: #00CA79 " class="page-subhead-line">Slider Başarıyla Eklendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Slider Eklenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenize Slider Ekleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>
                                            <a href="slider.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-warning ">Geri Dön</button></div></a>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_ad" required="" class="form-control col-md-7 col-xs-12" placeholder="Lütfen Slider Adını Giriniz.">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="slider_resimyol" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lütfen Slider Adını Giriniz.">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Açıklaması</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="slider_aciklama" class="ckeditor"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Durum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: -10px;">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="slider_durum" required="">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          
                          </select>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Sırası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="slider_sira" value="0" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slider Linki</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="slider_url" placeholder="Lütfen Slider Linkini Giriniz." >
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="sliderkaydet">Kaydet</button>
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