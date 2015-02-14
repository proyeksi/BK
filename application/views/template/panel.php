<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="/BK/asset/img/ui-sam.jpg" class="img-circle" width="60"></p>
                  <h5 class="centered">Poniman Sibarani</h5>
                    
                  <li class="mt">
                      <a class="active" href="<?php echo base_url();?>page">
                          <i class="fa fa-home"></i>
                          <span>Beranda</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-list"></i>
                          <span>Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right pull-right" id="panah"></i></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>page/absen">Absensi</a></li>
                          <li><a  href="<?php echo base_url();?>page/import">Import Data Siswa Baru</a></li>
                          <li><a  href="<?php echo base_url();?>page/semester">Tambah Semester</a></li>
                          <li><a  href="<?php echo base_url();?>page/data">Data Siswa</a></li>
                          <li><a  href="<?php echo base_url();?>page/rekap">Rekap Data</a></li>
                          <li><a  href="<?php echo base_url();?>page/edit">Input Data Siswa</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>pesan" >
                          <i class="fa fa-envelope"></i>
                          <span>Pesan</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->