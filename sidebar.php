
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="kullanici-profil.php"><img src="<?php echo $kullanicicek['kullanici_resim']; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $kullanicicek['kullanici_adsoyad']; ?></h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Anasayfa</span>
              </a>
          </li>
          <li style="margin-top: -10px;" class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Ayarlar</span>
              </a>
            <ul class="sub">
              <li><a href="genel-ayarlar.php">Genel Ayarlar</a></li>
              <li><a href="iletisim-ayarlari.php">İletişim Ayarları</a></li>
              <li><a href="api-ayarlari.php">Google API Ayarları</a></li>
              <li><a href="smtp-ayarlari.php">Mail Ayarları</a></li>
            </ul>
          </li>


          <li style="margin-top: -10px;" class="mt">
            <a href="hakkimizda.php">
              <i class="fa fa-dashboard"></i>
              <span>Hakkımızda</span>
              </a>
          </li>

          <li style="margin-top: -10px;" class="mt">
            <a href="calisan.php">
              <i class="fa fa-dashboard"></i>
              <span>Çalışanlar</span>
              </a>
          </li>
          <li style="margin-top: -10px;" class="mt">
            <a href="icerik.php">
              <i class="fa fa-dashboard"></i>
              <span>Blog/Haber Yazıları</span>
              </a>
          </li>

          <li style="margin-top: -10px;" class="mt">
            <a href="slider.php">
              <i class="fa fa-dashboard"></i>
              <span>Slider</span>
              </a>
          </li>

          <li style="margin-top: -10px;" class="mt">
            <a href="kullanici-profil.php">
              <i class="fa fa-dashboard"></i>
              <span>Kullanıcı Profili</span>
              </a>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>