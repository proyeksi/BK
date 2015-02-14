

<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Rekap Data</h3>

          <?php
          if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){
            ?>
            <ul class="breadcrumb" id="crumbData">
              <?php
              foreach ($breadcrumb as $key=>$value) {
                if($value!=''){
                  ?>
                  <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a> <span class="divider"></span></li>
                  <?php }else{?>
                  <li class="active"><?php echo $key; ?></li>
                  <?php }
                }
                ?>     
              </ul>
              <?php
            }
            ?>

          <div class="row data">
            <div class="col-lg-12">
                      <div class="content-panel">

                    <div class="row ms">    
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2" >
                        <select class="form-control" id="select">
                        <option>NIS</option>
                        <option>Nama</option>
                        <option>Kelas</option>
                        <option>Keterangan</option>
                        <option>Tanggal</option>
                        </select>
                    </div>

                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3" >
                        <div class="right-inner-addon">
                           <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Search" id="query"/>
                        </div>
                    </div>
                    </div>

                        

                          <section id="unseen">
                            <table class="footable table-bordered table-striped" data-page-size="10">
                              <thead>
                              <tr>
                                  <th>NIS</th>
                                  <th>Nama</th>
                                  <th>Kelas</th>
                                  <th class="numeric">Keterangan</th>
                                  <th class="numeric">Tanggal</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>AAC</td>
                                  <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                  <td>AAC</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">-0.01</td>
                                  
                              </tr>
                              <tr>
                                  <td>AAD</td>
                                  <td>ARDENT LEISURE GROUP</td>
                                  <td>AAC</td>
                                  <td class="numeric">$1.15</td>
                                  <td class="numeric">  +0.02</td>
                                  
                              </tr>
                              <tr>
                                  <td>AAX</td>
                                  <td>AUSENCO LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$4.00</td>
                                  <td class="numeric">-0.04</td>
                                 
                              </tr>
                              <tr>
                                  <td>ABC</td>
                                  <td>ADELAIDE BRIGHTON LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$3.00</td>
                                  <td class="numeric">  +0.06</td>
                                 
                              </tr>
                              <tr>
                                  <td>ABP</td>
                                  <td>ABACUS PROPERTY GROUP</td>
                                  <td>AAC</td>
                                  <td class="numeric">$1.91</td>
                                  <td class="numeric">0.00</td>
                                 
                              </tr>
                              <tr>
                                  <td>ABY</td>
                                  <td>ADITYA BIRLA MINERALS LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$0.77</td>
                                  <td class="numeric">  +0.02</td>
                                  
                              </tr>
                              <tr>
                                  <td>ACR</td>
                                  <td>ACRUX LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$3.71</td>
                                  <td class="numeric">  +0.01</td>
                                  
                              </tr>
                              <tr>
                                  <td>ADU</td>
                                  <td>ADAMUS RESOURCES LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$0.72</td>
                                  <td class="numeric">0.00</td>
                                  
                              </tr>
                              <tr>
                                  <td>AGG</td>
                                  <td>ANGLOGOLD ASHANTI LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$7.81</td>
                                  <td class="numeric">-0.22</td>
                                 
                              </tr>
                              <tr>
                                  <td>AGK</td>
                                  <td>AGL ENERGY LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$13.82</td>
                                  <td class="numeric">  +0.02</td>
                                  
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$3.17</td>
                                  <td class="numeric">-0.02</td>
                                  
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$3.17</td>
                                  <td class="numeric">-0.02</td>
                                  
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td>AAC</td>
                                  <td class="numeric">$3.17</td>
                                  <td class="numeric">-0.02</td>
                                  
                              </tr>
                              </tbody>
                               <tfoot>
    <tr>
      <td colspan="5">
        <div class="pagination pagination-centered hide-if-no-paging"></div>
      </td>
    </tr>
  </tfoot>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
    

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->