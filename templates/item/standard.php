<?php 
$post_id = get_the_ID();
$image = get_post_meta($post_id, 'image', true);
$date = get_post_meta($post_id, 'date_meet', true);
$date_closing = get_post_meta($post_id, 'date_closing', true);
$pool = get_post_meta($post_id, 'pool', true);
$course = get_post_meta($post_id, 'course', true);
$detail = get_post_meta($post_id, 'file_detail', true);
$result = get_post_meta($post_id, 'file_detail', true);

if(null === $image || false == $image) {
	$image = get_stylesheet_directory_uri().'/assets/img/placeholder/1200_500.png';
}
?>

<div class="item item_list">
	<div class="embed-holder">
		<div class="embed">
				<img src="<?php echo $image; ?>" />
		</div>
	</div>
	<div class="text-holder">
		<div class="meta">
			<h3 class="title">{{#post_title}}{{/post_title}}</h3>
		</div>
		<div class="text">
			<p>{{#post_excerpt}}{{/post_excerpt}}</p>
		</div>
	</div>
</div>