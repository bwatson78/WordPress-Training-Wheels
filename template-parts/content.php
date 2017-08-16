<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
<div class="content">
	<?php the_excerpt() ?>
  <div class="article-meta">Published on <?php the_time( "Y-m-d" ) ?> by <?php the_author() ?></div>
</div>
