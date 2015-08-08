<?php
/*
 * Template Name: Template enregistrement
 * Description: Page template for user register
 */

get_header(); ?>
    <div class="jumbotron img-header">
       <div class="container enregistrement">
            
        
        
            
           
           </div>
        
    </div>
</header><!--header-->

	<div id="wrap">
        
        <section class="jobboard">
           
            <div class="container">
                <div class="content col-md-12">
                    <div class="row row-eq-height">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('offre col-xs-12'); ?>>
                       <div class="post-wrapper">
                        <div class="post-header">
                        <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        </div><!--.post-header-->
                        <div class="entry clear">
                         <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                         <?php the_content(); ?>
                         <?php edit_post_link(); ?>
                         <?php wp_link_pages('Lire la suite'); ?>
                        </div><!--. entry-->
                        <footer class="post-footer">
                         <div class="comments"><?php //comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                        </footer><!--.post-footer-->
                    </div><!-- .post-->
                     </div>

                     <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                     <nav class="navigation index">
                         <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                         <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
                     </nav><!--.navigation-->
                     <?php else : ?>
                     <?php endif; ?>
                     </div>
                 </div><!--.content-->


            </div>
            
        </section>
    </div><!--.wrap>

<?php get_footer(); ?>