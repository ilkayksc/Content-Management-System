<?php 
include 'header.php'; 

include 'panel/baglan.php';
$kullanicisor=$db->prepare("select * from kullanici where kullanici_ad=:ad");
$kullanicisor->execute(array(

'ad' => $_SESSION['kullanici_ad']

));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h3><?php echo $kullanicicek['kullanici_adsoyad']; ?> <small><?php 
                        if ($_GET['durum']=="ok") { ?>
                            <b style="color: #00CA79 " class="page-subhead-line">Profil Başarıyla Güncellendi..</b>

                       <?php } elseif ($_GET['durum']=="no") {?>
                            <b style="color: #d9534f" class="page-subhead-line">Profil Güncellenemedi</b>

                                            <?php  } else {?>

                                        <b class="page-subhead-line">Adlı Kullanıcının Profilini Güncelliyorsunuz..</b>


                                            <?php }  ?></small></h3>

                    <div class="clearfix"></div>
                       <div class="x_content">
                    <br />
                    <form action="panel/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profil Resmi <span class="required"></span>
                        </label>
                      <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['kullanici_resim']; ?>">
                      <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <?php if (strlen($kullanicicek['kullanici_resim'])>0) { ?>
                          <img width="200"  src="<?php echo $kullanicicek['kullanici_resim']; ?> ">


                          
                       <?php } else {?>
                          <img width="200"  src="uploads/profilresmiyok.jpg ">

                      <?php }?>
                         
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profil Resmini Değiştir <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="kullanici_resim" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                   
                     <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                          
                          <button type="submit" class="btn btn-success" name="profilresmikaydet">Profil Resmini Güncelle</button>
                        </div>
                      </div>
                 </form>
                  <hr>
                    <form action="panel/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı Ve Soyadı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="kullanici_adsoyad" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Şifre <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="kullanici_sifre" disabled="" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $kullanicicek['kullanici_sifre']; ?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="kullaniciprofilkaydet">Kaydet</button>
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