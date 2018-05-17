<?php 
$post_id = get_the_ID();
$file = get_post_meta($post_id, 'file', true);


if(null === $file || false == $file) {
	$file = '#';
}
?>

<div class="item item_download">
	<a href="<?php echo $file; ?>"><?php the_title(); ?></a>
</div>