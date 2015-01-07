<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="post-container">
    <section class="post-meta">          
      <p class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
        <ba><?php the_author_meta( 'display_name' ); ?></ba>
      </p>
      <p>
        <bd><time class="post-date"><?php the_date(); ?></time></bd>
      </p>                
    </section><!-- end of .post-meta -->
    <section class="post-entry">
      <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
        </a>
      <?php endif; ?>
      <header>
        <h1 class="post-title"><a href="<?php echo(esc_url( get_permalink() ) ) ?>"><?php the_title(); ?></a></h1>
      </header>
      <?php the_content(); ?>
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