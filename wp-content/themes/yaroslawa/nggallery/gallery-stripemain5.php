<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

	<!-- Thumbnails -->
	<?php 
        $images=array_values($images);
        for($i=0;$i<5;$i++) : 
            $image = $images[$i];?>
        
            <li class="right">
                <div class="grey"></div>
                <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?>>
                    <?php if ( !$image->hidden ) { ?>
                        <img class="stripe" src="<?php echo $image->thumbnailURL ?>" title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" height="204"/>
                    <?php } ?>
                        <em class="thumb"><img src="<?php echo $image->imageURL ?>" height="204"/></em>
                </a>
            </li>      
 	<?php endfor; ?>
<?php endif;