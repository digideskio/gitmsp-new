<?php

/*-----------------------------------------------------------------------------------

	General Frontend theme features

-----------------------------------------------------------------------------------*/
global $sr_prefix;



/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Isotope)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_load_more_callback' ) ) {
	function sr_load_more_callback() {
		global $wpdb;
		global $sr_prefix;
		
		$page = intval( $_POST['page'] );
		$type =  $_POST['type'];
		$tax =  $_POST['tax'];
		
		if ($type == 'post') {
			query_posts( array(
				'post_type' => array('post'),
				'paged' => $page,
				'cat' => $tax
				) 
			);
			get_template_part( 'includes/loop', 'blog');
		} 
		else if ($type == 'portfolio') {
			$sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
			query_posts( array(
				'posts_per_page'=> $sr_portfoliocount,
				'paged' => $page,
				'portfolio_category' => $tax,
				'm' => get_query_var('m'),		   
				'w' => get_query_var('w'),
				'post_type' => array('portfolio')
				) 
			);
			get_template_part( 'includes/loop', 'portfolio');
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_load_more', 'sr_load_more_callback'); 
add_action('wp_ajax_sr_load_more', 'sr_load_more_callback');



/*-----------------------------------------------------------------------------------*/
/*	Load more button (isotope)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'loadmore' ) ) {
	function loadmore($type, $max_num_page, $tax) {
		if (!$type) { $type = 'post'; }
		if ($max_num_page > 1) { 
			echo '<div id="load-more"><a href="#" data-maxnumpage="'.$max_num_page.'" data-type="'.$type.'" data-type="'.$type.'" data-tax="'.$tax.'"><span class="icon">'.__('Load More', 'sr_yalu_theme').'</span><span class="loading-action">'.__('loading ...', 'sr_yalu_theme').'</span></a></div>';
		}
	}
}




/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Content)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_get_content_callback' ) ) {
	function sr_get_content_callback() {
		global $wpdb;
		global $sr_prefix;
		
		$id =  $_POST['id'];
		$type =  $_POST['type'];
		
		if ($type == 'post') {
			// Count the views
			if(!isset($_COOKIE["viewscookie".$id]) && !isset($_POST['countlikes'])) { 
				sr_setPostMeta($id, 'views');
				setcookie("viewscookie".$id, 'yes', time()+3600, '/');
			}
			query_posts( 'p='.$id );
			get_template_part( 'includes/singlepost', 'blog');
		} 
		else if ($type == 'portfolio') {
			// Count the views
			if(!isset($_COOKIE["viewscookie".$id]) && !isset($_POST['countlikes'])) { 
				sr_setPostMeta($id, 'views');
				setcookie("viewscookie".$id, 'yes', time()+3600, '/');
			}
			query_posts( 'p='.$id.'&post_type=portfolio' );
			get_template_part( 'includes/singlepost', 'portfolio');
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_get_content', 'sr_get_content_callback'); 
add_action('wp_ajax_sr_get_content', 'sr_get_content_callback');




/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Likes)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_like_callback' ) ) {
	function sr_like_callback() {
		global $wpdb;
		
		$id = intval( $_POST['id'] );
		
		// Count the likes
		if (!isset($_COOKIE["likescookie".$id])) { 
			sr_setPostMeta($id, 'likes'); 
			setcookie("likescookie".$id, 'yes', time()+100000, '/'); 
			echo sr_getPostMeta($id, 'likes');
		} else {
			echo 'cookieset';	
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_like', 'sr_like_callback'); 
add_action('wp_ajax_sr_like', 'sr_like_callback');



/*-----------------------------------------------------------------------------------*/
/*	Pagination for pages
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_pagination' ) ) {
	function sr_pagination($prevtext = 'Previous', $nexttext = 'Next' )
	{
		global $query;		
		
		// No pagination on single sites
		if(!is_single())	
		{	
			$current = get_query_var('paged') == 0 ? 1 : get_query_var('paged');	
			$total = $query->max_num_pages;																
			
			// If there are more than 1 page
			if($total > 1)	
			{				
				echo '<ul id="entries-pagination" class="clearfix">';
				// Next-Button
				echo $current == $total ? '' : '<li class="prev-page"><a href="'.get_pagenum_link($current+1).'" title="'.$prevtext.'">'.$prevtext.'</a></li>';
				// Back-Button
				echo $current == 1 ? '' : '<li class="next-page"><a href="'.get_pagenum_link($current-1).'" title="'.$nexttext.'">'.$nexttext.'</a></li>';	
				echo '</ul> <!-- END #entries-pagination -->';
			}
		}
	}
}



/*-----------------------------------------------------------------------------------*/
/*	Blog Metas
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_getBlogMeta' ) ) {
	function sr_getBlogMeta() {
		global $wp_query;	
		global $sr_prefix;
		
		// CATEGORY
		if ( !get_option($sr_prefix.'_blogpostsdisablecategory')) {
			$categories = get_the_category();
			$separator = ',';
			$output = '';
			if($categories){
				foreach($categories as $category) {
					$output .= 	'<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'sr_yalu_theme' ), $category->name ) ) . '">
								'.$category->cat_name.'</a>'.$separator;
				}
				$metacategory = '<li class="meta-category">'.trim($output, $separator).'</li>';
			} else { $metacategory = '';  }
		} else { $metacategory = '';  }
		
		
		// COMMENTS
		if ( get_option($sr_prefix.'_commentsblog') == 'enabled' && $wp_query->post->comment_status == 'open') { 
        	$metacomments = '<li class="meta-comments"><a href="'.get_permalink().'#comments" title="Comments">'.get_comments_number($wp_query->post->ID).' '.__("Comments", 'sr_yalu_theme' ).'</a></li>';
        } else { $metacomments = '';  }
		
		
		// AUTHOR
		if (!get_option($sr_prefix.'_blogpostsdisableauthor')) {
			$author_id = $wp_query->post->post_author;
			$author_name = get_the_author_meta('nickname',$author_id);
			$author_name = get_the_author_meta('nickname',$author_id);
			$metaauthor = '<li class="meta-author">'.__( "By", 'sr_yalu_theme' ).' '.$author_name.'</li>';
     	} else { $metaauthor = '';  }
		
		echo '	<ul class="blog-meta clearfix">
					'.$metaauthor.'
					'.$metacomments.'
					'.$metacategory.'
				</ul>';
		
	}						
}



/*-----------------------------------------------------------------------------------*/
/*	Pagination on single item view
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_singlepagination' ) ) {
	function sr_singlepagination($type,$id,$class) {
		global $sr_prefix;
		
		$prev_item = get_adjacent_post(false,'',false) ; 
		$next_item = get_adjacent_post(false,'',true) ;
		
		if (is_single() && get_post_type() == 'portfolio' ) { $closelink = get_permalink( get_option($sr_prefix.'_portfoliopage') ); }
		else if (is_single() && get_post_type() == 'post' ) { $closelink = get_permalink( get_option('page_for_posts') ); }
		
		if (($prev_item && $prev_item->ID) || ($next_item && $next_item->ID)) {
			echo '<ul id="'.$id.'" class="'.$class.'">';
			if ($prev_item && $prev_item->ID) { 
				$prev_post = get_post($prev_item->ID);
				echo '<li class="prev"><a class="loadcontent" data-id="'.$prev_item->ID.'" data-slug="'.$prev_item->post_name.'" data-type="'.get_post_type().'" href="'.get_permalink( $prev_item->ID ).'" title="'.$prev_post->post_title.'"><span></span>'.__('Previous', 'sr_yalu_theme').'</a></li>'; 
			}
			echo '<li class="close"><a class="closecontent" href="'.$closelink.'" title="Close">'.__('Close', 'sr_yalu_theme').'</a></li>';
			if ($next_item && $next_item->ID) { 
				$next_post = get_post($next_item->ID);
				echo '<li class="next"><a class="loadcontent" data-id="'.$next_item->ID.'" data-slug="'.$next_item->post_name.'" data-type="'.get_post_type().'" href="'.get_permalink( $next_item->ID ).'" title="'.$next_post->post_title.'">'.__('Next', 'sr_yalu_theme').'<span></span></a></li>'; 
			}
			echo '</ul>';
		}
		
	}						
}
	
	
	
/*-----------------------------------------------------------------------------------*/
/*	Share Button
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_sharebutton' ) ) {
	function sr_sharebutton() {
		global $wp_query;	
			
		$postid = $wp_query->post->ID;
		$og_title = get_the_title( $postid );
		$og_desc = get_post($postid);
		$og_desc = explode(' ', $og_desc->post_content, 15);
		$og_desc = preg_replace('/<img[^>]+./','', $og_desc);
		$og_desc = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $og_desc );
		array_pop($og_desc);
		$og_desc = implode(" ",$og_desc).'...';
		$og_desc = strip_tags($og_desc);
		$og_url = get_permalink( $postid );
		$og_img = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'medium' );;
		$og_img = $og_img[0];
		
		?>
		<ul class="sharelinks clearfix">
			<li><a href="" onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[title]=<?php echo $og_title ?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[summary]=<?php echo urlencode($og_desc); ?>&amp;p[images][0]=<?php echo $og_img; ?>','','width=900, height=500, toolbar=no, status=no'); return(false);" title="Facebook Share" class="fb_share"><span><?php _e('Like it', 'sr_yalu_theme') ?></span></a></li>
			<li><a href="" onclick="window.open('https://twitter.com/intent/tweet?text=Tweet%20this&amp;url=<?php the_permalink(); ?>','','width=650, height=350, toolbar=no, status=no'); return(false);" title="Twitter Share" class="tw_share"><span><?php _e('Tweet it', 'sr_yalu_theme') ?></span></a></li>
			<li><a href="" onclick="window.open('https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink(); ?>&amp;image<?php echo $og_img; ?>','','width=900, height=500, toolbar=no, status=no'); return(false);" title="Google Plus Share" class="g_share"><span><?php _e('Share it', 'sr_yalu_theme') ?></span></a></li>
			<li><a href="" onclick="window.open('http://pinterest.com/pin/create/bookmarklet/?media=<?php echo $og_img; ?>&amp;url=<?php the_permalink(); ?>','','width=650, height=350, toolbar=no, status=no'); return(false);" title="Pin it" class="p_share"><span><?php _e('Pin it', 'sr_yalu_theme') ?></span></a></li>
		</ul>
		<?php
	}
}
	
	


/*-----------------------------------------------------------------------------------*/
/*	Count/Get/Delete Views/Likes  
/*-----------------------------------------------------------------------------------*/
function sr_getPostMeta($postID, $method) {
	global $sr_prefix;
    $count_key = $sr_prefix.'_post_'.$method;
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        return "0";
    }
    return $count;
}


function sr_setPostMeta($postID, $method) {
	global $sr_prefix;
    $count_key = $sr_prefix.'_post_'.$method;
	
	## ALL TIME COUNTS
	$alltime = get_post_meta($postID, $count_key, true);
    if($alltime==''){
        $alltime = 1;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, $alltime);
    }else{
        $alltime++;
        update_post_meta($postID, $count_key, $alltime);
    }
	##
	
}

function sr_resetPostMeta($method,$type) {
    global $sr_prefix;
	$count_key = $sr_prefix.'_post_'.$method;
	
	$posts = get_posts( array('posts_per_page'  => -1,'post_type'=> $type) );
	foreach ( $posts as $p ) { 
		delete_post_meta($p->ID, $count_key);
	}
	
}

?>