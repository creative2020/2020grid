<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">30 Seconds to Paskr</h4>
          </div>
          <div class="modal-body">
            <p class="text-center"><iframe width="800" height="600" src="//www.youtube.com/embed/-_Xzvj98g4c?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--            <button type="button" class="btn btn-primary">Save changes</button>-->
          </div>
        </div>
      </div>
    </div>

<div class="row">
<!--    <div id="cover"></div>-->
    <a href="/">
        <div id="block-one" class="col-sm-3">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-fpo.png" width="65%">
            </div>
            <div class="logo-tagline">
                <h1>Creativity</h1>
                <h1>with Focus</h1>
                <h2>Design</h2>
                <h2>+ Web</h2>
                
            </div>
        </div>
    </a>    
    <div id="block-two" class="col-sm-6">
        <div class="tagline">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-fpo.png" width="65%">
        </div>
        <div class="block-text">
            <h2 class="norm">Our Mission</h2>
            <h2 class="over">What 2 goals determine our every move?</h2>
        </div>
    </div>
    <div id="block-three" class="col-sm-3">
        <div class="hard-hat">
            <img src="<?php echo get_template_directory_uri(); ?>/img-fpo.png" width="40%">
        </div>
        <div class="block-text">
            <h2 class="norm">Client login</h2>
            <h2 class="over">Our clients are awesome</h2>
        </div>
        
        <div class="pkr-icon-1 col-md-3 pull-left">
            
        </div>
        <div class="pkr-icon-2 col-md-3 pull-left">
            
        </div>
        <div class="pkr-icon-3 col-md-3 pull-left">
            
        </div>
        <div class="pkr-icon-4 col-md-3 pull-left">
            
        </div>
        
    </div>
    <a href="/sample-page">
        <div id="block-four" class="col-sm-3">
        <div class="start-here">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-fpo.png" width="80%">
        </div>
        <div class="block-text">
            <h2 class="norm"></h2>
            <h2 class="over"></h2>
        </div>
        <div class="block-icon">
            <i class="fa fa-arrow-down"></i>
        </div>
        </div>
    </a>
    <div id="block-five" class="col-sm-3">
        <div class="pkr-icon-container col-md-8 col-md-offset-2">
            <div class="pkr-shape col-md-10 col-md-offset-1">
                <div class="pkr-icon">
                    <i class="fa fa-heart"></i>
                </div>
            </div>
        </div>
        <div class="block-text col-md-12">
            <h2 class="norm">We love design</h2>
            <h2 class="over">Check out our portfolio</h2>
        </div>
    </div>
    <div id="block-six" class="col-sm-3">
        <div class="pkr-icon-container col-md-8 col-md-offset-2">
            <div class="pkr-shape col-md-10 col-md-offset-1">
                <div class="pkr-icon">
                    <i class="fa fa-rocket"></i>
                </div>
            </div>
        </div>
        <div class="block-text col-md-12">
            <h2 class="norm">Websites</h2>
            <h2 class="over">Design meets function</h2>
        </div>
    </div>
    <tt-button data-toggle="modal" data-target="#myModal">
        <div id="block-seven" class="col-sm-6">
            <div class="block-text col-md-6">
                <h2 class="norm">Design stuff</h2>
                <h2 class="over">goes here</h2>
            </div>
            <div class="pkr-icon-container col-md-2 col-md-offset-0">
                <div class="pkr-shape col-md-10 col-md-offset-1">
                    <div class="pkr-icon">
                        <i class="fa fa-play"></i>
                    </div>
                </div>
            </div>
            <div class="block-text col-md-4">
                <h3>hello</h3>
                
    
                
            </div>
        </div>
    </tt-button>    
    <div id="block-eight" class="col-sm-3">
        <div class="pkr-icon-container col-md-8 col-md-offset-2">
            <div class="pkr-shape col-md-10 col-md-offset-1">
                <div class="pkr-icon">
                    <i class="fa fa-flag"></i>
                </div>
            </div>
        </div>
        <div class="block-text col-md-12">
            <h2 class="norm">Blog</h2>
            <h2 class="over">Articles for everyone</h2>
        </div>
    </div>
    <div id="block-nine" class="col-sm-3">
        <div class="pkr-icon-container col-md-8 col-md-offset-2">
            <div class="pkr-shape col-md-10 col-md-offset-1">
                <div class="pkr-icon">
                    <i class="fa fa-group"></i>
                </div>
            </div>
        </div>
        <div class="block-text col-md-12">
            <h2 class="norm">Contact</h2>
            <h2 class="over">Lets grab coffee</h2>
        </div>
    </div>
