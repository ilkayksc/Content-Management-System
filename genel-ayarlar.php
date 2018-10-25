<?php 
include 'header.php';  
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       
        


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

              
            </div>

            <div class="clearfix"></div>

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
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo <span class="required"></span>
                        </label>
                      <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <?php if (strlen($ayarcek['ayar_logo'])>0) { ?>
                          <img width="200"  src="<?php echo $ayarcek['ayar_logo']; ?> ">


                          
                       <?php } else {?>
                          <img width="200"  src="../uploads/img/logo-yok.png ">

                      <?php }?>
                         
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="ayar_logo" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                   
                     <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                          
                          <button type="submit" class="btn btn-success" name="logokaydet">Logoyu Güncelle</button>
                        </div>
                      </div>
                 </form>
 <hr>
                    <form action="panel/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_siteurl" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_siteurl']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Site Başlığı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ayar_title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_title']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Açıklaması</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Anahtar Kelimeleri</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_keyword" value="<?php echo $ayarcek['ayar_keyword']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Yazarı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Footer</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="genelayarkaydet">Kaydet</button>
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
        </div>
          












      


      </section>
      <!-- /wrapper -->
    </section>
   <?php include 'footer.php';  ?>