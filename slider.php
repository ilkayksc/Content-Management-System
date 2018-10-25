<?php 
include 'header.php'; 



  $slidersor=$db->prepare("select * from slider  order by slider_sira ASC limit 25");
  $slidersor->execute();
  $say=$slidersor->rowCount();





?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
       
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Slider <small><?php echo $say." Adet Kayıt Listelendi"; ?></small></h3>


                    <a href="slider-ekle.php"><div class="col-md-12" align="right" style="margin-top: -25px;"><button width="80" class="btn btn-success ">Slider Ekle</button></div></a>
                    
                    
                    <div class="clearfix"></div>
                  </div>
                <p>Sitenizdeki Sliderları Buradan Düzenleyebilirsiniz</p>
                    <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">#</th>
                            <th class="column-title">Slider Adı </th>
                            <th class="column-title">Slider Resim</th>
                           
                            <th class="column-title">Resim Sırası</th>
                            <th class="column-title">Durum </th>
                            <th class="column-title">Açıklama </th>
                            <th width="80" class="column-title"> </th>
                            <th width="80" class="column-title"> </th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                           <?php 

                
                
                while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>

                          <tr class="even pointer">
                            
                            <td class=" "><?php echo $slidercek['slider_id']; ?></td>
                            <td class=" "><?php echo $slidercek['slider_ad']; ?></td>
                            <td class=" "><img width="350" height="200" src="<?php echo $slidercek['slider_resimyol']; ?> "></td>
                            <td class=" "><?php echo $slidercek['slider_sira']; ?></td>
                            <td class=" "><?php  
                                                if ($slidercek['slider_durum']==1) {
                                                  echo "Aktif";
                                                 } 

                                                elseif ($slidercek['slider_durum']==0) {
                                                    echo "Pasif";
                                                
                                                 } ?></td>
                            <input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol']; ?>">

                            <td class=" "><?php echo $slidercek['slider_aciklama']; ?></td>
                            <td class=" "><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><button width="80" class="btn btn-primary ">Düzenle</button></td></a>
                            <td class=" "><a href="panel/islem.php?slidersil=ok&slider_id=<?php echo $slidercek['slider_id']; ?>"><button width="80" class="btn btn-danger ">Sil</button></a></td>
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