</div> <!--row-->

<!--test-->



<!--test-->

<div class="row">
    <div class="section clearfix">
        <div class="col-md-12">
            <?php //echo do_shortcode('[tt_icon name="rocket" bg="#c0bead" icon="#f2f2f2" ]'); ?>
            <?php //echo do_shortcode('[tt_icon name="rocket" bg="#f6b02e" icon="#f2f2f2" ]'); ?>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <h2 class="text-center">Paskr: Where People and Process Come Together</h2>
            <p class="text-intro text-center">
Paskr is a cloud-based, on-demand solution for comprehensive construction management. We combine software innovation with real feedback from the field to simplify your job one task at a time. Ultimately, we’ll help you add hours back into your days and enjoy more efficient, profitable projects.</p>

<p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Take your projects from “headache” to “handled” with Paskr software.</a></p>
        </div>
    </div>
</div> <!--row-->

<div class="row">
    <div class="section-bg clearfix">
        <h2 class="text-center">Streamlined Construction Management</h2>
        <a href="#" class="section-hover calendar"><div class="col-sm-2 col-sm-offset-1">
            <div class="icon calendar"></div>
            <h3 class="text-center">Automatic updating</h3></div>
        </a>
        <a href="#" class="section-hover bolt"><div class="col-sm-2">
            <div class="icon bolt"></div>
            <h3 class="text-center">Single data entry</h3></div>
        </a>
        <a href="#" class="section-hover dollar"><div class="col-sm-2">
            <div class="icon dollar"></div>
            <h3 class="text-center">Financial integration</h3></div>
        </a>
        <a href="#" class="section-hover rocket"><div class="col-sm-2">
            <div class="icon rocket"></div>
            <h3 class="text-center">Inherent approval process</h3></div>
        </a>
        <a href="#" class="section-hover group"><div class="col-sm-2">
            <div class="icon group"></div>
            <h3 class="text-center">Seamless collaboration</h3></div>
        </a>
        <div class="col-md-10 col-md-offset-1">
            
            <p class="text-intro text-center">Looking for a way to get more done in less time? </br>Take a peek at some of the features that make Paskr software a standout.</p>
            
            <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Explore full feature list</a></p>
        </div>
    </div>
</div> <!--row-->

<div class="row">
    <div class="section clearfix">
        <div class="col-md-12">
        <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-4 col-sm-offset-4">
                    <a href="#" class="section-hover flag">
                        <div class="icon flag" style="background-size:60%;"></div>
                    </a>
                </div>
                    
            <div class="col-sm-12">
                <h2 class="text-center">The Kind of Promise You Deserve</h2>
                <p class="text-intro text-center">At Paskr, we don’t just talk a good game. From our software engineers to our support staff, we have extensive field experience and have literally walked your walk. We’re familiar with even the most minor hassles that make construction management an ongoing challenge. That’s why we’ve designed our software to minimize paperwork, automate scheduling and eliminate redundancies. In short, we promise to make life easier.</p>
                    
                    <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn how we deliver on Paskr’s 5 Brand Promises.</a></p>
                    </div>
            </div>
        </div>
    </div>
</div> <!--row-->

<div class="row">
    
</div> <!--row-->








  <?php get_footer() ?>
