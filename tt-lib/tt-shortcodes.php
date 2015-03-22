<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Button

// [hsr_btn size="lg" link="#" color="#003764" fcolor="#ffffff" float="none" target="" class=""]Button Name[/hsr_btn], homes_for_sale_btn

add_shortcode( 'tt_btn', 'tt_btn' );
function tt_btn($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '',
        'color'  => '#003764', //#003764
        'fcolor'  => '#ffffff', //#ffffff
        'link'    => '#',
        'float'    => 'none',
        'target'    => '_blank',
        'class' => '',
        'block' => 'n',
    ), $atts ) );
    
    $classes = 'btn btn-default ' . $class . ' btn-' . $size;
    
    if ($block == 'y') {
    	$classes .= ' btn-block';
    }

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';" target="' . $target . '">' . $content . '</a>';
}

//////////////////////////////////////////////////////// TT rule

add_shortcode( 'tt_rule', 'tt_rule' ); //line
function tt_rule($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '1px',
        'color'  => '#ccc',
        'classes'  => 'col-sm-12 rule',
    ), $atts ) );

    return '<div class="' . $classes . '" style="border-top:' . $size . ' solid ' . $color .';padding:1.0em 0;"></div>';
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Post Feed

add_shortcode( 'tt_posts', 'tt_posts' ); // echo do_shortcode('[tt_posts limit="-1" cat_name="home"]');
function tt_posts ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
		), $atts )
	);
    
