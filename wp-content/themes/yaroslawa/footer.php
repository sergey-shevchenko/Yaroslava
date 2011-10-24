<footer>
    <?php if (get_the_ID()!=8){?><a href ="#" id="opener">open all</a><?php }?>
    <nav>
        <ul>
            <li><a href="<?=  get_option('siteurl')?>" class="home">Home</a></li>
            <li><a href="<?= get_permalink(8)?>" class="about">about me</a></li>
        </ul>
    </nav>
    <strong>photo art &amp; design</strong>
    <em>2011-2012 Yaroslawa Kolomiets, All rights reserved</em>
</footer>
<?php wp_footer();?>
</body>
</html>