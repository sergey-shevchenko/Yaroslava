<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
					<div class="contact_dets"  itemscope itemtype="http://data-vocabulary.org/Person">
                                                Контакты: <span itemprop="name">Коломиец Ярослава</span><br/>
                                                Телефон: +38 (093) 92-37-026<br/>
                                                email: <a href=""mailto:yaroslawa@yaroslawa.com.ua>yaroslawa@yaroslawa.com.ua</a><br/>
                                                Вконтакте:  <a href="http://vkontakte.ru/id6324192" itemprop="url">http://vkontakte.ru/id6324192</a><br/>
                                                Skype:  yasa-alice<br/>
					</div>
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>