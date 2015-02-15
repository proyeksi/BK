<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              copyright <i class="fa fa-copyright"></i> 2015. blackomsi
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url().'asset/js/jquery.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery-1.11.2.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/jqueryvalidate.js';?>"></script>
    <script src="<?= base_url().'asset/js/bootstrap.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/typeahead.js';?>"></script>
    <script class="include" type="text/javascript" src="<?= base_url().'asset/js/jquery.dcjqaccordion.2.7.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery.scrollTo.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery.nicescroll.js';?>" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?= base_url().'asset/js/common-scripts.js';?>"></script>
    <script src="<?= base_url().'asset/js/spin.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/jquery.gritter.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/gritter-conf.js';?>"></script>


    <!--script for this page-->
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.paginate.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.sort.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.filter.js';?>"></script>

    <script src="<?= base_url().'asset/js/bootstrap-datepicker.js';?>"></script>


    <!-- datepicker -->
    <script type="text/javascript">
    $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
    </script>    

    <!-- Ini JS buat toggle menu -->
    <script type="text/javascript">
      $('.sidebar-toggle-box').click(function(){
      // toggle icon
      $(this).find("#SlideBar").toggleClass("fa fa-bars fa fa-arrow-right fa-3x");
    });
    </script>

    <!-- Ini JS buat hide icon menu -->
    <script type="text/javascript">
      $('.sub-menu').click(function(){
      // toggle icon
      $(this).find("#panah").toggleClass("fa fa-chevron-right fa fa-chevron-down");
    });
    </script>

    <script type="text/javascript">
    $(function () {
        $('.footable').footable();
    });
    </script>   

    <!-- Ini buat autocomplete -->
    <script type="text/javascript">
        $(function(){
            $("#query").typeahead({
                source: function(typeahead, query){
                  $.ajax({
                      url: '<?php echo base_url("search/cari")?>',
                      type:'POST',
                      data: 'search=' + query,
                      dataType:'JSON',
                      async:'false',
                      success: function(data){
                         typeahead.process(data);
                      }
                  });
                }
            });
        });
    </script>

    <!-- Ini Slide Modal Edit -->
    <script type="text/javascript">
        $('#modalEdit').on('shown.bs.modal', function () {
        $('#recipient-name').focus()
        })
    </script>   

    <!-- button scroll top -->
    <script type="text/javascript">
    $(document).ready(function(){
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.go-top').fadeIn('slow');
        } else {
            $('.go-top').fadeOut('slow');
        }
    });
    
    $('.go-top').click(function(){
        $('html, body').animate({scrollTop : 0}, 1000);
        return false;
    });
    
});
 
    </script>

  </body>
</html>