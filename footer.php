<div class="row">
    <div id="footer-wrap" class="col-sm-12">
        <div id="footer-col" class="col-sm-3">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pkr-sprite-2.svg" width="80%">
            </div>
        </div>
        <div id="footer-col" class="col-sm-3">
            <ul class="footer-links">
                <li><a href="#">Construction Management Software</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Sed mattis fringilla</a></li>
                <li><a href="#">Integer tellus</a></li>
                <li><a href="#">Duis odio eros, dignissim at</a></li>
            </ul>
        </div>
        <div id="footer-col" class="col-sm-3">
            [map]
        </div>
        <div id="footer-col" class="col-sm-3">
            <p>    
            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">545 Mainstream Drive</br>
                    Suite 102</span></br>
                <span itemprop="addressLocality">Nashville</span>, <span itemprop="addressRegion">TN</span></br>
                <span itemprop="postalCode">37228</span> <span itemprop="addressCountry">USA</span></br>
                <span itemprop="telephone">1 (615) 212-3036</span></br>
            </address>
            </p>

        </div>
        
    </div>    
</div>
          
      
  <div id="copyright" class="col-sm-10 col-sm-offset-1">
    <p><?php _e('&copy;','flexx'); echo ' '.date('Y').' '; _e(''.bloginfo('name'). ' - All rights reserved.','flexx'); ?> | <a href="#" title="title">link</a> | </p>
  </div>
  
</div><!--row-->

<?php wp_footer(); ?>

</body>
</html>