/////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat,
    //'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = '250,125';
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        if (empty( $image )) {
            $image = '<img src="/wp-content/themes/math/images/img-fpo.png">';
        }
         
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><div class="list-wrap"><div class="list-img col-xs-12 col-sm-4">';  
    $output .= $image .
                '</div>'.
                '<div class="row col-xs-12 col-sm-8">'. 
                    '<h2>'. $post->post_title .'</h2>'.
                    '<p>'. $post->excerpt .'</p>'.
                '</div></div>'.
                '</a>'.
                '<div class="clearfix"></div>';


	}
} else {
	// no posts found
	echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Button

// [tt_icon name="group" bg="black" icon="white"

add_shortcode( 'tt_icon', 'tt_icon' );
function tt_icon($atts, $content = null) {
    extract(shortcode_atts(array(
        'name'   => 'group',
        'size'   => '',
        'bg'  => '#79a99c', //#003764
        'icon'  => '#f2f2f2', //#ffffff
        'link'    => '#',
        'target'    => '_blank',
    ), $atts ) );
    
    $classes = 'btn btn-default ' . $class . ' btn-' . $size;
    
    $w = 12;
    $h = 8;
    $m = 18;
    $f = 10;
    
    if ($name == 'rocket') {
        
        // HTML block
    	$html = '' ?> 



    <div id="" class="col-xs-<?php echo $w ?>" style="border:0px solid pink;">
        
        <p class="text-center"><svg version="1.1" baseProfile="basic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 250 233.2" xml:space="preserve" width="100%" >
        <g id="">
            <path id="shape" fill="<?php echo $bg ?>" d="M125,233.2c-4.9,0-9.6-0.6-13.1-1.7L14.1,201C6.3,198.6,0,190,0,181.8V51.4c0-8.1,6.3-16.8,14.1-19.2
                l97.8-30.6C115.4,0.6,120.1,0,125,0c4.9,0,9.6,0.6,13.1,1.7l97.8,30.6c7.8,2.4,14.1,11,14.1,19.2v130.4c0,8.2-6.3,16.8-14.1,19.2
                l-97.8,30.6C134.6,232.6,129.9,233.2,125,233.2"/>
        </g>
        </svg></p>
        
        <div class="row" style="margin:-<?php echo $m ?>.0vw 0 0 0;">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <p class="text-center"><i class="fa fa-rocket text-center" style="color:<?php echo $icon ?>;border:0px solid green;font-size:<?php echo $f ?>.0vw;"></i></p>
                </div>
            </div>
        </div>
    </div>




<?php ''; // end HTML
            
    return $html;        
   
    } else {
    
    	return '<div class="row">'.
        '<div id="pkr-icon-test" class="col-sm-6 col-md-4" style="width:'.$size.';height:'.$size.';max-width:300px;border:1px solid pink;">'.
        '<svg version="1.1" baseProfile="basic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 250 233.2" xml:space="preserve" width="'.$size.'" >
<g id="pkr-icon">
	<path id="shape" fill="'.$bg.'" d="M125,233.2c-4.9,0-9.6-0.6-13.1-1.7L14.1,201C6.3,198.6,0,190,0,181.8V51.4c0-8.1,6.3-16.8,14.1-19.2
		l97.8-30.6C115.4,0.6,120.1,0,125,0c4.9,0,9.6,0.6,13.1,1.7l97.8,30.6c7.8,2.4,14.1,11,14.1,19.2v130.4c0,8.2-6.3,16.8-14.1,19.2
		l-97.8,30.6C134.6,232.6,129.9,233.2,125,233.2"/>
</g>
</svg>'.
            
            '<div class="icon-test" style="margin:-100% 0 0 0;text-align:center;width:100%;height:50%;padding:25% 20% 0 20%;float:left;border:1px solid blue;position:relative;z-index:50;color:'.$icon.';">'.
                '<i class="fa fa-'.$name.'" style="width:100%;border:1px solid green;font-size:700%"></i>'.
            '</div>'.
            '</div>'.
            '</div>';
    }


   // else do nothing 
}



//////////////////////////////////////////////////////// TT rule

add_shortcode( 'tt_icon2', 'tt_icon2' ); // tt_icon2 name="" size="" bg"" icon="" link="" target=""
function tt_icon2($atts, $content = null) {
    extract(shortcode_atts(array(
        'name'   => 'group',
        'size'   => '100px',
        'bg'  => '#79a99c', 
        'icon'  => '#f2f2f2',
        'link'    => '#',
        'target'    => '_blank',
    ), $atts ) );
    
    if ($name == 'group') {
            $group_display = 'inline-block';
        } else {
            $group_display = 'none';
        }
    if ($name == 'rocket') {
            $rocket_display = 'inline-block';
        } else {
            $rocket_display = 'none';
        }
    if ($name == 'bolt') {
            $bolt_display = 'inline-block';
        } else {
            $bolt_display = 'none';
        } 
    if ($name == 'flag') {
            $flag_display = 'inline-block';
        } else {
            $flag_display = 'none';
        } 
    if ($name == 'plane') {
            $plane_display = 'inline-block';
        } else {
            $plane_display = 'none';
        } 
    if ($name == 'calendar') {
            $calendar_display = 'inline-block';
        } else {
            $calendar_display = 'none';
        } 

    $html = '' ?> 

<svg version="1.1" baseProfile="basic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 250 233.2" xml:space="preserve" width="<?php echo $size; ?>">
<g id="shape" display="inline-block">
	<path fill="<?php echo $bg; ?>" d="M125,233.2c-4.9,0-9.6-0.6-13.1-1.7L14.1,201C6.3,198.6,0,190,0,181.8V51.4c0-8.1,6.3-16.8,14.1-19.2
		l97.8-30.6C115.4,0.6,120.1,0,125,0c4.9,0,9.6,0.6,13.1,1.7l97.8,30.6c7.8,2.4,14.1,11,14.1,19.2v130.4c0,8.2-6.3,16.8-14.1,19.2
		l-97.8,30.6C134.6,232.6,129.9,233.2,125,233.2"/>
</g>
<g id="group" display="<?php echo $group_display; ?>">
	<g display="inline">
		<path fill="#FFFFFF" d="M92.6,95c8,0,14.5-6.5,14.5-14.5c0-8-6.5-14.5-14.5-14.5c-8,0-14.5,6.5-14.5,14.5
			C78.1,88.5,84.6,95,92.6,95z"/>
		<path fill="#FFFFFF" d="M125.3,124c12,0,21.8-9.8,21.8-21.8c0-12-9.8-21.8-21.8-21.8c-12,0-21.8,9.8-21.8,21.8
			C103.5,114.3,113.3,124,125.3,124z"/>
		<path fill="#FFFFFF" d="M158,95c8,0,14.5-6.5,14.5-14.5c0-8-6.5-14.5-14.5-14.5c-8,0-14.5,6.5-14.5,14.5C143.5,88.5,150,95,158,95
			z"/>
		<path fill="#FFFFFF" d="M104.5,116.6c-2.9-4.3-4.6-9.3-4.6-14.4c0-1.2,0.1-2.4,0.3-3.7c-2.4,0.9-4.9,1.3-7.5,1.3
			C85,99.8,79.1,95,77.9,95c-7.2,0-7,15.2-7,19.8c0,6.3,5.3,8.8,11,8.8h7.6C93.3,119.6,98.6,116.7,104.5,116.6z"/>
		<path fill="#FFFFFF" d="M172.7,95c-1.2,0-7.1,4.8-14.7,4.8c-2.6,0-5.1-0.5-7.5-1.3c0.2,1.2,0.3,2.5,0.3,3.7
			c0,5.2-1.6,10.1-4.6,14.3c5.9,0.2,11.2,3.1,15,7.1h7.6c5.7,0,11-2.5,11-8.8C179.8,110.2,179.9,95,172.7,95z"/>
		<path fill="#FFFFFF" d="M145.6,120.4c-1.9,0-9,7.9-20.3,7.9c-11.3,0-18.4-7.9-20.3-7.9c-16.6,0-19.6,19.7-19.6,32.5
			c0,9.2,6.1,14.7,15.1,14.7h49.6c9.1,0,15.1-5.5,15.1-14.7C165.2,140.1,162.2,120.4,145.6,120.4z"/>
	</g>
</g>
<g id="rocket" display="<?php echo $rocket_display; ?>">
	<path display="inline" fill="<?php echo $icon; ?>" d="M178.2,64.5c-23.5,0-36.3,5.4-53.2,22.2c-3.8,3.9-7.8,8.4-11.9,13.1l-25.5,1.3
		c-0.7,0.1-1.3,0.5-1.8,1.1l-15.1,25.9c-0.5,0.8-0.3,1.9,0.3,2.6l4.3,4.3c0.4,0.4,1,0.6,1.5,0.6c0.2,0,0.4,0,0.6-0.1l18.6-5.7
		l18.9,18.9l-5.7,18.6c-0.2,0.7,0,1.5,0.5,2.2l4.3,4.3c0.5,0.4,1,0.6,1.6,0.6c0.4,0,0.7-0.1,1.1-0.3l25.9-15.1
		c0.6-0.4,1-1.1,1.1-1.8l1.3-25.5c4.8-4,9.2-8,13.1-11.9c16-16,22.2-30.9,22.2-53.3C180.5,65.5,179.4,64.5,178.2,64.5z M158.9,92.6
		c-3.6,0-6.5-2.9-6.5-6.5c0-3.6,2.9-6.5,6.5-6.5c3.6,0,6.5,2.9,6.5,6.5C165.4,89.7,162.5,92.6,158.9,92.6z"/>
</g>
<g id="bolt" display="<?php echo $bolt_display; ?>">
	<g display="inline">
		<path fill="<?php echo $icon; ?>" d="M158.7,90.2c-0.7-0.7-1.6-1.1-2.6-1.1c-0.3,0-0.6,0.1-0.9,0.2l-29.9,7.4l12.9-34.9
			c0.2-0.5,0.4-0.9,0.4-1.4c0-1.7-1.5-3.2-3.4-3.2h-24.7c-1.6,0-2.9,1-3.3,2.4L92,121.8c-0.2,1.1,0.1,2.2,1,2.9
			c0.6,0.5,1.5,0.8,2.3,0.8c0.3,0,0.6,0,0.9-0.1l30.6-7.6L112,178.8c-0.4,1.6,0.6,3.2,2.3,3.7c0.4,0.1,0.8,0.2,1.1,0.2
			c1.4,0,2.6-0.8,3.2-1.9l40.7-87.2C159.7,92.4,159.5,91.2,158.7,90.2"/>
	</g>
</g>
<g id="flag" display="<?php echo $flag_display; ?>">
	<g display="inline">
		<path fill="<?php echo $icon; ?>" d="M76.7,68.7c-4.7,0-8.7,3.8-8.7,8.4c0,3,2,5.7,4,7.3v83.5c0,1.1,1.5,1.7,2.6,1.7h4.2c1.1,0,2.2-0.6,2.2-1.7
			V84.4c3-1.5,4.2-4.2,4.2-7.3C85.2,72.5,81.4,68.7,76.7,68.7z"/>
		<path fill="<?php echo $icon; ?>" d="M177.9,77.1c-2.9,0-14,9-24.3,9c-2,0-3.9-0.3-5.8-1.3c-9.2-4.3-17.3-7.7-27.6-7.7
			c-9.4,0-19.4,3.7-27.8,7.9c-1.7,0.9-3.7,1.8-5.3,2.8c-1.3,0.9-2.1,2-2.1,3.6v48.9c0,2.3,2,4.2,4.3,4.2c0.8,0,1.5-0.2,2.2-0.6
			c9.1-4.9,20.1-9.6,30.6-9.6c14.4,0,20.2,9.2,32.3,9.2c8.6,0,16.8-3.6,24.2-7.6c1.9-1,3.3-1.9,3.3-4.4V81.4
			C182,79,180.2,77.1,177.9,77.1z"/>
	</g>
</g>
<g id="plane" display="<?php echo $plane_display; ?>">
	<g>
		<path fill="<?php echo $icon; ?>" d="M172.2,71.9c-0.5-0.4-1.2-0.6-1.9-0.6c-0.6,0-1.2,0.2-1.7,0.5l-89.6,51.7c-1.1,0.6-1.8,1.9-1.7,3.2
			c0.1,1.3,0.9,2.5,2.2,3l21.3,8.7l57.6-49.8l-46.5,57v18.8c0,1.5,0.9,2.7,2.3,3.2c0.4,0.2,0.8,0.2,1.2,0.2c1,0,2-0.4,2.6-1.2
			l13-15.9l24.4,10c0.4,0.2,0.9,0.3,1.3,0.3c0.6,0,1.2-0.2,1.7-0.4c0.9-0.5,1.6-1.4,1.7-2.4l13.8-82.7
			C173.9,74,173.3,72.7,172.2,71.9"/>
	</g>
</g>
<g id="calendar" display="<?php echo $calendar_display; ?>">
	<g display="inline">
		<path fill="<?php echo $icon; ?>" d="M180.5,83.4c0-4.7-3.9-8.5-8.5-8.5h-8.5v-6.4c0-5.9-4.8-10.7-10.7-10.7h-4.3c-5.9,0-10.7,4.8-10.7,10.7
			v6.4h-25.6v-6.4c0-5.9-4.8-10.7-10.7-10.7h-4.3c-5.9,0-10.7,4.8-10.7,10.7v6.4H78c-4.7,0-8.5,3.9-8.5,8.5v85.4
			c0,4.7,3.9,8.5,8.5,8.5h94c4.7,0,8.5-3.9,8.5-8.5V83.4z M154.9,87.7c0,1.1-1,2.1-2.1,2.1h-4.3c-1.1,0-2.1-1-2.1-2.1V68.5
			c0-1.1,1-2.1,2.1-2.1h4.3c1.1,0,2.1,1,2.1,2.1V87.7z M152.8,100.5H172v19.2h-19.2V100.5z M127.1,100.5h21.4v19.2h-21.4V100.5z
			 M152.8,124H172v21.4h-19.2V124z M103.6,87.7c0,1.1-1,2.1-2.1,2.1h-4.3c-1.1,0-2.1-1-2.1-2.1V68.5c0-1.1,1-2.1,2.1-2.1h4.3
			c1.1,0,2.1,1,2.1,2.1V87.7z M127.1,124h21.4v21.4h-21.4V124z M152.8,149.6H172v19.2h-19.2V149.6z M101.5,100.5h21.4v19.2h-21.4
			V100.5z M127.1,149.6h21.4v19.2h-21.4V149.6z M78,100.5h19.2v19.2H78V100.5z M101.5,124h21.4v21.4h-21.4V124z M78,124h19.2v21.4
			H78V124z M101.5,149.6h21.4v19.2h-21.4V149.6z M78,149.6h19.2v19.2H78V149.6z"/>
	</g>
</g>    
</svg>

<?php ;

}

////////////////////////////////////////////////////////








