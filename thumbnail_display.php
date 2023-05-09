<?php

function thumbnail_display($atts) {
	// Attributes
	$atts = shortcode_atts(
		array(
			'postid' => get_the_ID(),
		), 
		$atts
	);
	// Attributes in var
	$post_id = $atts['postid']; 
	ob_start();
?>


<div class="container thumbnailposts">
    <div class="row firstrow">
    	<?php
    	$recent_posts = wp_get_recent_posts(array(
    	    'post_type'   => 'casino_list',
    		'numberposts' => 5, // Number of recent posts thumbnails to display in first row
    		'post_status' => 'publish' // Show only the published posts
    	));
    	// loop through the first 5 posts
    	foreach( $recent_posts as $key => $post_item ) :
    		// first post has larger column
    		if ($key === 0) {
    			?>
    			<div class="post-items lg-post col-lg-6 col-md-6 col-sm-12">
    				<a href="<?php echo get_permalink($post_item['ID']) ?>">
    				    <div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
        				<div class="thumb_hover_overlay">
        				    <div class="thumb_hover_content">
            				    <div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
            				    <div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
            				    <div class="thumb_grp_btn">
            				        <a href="#"><div class="btn_playnow">Play Now</div></a>
            				        <a href="#"><div class="btn_review">Read Review</div></a>
            				    </div>
        				    </div>
        				    <span class="newuser">*New users only</span>
        			    </div>
        			    
    				</a>
    			</div>
    			<?php
    		} else {
    			if ($key === 1) {
    				?>
    				<div class="post-items col-lg-6 col-md-6 col-sm-6">
    					<div class="row">
    				<?php
    			}
    			if ($key === 1 || $key === 2) {
    				?>
    				<div class="post-items col-lg-6 col-md-6 col-sm-6">
    					<a href="<?php echo get_permalink($post_item['ID']) ?>">
    						<div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
            				<div class="thumb_hover_overlay">
            				    <div class="thumb_hover_content">
                				    <div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
                				    <div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
                				    <div class="thumb_grp_btn">
                				        <a href="#"><div class="btn_playnow">Play Now</div></a>
                				        <a href="#"><div class="btn_review">Read Review</div></a>
                				    </div>
                				</div> 
                				<span class="newuser">*New users only</span>
            			    </div> 
            			    
    					</a>
    				</div>
    				<?php
    			}
    			if ($key === 3) {
    					?>
    					</div>
    					<div class="row">
    						<div class="post-items col-lg-6 col-md-6 col-sm-6">
    							<a href="<?php echo get_permalink($post_item['ID']) ?>">
    								<div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
                    				<div class="thumb_hover_overlay">
                    				    <div class="thumb_hover_content">
                        				    <div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
                        				    <div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
                        				    <div class="thumb_grp_btn">
                        				        <a href="#"><div class="btn_playnow">Play Now</div></a>
                        				        <a href="#"><div class="btn_review">Read Review</div></a>
                        				    </div>
        				                </div>
        				                <span class="newuser">*New users only</span>
                    			    </div> 
                    			    
    							</a>
    						</div>
    				<?php
    			}
    			if ($key === 4) {
    				?>
    						<div class="post-items col-lg-6 col-md-6 col-sm-6">
    							<a href="<?php echo get_permalink($post_item['ID']) ?>">
    								<div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
                    				<div class="thumb_hover_overlay">
                    				    <div class="thumb_hover_content">
                        				    <div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
                        				    <div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
                        				    <div class="thumb_grp_btn">
                        				        <a href="#"><div class="btn_playnow">Play Now</div></a>
                        				        <a href="#"><div class="btn_review">Read Review</div></a>
                        				    </div>
        				                </div>
        				                <span class="newuser">*New users only</span>
                			        </div>
                			        
    							</a>
    						</div>
    					</div>
    				</div>
    				<?php
    			}
    		}
    	endforeach;
    	?>
    </div>

    <div class="row">
    	<?php
    	$recent_posts = wp_get_recent_posts(array(
    	    'post_type'   => 'casino_list',
    		'numberposts' => 4, // Number of recent posts thumbnails to display in second row
    		'offset'      => 5, // Start from 6th post
    		'post_status' => 'publish' // Show only the published posts
    	));
    	foreach( $recent_posts as $post_item ) : ?>
    		<div class="post-items col-lg-3 col-md-3 col-sm-6">
    			<a href="<?php echo get_permalink($post_item['ID']) ?>">
    				<div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
        			<div class="thumb_hover_overlay">
                    	<div class="thumb_hover_content">
                        	<div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
                        	<div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
                        	<div class="thumb_grp_btn">
                        		<a href="#"><div class="btn_playnow">Play Now</div></a>
                        		<a href="#"><div class="btn_review">Read Review</div></a>
                        	</div>
        				</div>
        				<span class="newuser">*New users only</span>
        			 </div> 
        			 
    			</a>
    		</div>
    	<?php
     endforeach; ?>
    </div>
</div>














<?php /*?>
<div id="latest-post" class="row">
	<?php 
	$recent_posts = wp_get_recent_posts(array(
	    'post_type'   => 'casino_list',
		'numberposts' => 9, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		<div class="post-items col">
			<a href="<?php echo get_permalink($post_item['ID']) ?>">
				<div class="thumb_img"><?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?></div>
				<div class="thumb_hover_overlay">
    				<div class="thumb_tags"><a href="#">Multiplayer</a><a href="#">RPG</a><a href="#">Shooter</a></div>
    				<div class="thumb_title"><h4 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h4></div>
    				<div class="thumb_grp_btn">
    				    <a href="#"><div class="btn_playnow">Play Now</div></a>
    				    <a href="#"><div class="btn_review">Read Review</div></a>
    				</div>
				</div>
			</a>
			<span class="newuser">*New users only</span>
		</div>
	<?php endforeach; ?>
</div>
<?php */?>


<?php
	return ob_get_clean();
}
add_shortcode('thumbnail_display','thumbnail_display');