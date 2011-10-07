<?get_header()?>
<div class="content">
    <section class="gallery">
        <ul class="gallery-section" id="people">
            <?php echo do_shortcode('[nggallery id=2 template=stripemain8]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=1">photo people</a></h2></li>
        </ul>
        <ul class="gallery-section" id="photo">
            <?php echo do_shortcode('[nggallery id=4 template=stripemain7]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=3">photo</a></h2></li>
        </ul>
        <ul class="gallery-section" id="poster">
            <?php echo do_shortcode('[nggallery id=6 template=stripemain4]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=5">photo</a></h2></li>
        </ul>
           <ul class="gallery-section" id="book">
            <?php echo do_shortcode('[nggallery id=8 template=stripemain5]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=7">book</a></h2></li>
        </ul>
         <ul class="gallery-section" id="illustration">
            <?php echo do_shortcode('[nggallery id=10 template=stripemain6]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=9">illustration</a></h2></li>
        </ul>
         <ul class="gallery-section" id="design">
            <?php echo do_shortcode('[nggallery id=12 template=stripemain5]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=11">design</a></h2></li>
        </ul>
         <ul class="gallery-section" id="t-shirt">
            <?php echo do_shortcode('[nggallery id=14 template=stripemain4right]');?>
            <li class="title"><h2><a href="<?=get_bloginfo('url')?>/gallery?id=5">t-shirt</a></h2></li>
        </ul>
    </section>
</div>
<?get_footer()?>