<?php include('header.php');?>
<div class="wrapper vertical-flex">
	<div class="form-container container center">
		<div class="wrapper form-wrapper reduced-padding">
			<h1 class="orange">Videos</h1>
			<div class="row center nolineheight no-margin">
				<?php $videosArray = CFS()->get('videos_array'); ?>			  
				<?php $arrayLength = count($videosArray); ?>
				<?php for($i = 0; $i < $arrayLength; $i++) { ?>
				<?php
				if( $arrayLength == 1) {
					?>
					<div class=" no-touch light-padding">
					<?php
				} else if( $arrayLength == 2) {
					?>
					<div class="col-sm-6 no-touch light-padding">
					<?php
				} else if( $arrayLength == 3) {
					?>
					<div class="col-sm-4 no-touch light-padding">
					<?php
				} else {
				?>
				<div class="col-sm-3 light-padding">
				<?php } ?>
					<img class="img-responsive center-block" src="<?php echo $videosArray[$i]['video_img'] ?>" alt="Imágen del Video">
					<img class="play-video" src="<?php bloginfo('template_url'); ?>/img/video/play.png" alt="Play Video" data-toggle="modal" data-target="#video-modal-<?php echo $i;?>">
				</div>
				<div class="modal fade in video-modal" id="video-modal-<?php echo $i;?>">
					<div class="modal-dialog video">
						<div class="modal-content">
							<?php echo $videosArray[$i]['video'] ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>