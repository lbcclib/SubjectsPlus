
<div id="push"></div>
</div><!--end #wrap-->

</div> <!--end #body_inner_wrap-->
</div> <!--end #pure-u-11-12 -->
<div id="footer" class="pure-u-1">
    <div class="pure-g addresses">
      <div class="pure-u-1 pure-u-md-1-6"></div>
      <div class="pure-u-1 pure-u-md-1-6">
        <ul class="arrow-list">
          <li><a href="https://library.linnbenton.edu/contact">Get research help</a></li>
          <li><a href="https://libcat.linnbenton.edu/eg/opac/myopac/main?redirect_to=%2Feg%2Fopac%2Fmyopac%2Fmain">Check my Library Account</a></li>
        </ul>
        <a href="https://www.facebook.com/lbcclibrary/" class="dark-blue-background">
          <span class="fa fa-facebook-square fa-3x" aria-label="Facebook"></span></a>
        <a href="https://www.instagram.com/lbcc_library/" class="dark-blue-background">
          <span class="fa fa-instagram fa-3x" aria-label="Instagram"></span></a>
      </div>
      <div class="pure-u-1 pure-u-md-1-6">
LBCC Library<br />
6500 Pacific Blvd. SW</br />
Albany, Oregon 97321
      </div>
      <div class="pure-u-1 pure-u-md-1-6">
Healthcare Occupations Center Library<br />
541-918-8840<br />
300 Mullins Dr.<br />
Lebanon, Oregon 97355
      </div>
      <div class="pure-u-1 pure-u-md-1-6">
Benton Center<br />
757 NW Polk Ave.<br />
Corvallis, Oregon 97330
      </div>
    </div>
    <div class="center">
    <?php 
        if (isset($last_mod) && $last_mod != "") {
            print _("Revised: ") . $last_mod;
        }

    ?>
    <br />
    Powered by <a class="dark-blue-background" href="http://www.subjectsplus.com/">SubjectsPlus</a> -
    <a class="dark-blue-background" href="https://libhelp.linnbenton.edu/control/guides/guide.php?subject_id=<?php echo $this_id; ?>">Edit this guide</a>
    </div>


</div> <!--end pure-u-1/#footer-->
</div> <!--end pure-g-->
</div> <!-- end #wrapper-full-->



<script>
  function printView() {
      var visible_tab;

    $('#tab-body').children().each(function () {
        if ($(this).is(":visible")) {
            visible_tab = $(this);        
        } 
        else {
            $(this).show();        
        }

        
      });
      window.print();
      
      
      $('#tab-body').children().each(function () {
    $(this).hide(); 
    
      });
      
      $(visible_tab).show();

  } //end printView()


//show print dialog
function showPrintDialog() {
  
  $(".printer_tabs").colorbox({html: "<h1>Print Selection</h1><div class=\"printDialog\"><ul><li><a onclick=\"window.print();\" class=\"pure-button pure-button-topsearch\">Print Current Tab</a></li><li><a onclick=\"printView();\" class=\"pure-button pure-button-topsearch\">Print All Tabs</a></li></ul></div>", innerWidth:640, innerHeight:480});

}


$(".print-img-tabs").click(function() {    
    showPrintDialog()
});

$('.print-img-no-tabs').click(function(){ window.print(); });

  //fix FOUC
  $('#tab-container').attr('style', 'visibility:visible;');

  //remove favorites from DOM
    $(".uml-quick-links").remove();
  
</script>


</body>
</html>
