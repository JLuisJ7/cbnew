<?php

/* 

Template Name: Home Principal ES

*/ 

?>

<?php include("header-principal.php"); ?>

  <div class="container bg-datos">
    <div class="row bg-datos">
  <div class="small-12 columns datos">
    <p style="display:inline-block!important;">
        <span class="hide-for-small" >Boutique Hotels Lima Perú - Av. De La Aviación 565 Miraflores Lima - Perú Teléfono: (511) 421-7354 - (511) 421 a 1.033 - En EE.UU.: (720) 648-3451</span>
       <span class="flags"><a href="http://www.casabellaperu.net/casabella-es">
        <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/spanish.gif" width="16" height="11" alt="spanish" /></a> <a href="http://www.casabellaperu.net/"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/english.gif" width="16" height="11" alt="english" /></a> <a href="http://www.peru.o-kom.info/casabellaperu/" target="_self"><img src="http://www.casabellaperu.net//wp-content/themes/casaweb/images/icons/german.gif" width="16" height="11" alt="german" /></a></span>
     </p>
  </div>
 
</div>
</div>

  <div class="container">
    <div class="row">
      <div class="small-12 columns center header_logo">
        <a href="http://www.casabellaperu.net/">
          <img src="<?php bloginfo('template_url'); ?>/images/ES/logo.png" alt="lima peru hotels">
        </a>
      </div>      
    </div>

    
    <div class="row hide-for-small-only">
      <div class="small-12 medium-6 large-5 columns">
        <div class="image_sanisidro">
          <a href="http://www.casabellaperu.net/es"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/sanisidro.jpg" width="372" height="221" /></a>
        </div>
      </div>
      <div class="small-12 medium-6 large-2 columns show-for-large-only">
       <p style="color: white!important;">Escoja una ubicación</p>
      </div>
      <div class="small-12 medium-6 large-5 columns">
        <div class="image_miraflores">
          <a href="http://www.casabellaperu.net/miraflores/es"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/miraflores.jpg" width="371" height="222" /></a>
        </div>
      </div>
    </div>
    <br>  

     <div class="row">
      <div class="small-12 medium-6 large-5 columns">
          <div class="home-sanisidro">
            <div class="image_sanisidro show-for-small-only">
          <a href="http://www.casabellaperu.net/es"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/sanisidro.jpg" width="372" height="221" /></a>
        </div>
            <h1 >
              <a href="http://www.casabellaperu.net/es" style="color:#000; font-weight:normal">C o u n t r y &nbsp;C l u b &nbsp;A r e a<br> </a><span style="color:#aaa; font-size:15px;font-weight:normal;">S a n &nbsp;I s i d r o</span></h1><!-- Fin Sección San Isidro -->



            <?php query_posts('showposts=1&page_id=1047');



            while (have_posts()) : the_post();



            the_content("Read More &rarr;");



            endwhile; 



            ?>



</div>
      </div>
      <div class="small-12 medium-6 large-2 columns show-for-large-only">
       <p style="color:#319BD8">Escoja una ubicación</p>
      </div>
      <div class="small-12 medium-6 large-5 columns">
        <div class="home-miraflores">
          <div class="image_miraflores  show-for-small-only">
          <a href="http://www.casabellaperu.net/miraflores/es"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/miraflores.jpg" width="371" height="222" /></a>
        </div>

<h1><a href="http://www.casabellaperu.net/miraflores/es" style="color:#000; font-weight:normal">M i r a f l o r e s</a></h1>



<?php query_posts('showposts=1&page_id=1049');



while (have_posts()) : the_post();



the_content("Read More &rarr;");



endwhile; 



?>



</div>
      </div>
    </div>
  


    </div>
    
      <div style="  border-top: solid 1px #eee;margin-top:1em;">
        <div class="row" style=" padding: 1em; margin-top: 1em;">
            
              <div class="small-12 small-centered columns">
                
                <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
          <li><a href="http://twitter.com/casabellaperu" title="hotel casa bella in twitter">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/twitter.png"  alt="casa bella twitter" class="mb">
                </a><!-- Your content goes here --></li>
          <li><a href="http://www.facebook.com/casabellaperu" title="hotel casa bella in facebook">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/facebook.png" alt="casa bella facebook" class="mb">
                </a><!-- Your content goes here --></li>
          <li><a href="http://www.tripadvisor.com/Hotel_Review-g294316-d628608-Reviews-Casa_Bella_B_B-Lima.html" title="hotel casa bella in tripadvisor">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/tripadvisor.png" alt="casa bella tripadvisor" class="mb">
                </a><!-- Your content goes here --></li>
          
        <li><a href="http://www.peru.info/es/iperu-oficinas-de-informacion-y-asistencia-al-turista-ip4-1-home" title="Tourist information and assistance">
                  <img src="<?php bloginfo( 'template_directory' ); ?>/images/social/iperu.jpg" alt="Tourist information and assistance" style="margin-right:0" class="mb">
                </a></li>
                <li><a href="#">
                  <img width="84" height="38" border="0" alt="El Tiempo Lima-Callao / Aerop. Internacional Jorgechavez" src="http://www.tutiempo.net/imagenes_asociados/84x38/SPIM.png" style="" class="mb">
                </a></li>
        </ul>
                
                
                
            
        
              </div>         
        </div>
      </div>
      <div class="row" style="  margin-bottom: 1.5em;">
        <div class="small-6 medium-6 large-2 small-centered columns center">
        <img width="110" height="65" border="0" alt="marca peru" src="http://www.casabellaperu.net/images/marca-peru.jpg">
      </div>
      </div>


  </div>
  
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="small-11 small-centered columns">
              <ul class="menu-footer">

            <li><div id="">Casa Bella</div></li> 


                <li><a href="http://www.casabellaperu.net/sanisidro">Home</a></li>

                <li><a href="http://www.casabellaperu.net/about-us/">About Us</a></li>

                <li><a href="http://www.casabellaperu.net/services/">Services</a></li>

                <li><a href="http://www.casabellaperu.net/tours/">Tours</a></li>

            </ul>
            </div>
          </div>
          <div class="row">
            <div class="small-11 small-centered columns">
              <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 font-12">
              <li><span class="bold">San Isidro Phone:</span> (511) 421-7354 - (511) 421-1033 In USA: (720) 648-3451</li>
              <li><span class="bold">Miraflores Phone:</span> +511 241-1446 – +511 241-8825 In USA: (720) 648-3451</li>
            </ul>
              
            </div>
          </div>
            
          </div> 
          <div class="row center ">
            <div class="small-12 columns bold font-12">
              © Casa Bella Lima Peru Hotels | All Rights Reserved.
            </div>
            <div class="small-12 columns developer">
              <a href="http://www.tres.pe/" title="marketing digital en peru">Marketing Digital</a> por TresMedia
            </div>
          </div>
        </div>
      </footer>


  
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</html>