<section class="section-video">
    <div class="section-video__video">
        <?php if ( $image_video = get_field( 'image_video' ) ) : ?>
        <div class="section-video__bg" id="bg">
            <img src="<?php echo $image_video['url']; ?>" alt="<?php echo $image_video['title']; ?>">
        </div>
        <?php endif; ?>
        <?php if ( $video = get_field( 'video' ) ) : ?>
        <?php echo $video; ?>
        <?php endif; ?>
        <div class="section-video__play">
            <button class="play-icon" id="play_button"></button>
        </div>
    </div>
</section>