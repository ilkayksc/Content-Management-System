<?php 
include 'header.php'; 


  $iceriksor=$db->prepare("select * from icerik  order by icerik_id DESC limit 25");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();




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
                    <h3>İçerik <small><?php echo $say." Adet Kayıt Listelendi"; ?></small></h3>


                    <a href="icerik-ekle.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-success ">İçerik Ekle</button></div></a>
                    
                    
                    <div class="clearfix"></div>
                  </div>
                        <p>Sitenizdeki İçerikleri Buradan Düzenleyebilirsiniz</p>
                    <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">#</th>
                            <th class="column-title">İçerik Adı </th>
                            <th class="column-title">İçerik Resim</th>
                           
                            <th class="column-title">İçerik Zamanı</th>
                            <th class="column-title">İçerik Durum </th>
                            <th class="column-title">İçerik Detay </th>
                            <th width="80" class="column-title"> </th>
                            <th width="80" class="column-title"> </th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                           <?php 

                
                
                while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>

                          <tr class="even pointer">
                            
                            <td class=" "><?php echo $icerikcek['icerik_id']; ?></td>
                            <td class=" "><?php echo $icerikcek['icerik_ad']; ?></td>
                            <td class=" "><img width="350" height="200" src="<?php echo $icerikcek['icerik_resimyol']; ?> "></td>
                            <td class=" "><?php echo $icerikcek['icerik_zaman']; ?></td>
                            <td class=" "><?php  
                                                if ($icerikcek['icerik_durum']==1) {
                                                  echo "Aktif";
                                                 } 

                                                elseif ($icerikcek['icerik_durum']==0) {
                                                    echo "Pasif";
                                                
                                                 } ?></td>
                            <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol']; ?>">

                            <td class=" "><?php echo substr($icerikcek['icerik_detay'],0 ,100); ?></td>
                            <td class=" "><a href="icerik-duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button width="80" class="btn btn-primary ">Düzenle</button></td></a>
                            <td class=" "><a href="panel/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button width="80" class="btn btn-danger ">Sil</button></a></td>
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