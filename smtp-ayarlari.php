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

             <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <h3>Mail Ayarları<small style="margin-left: 20px;"><?php 
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Host <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_smtphost" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_smtphost'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">SMTP Kullanıcı Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ayar_smtpuser" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_smtpuser'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Şifre</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_smtppassword" value="<?php echo $ayarcek['ayar_smtppassword'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Port</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ayar_smtpport" value="<?php echo $ayarcek['ayar_smtpport'] ?>">
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success" name="smtpayarkaydet">Kaydet</button>
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