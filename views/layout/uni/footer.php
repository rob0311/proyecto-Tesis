 <!--footer start-->
 <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>UNAN-LEON</strong>. Derecho Reservados
        </p>
        <div class="credits">
         <!--    Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>-->
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  
  <!-- js placed at the end of the document so the pages load faster -->
  
    

  <script src="<?php echo $_layoutParams['ruta_js'];?>bootstrap.min.js"></script>
   
   
  <!--common script for all pages-->
 
  <script type="text/javascript" src="<?php echo $_layoutParams['ruta_js'];?>jquery.gritter.js"></script>
  <!--script for this page-->
  <script src="<?php echo $_layoutParams['ruta_js'];?>zabuto_calendar.js"></script>
  <script src="<?php echo $_layoutParams['ruta_js'];?>sweetalert2.min.js"></script>
   <script src="<?php echo $_layoutParams['ruta_js'];?>jquery.scrollTo.min.js"></script>
  <script src="<?php echo $_layoutParams['ruta_js'];?>jquery.nicescroll.js"></script>
  <script src="<?php echo $_layoutParams['ruta_js'];?>modernizr-2.6.2.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo $_layoutParams['ruta_js'];?>jquery.dcjqaccordion.2.7.js"></script>
 
 
  <!--common script for all pages-->
  <script src="<?php echo $_layoutParams['ruta_js'];?>common-scripts.js"></script>
 
  <script type="text/javascript" src="<?php echo $_layoutParams['ruta_js'];?>gritter-conf.js"></script>
  <!--script for this page-->
 
  <script src="<?php echo $_layoutParams['ruta_js'];?>zabuto_calendar.js"></script>
  <!--script para DataTable-->
 
  
 


  
  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  

  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo $_layoutParams['ruta_js'];?>jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?php echo $_layoutParams['ruta_img'];?>login-bg.jpg", {
      speed: 500
    });
  </script>
  

</body>





</html>