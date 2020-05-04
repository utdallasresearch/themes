<div class="video-container">
	<div class="playme">
		<span><i class="fa fa-play"></i></span>
	</div> <!-- .playme -->
	<?php if(get_field('video_source') == 'youtube'):?>
		<img src="https://img.youtube.com/vi/<?php the_field('video_id');?>/maxresdefault.jpg" class="preview">
	<?php elseif(get_field('video_source') == 'vimeo'):?>
		<img src="<?php $imgid = get_field('video_id'); $hash = unserialize(file_get_contents('https://vimeo.com/api/v2/video/'.$imgid.'.php')); echo $hash[0]['thumbnail_large'];?>" class="preview">
	<?php endif;?>
	<div class="embed">
		<?php if(get_field('video_source') == 'youtube'):?>
			<iframe src="https://www.youtube.com/embed/<?php the_field('video_id');?>" frameborder="0" allowfullscreen></iframe>
		<?php elseif(get_field('video_source') == 'vimeo'):?>
			<iframe src="https://player.vimeo.com/video/<?php the_field('video_id');?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		<?php endif;?>
	</div> <!-- .embed -->
</div> <!-- .video-container -->

<div class="video-container-mobile">
	
		<?php if(get_field('video_source') == 'youtube'):?>
			<iframe src="https://www.youtube.com/embed/<?php the_field('video_id');?>" frameborder="0" allowfullscreen></iframe>
		<?php elseif(get_field('video_source') == 'vimeo'):?>
			<iframe src="https://player.vimeo.com/video/<?php the_field('video_id');?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		<?php endif;?>
	
</div> <!-- .video-container -->

