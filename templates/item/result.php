<?php 
global $post;
$post_id = get_the_ID();
$image = get_post_meta($post_id, 'image', true);
$date = get_post_meta($post_id, 'date_meet', true);
$date_closing = get_post_meta($post_id, 'date_closing', true);
$pool = get_post_meta($post_id, 'pool', true);
$course = get_post_meta($post_id, 'course', true);
$detail = get_post_meta($post_id, 'detail_file', true);
$result = get_post_meta($post_id, 'result_file', true);

if(null === $image || false == $image) {
	$image = get_stylesheet_directory_uri().'/assets/img/placeholder/570_190.png';
}
$date_format = get_option('date_format');
if(null !== $date || false != $date) {
	$date = date($date_format, strtotime($date));
}
if(null !== $date_closing || false != $date_closing) {
	$date_closing = date($date_format, strtotime($date_closing));
}
?>

<div class="item item_match">
	<div class="embed">
		<img src="<?php echo $image; ?>" />
	</div>

	<div class="meta">
		<h3 class="title"><?php the_title(); ?><span><?php the_terms( $post->ID, 'sportmatch_category', '', ' / ' ); ?></span></h3>
		<div class="row">
			<div class="col-md-8">
				<ul class="list">
					<li><span class="label">Meet Date:</span><span><?php echo $date; ?></span></li>
					<li><span class="label">Closing Date:</span><span><?php echo $date_closing; ?></span></li>
					<li><span class="label">Pool Details:</span><span><?php echo $pool; ?></span></li>
					<li><span class="label">Course:</span><span><?php echo $course; ?></span></li>
				</ul>
			</div>
			<div class="col-md-4">
				<a href="<?php echo $detail; ?>" class="btn btn-primary btn-meet btn-purple">Meet Details</a>
				<a href="<?php echo $result; ?>" class="btn btn-primary btn-result btn-yellow">Meet Results</a>
			</div>
		</div>
	</div>

</div>