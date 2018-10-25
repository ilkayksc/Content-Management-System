<?php 
include 'header.php'; 

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

 ?>
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h3>Genel Ayarlar <small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">Ayarlar Başarıyla Düzenlendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Ayarlar Düzenlenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Buradan Sitenizin Ayarlarını Düzenleyebilirsiniz..</b>


                                            <?php }  ?></small></h3>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_baslik" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">İçerik <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="hakkimizda_icerik" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Video</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Misyon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="hakkimizda_misyon" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Vizyon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="hakkimizda_vizyon" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></textarea>
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="hakkimizdaayarkaydet">Kaydet</button>
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
        </div>
      </section>
      <!-- /wrapper -->
    </section>
   <?php include 'footer.php';  ?>