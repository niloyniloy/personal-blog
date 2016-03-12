<?php
$postid = trim($_GET['postid']);
// Include the wp-load'er
include('wp/wp-load.php');

if($postid!='') {
	$post = get_post($postid); 
	print_r($post);
	?>
	<div class="wp-catlist-all">
		<div class="wp-cat-full">
			<div class="wp-post-title"><?php echo $post->post_title; ?></div>
			<div class="inner-content">
				<div class="wp-featured-img"><?php if(get_the_post_thumbnail($post->ID, 'thumbnail')) { echo get_the_post_thumbnail($post->ID, 'thumbnail'); } else { ?><img src="images/no-image.jpg" width="150" height="109" title="<?php echo $category->name; ?>" /><?php }; ?></div>
				<div class="wp-content">
					<div class="wp-short-desc"><?php echo $post->post_content; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>