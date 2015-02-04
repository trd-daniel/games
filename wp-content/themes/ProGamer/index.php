<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
        
            <?php $theme->hook('content_before'); ?>
            <?php 
			   // echo do_shortcode("[metaslider id=4]"); \
            include_once('simple_html_dom.php');
            $html = file_get_html('http://www.google.com/');
            
            // Find all images
           //foreach($html->find('img') as $element){
            	/* echo $element->src . '<br>';
            }
            // Find all links
            //foreach($html->find('a') as $element){
            	echo $element->href . '<br>';
            }  */
			?>
            <?php
            foreach($html->find('img') as $element){
            	foreach($html->find('a') as $element){
            	$img =	$element->src;
            	$href= $element->href;
            	
            global $user_ID, $wpdb;
            $new_post = array(
            		'post_title' => $href,
            		'post_content' => $img,
            		'post_status' => 'publish',
            		'post_date' => date('Y-m-d H:i:s'),
            		'post_author' => $user_ID,
            		'post_type' => 'post',
            		'post_category' => array(0)
            	);
            $title = $new_post[post_title];
           	 }
            }
                if (have_posts()) : while (have_posts()) : the_post();
                
                $query = $wpdb->get_row( "SELECT ID FROM wp_posts WHERE post_title = '" . $title . "' && post_status = 'publish' && post_type = 'post' ", 'ARRAY_N' );
               
                if ( empty( $query )) {
                	echo "eee";
                	//$post_id = wp_insert_post($new_post);
                }else{}
                    /**
                     * The default post formatting from the post.php template file will be used.
                     * If you want to customize the post formatting for your homepage:
                     * 
                     *   - Create a new file: post-homepage.php
                     *   - Copy/Paste the content of post.php to post-homepage.php
                     *   - Edit and customize the post-homepage.php file for your needs.
                     * 
                     * Learn more about the get_template_part() function: http://codex.wordpress.org/Function_Reference/get_template_part
                     */
                
               
                

                    get_template_part('post', 'homepage');
                    
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
            	
                get_template_part('navigation');
            ?>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php //get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>