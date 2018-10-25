<?php 
include 'header.php'; 




  $ekipsor=$db->prepare("select * from ekip  order by ekip_id ASC limit 25");
  $ekipsor->execute();
  $say=$ekipsor->rowCount();




?>

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
                    <h2>Tüm Çalışanlar <small><?php echo $say." Adet Kayıt Listelendi"; ?></small></h2>


                    <a href="calisan-ekle.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-success ">Çalışan Ekle</button></div></a>
                    
                    
                    <div class="clearfix"></div>
                  </div>
                <p>Sitenizdeki Çalışanları Buradan Düzenleyebilirsiniz</p>
                    <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">#</th>
                            <th class="column-title">Çalışan Adı </th>
                            <th class="column-title">Çalışan Resim</th>
                           
                            <th class="column-title">Çalışan Unvan</th>
                            
                            <th width="80" class="column-title"> </th>
                            <th width="80" class="column-title"> </th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                           <?php 

                
                
                while ($ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC)) { ?>

                          <tr class="even pointer">
                            
                            <td class=" "><?php echo $ekipcek['ekip_id']; ?></td>
                            <td class=" "><img width="150" height="150" src="<?php echo $ekipcek['ekip_resimyol']; ?> "></td>
                            <td class=" "><?php echo $ekipcek['ekip_ad']; ?></td>
                            
                            <td class=" "><?php echo $ekipcek['ekip_unvan']; ?></td>
                            <input type="hidden" name="ekip_resimyol" value="../<?php echo $ekipcek['ekip_resimyol']; ?>">

                            
                            <td class=" "><a href="calisan-duzenle.php?ekip_id=<?php echo $ekipcek['ekip_id']; ?>"><button width="80" class="btn btn-primary ">Düzenle</button></td></a>
                            <td class=" "><a href="panel/islem.php?ekipsil=ok&ekip_id=<?php echo $ekipcek['ekip_id']; ?>"><button width="80" class="btn btn-danger ">Sil</button></a></td>
                          </tr>
                         
                    <?php   } ?>
                       
                      
                          
                        </tbody>
                      </table>
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