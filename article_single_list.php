<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container-box">
    <section class="post-meta">          
      <p class="author-avatar"><span><a href="<?php echo get_author_posts_url( $post->post_author ) ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></a></span>
        <ba><a href="<?php echo get_author_posts_url( $post->post_author ) ?>"><?php the_author_meta( 'display_name' ); ?></a></ba>
      </p>
      <p class="post-date">
        <bd class="post-date"><time class="post-date"><?php the_date(); ?></time></bd>
      </p>                
    </section><!-- end of .post-meta -->
    <section class="post-entry">
      <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
        </a>
      <?php endif; ?>
      <header>
        <h2 class="title"><a href="<?php echo(esc_url( get_permalink() ) ) ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php the_content("Read more >"); ?>
      <?php custom_link_pages(array(
        'before' => '<nav class="pagination"><ul>' . __(''),
        'after' => '</ul></nav>',
        'next_or_number' => 'next_and_number', # activate parameter overloading
        'nextpagelink' => __('&rarr;'),
        'previouspagelink' => __('&larr;'),
        'pagelink' => '%',
        'echo' => 1 )
      ); ?>
    </section><!-- end of .post-entry -->  
  </div>
</article><!-- end of #post-<?php the_ID(); ?> -->