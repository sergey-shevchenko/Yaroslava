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
        
        <?php
        if(!function_exists('fract')){
            function fract($num = 0) {
                if(!is_double($num)) return false;
                $out = explode('.', $num);
                return $out[1][0];
            }
        }?>

	<!-- Thumbnails -->
	<?php 
        $images=array_values($images);
        foreach($images as $i=>$image) : 
            if($i>0)
                $li_class = (fract($i/39) !=0 && (int)fract($i/39) >= 5)?'class="right"':'';
            $li_id = ($i==0)?'id="'.$gallery->name.'"':'';
            ?>
        
            <li <?=$li_class?> <?=$li_id?>>
                <div class="grey"></div>
                <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?>>
                    <?php if ( !$image->hidden ) { ?>
                        <img class="stripe" src="<?php echo $image->thumbnailURL ?>" title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" height="204"/>
                    <?php } ?>
                        <?php if ($i <= 39) {?>
                            <em class="thumb"><img src="<?php echo $image->imageURL ?>" height="204"/></em>
                        <?php }
                        else {?>
                            <em class="thumb"><img src="" height="204"/></em>
                            <em class="postload"><?php echo $image->imageURL ?></em>
                        <?php }?>
?>
                </a>
            </li>      
 	<?php endforeach; ?>
<?php endif;