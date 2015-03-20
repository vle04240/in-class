<?php get_header(); ?>

	<main id="content">

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

		<article id="post-ID" class="post">
			<h2 class="entry-title"> 
				<a href="/link to single post/"> 
					<?php the_title( ); ?> 
				</a>
			</h2>
			<div class="entry-content">
				<p><?php 
				//show full content on single posts and pages
				if(is_singular()):
					the_content();
				else:
					the_excerpt(); //first 55 words of the content

				endif; ?></p>
			</div>
			<div class="postmeta"> 
				<span class="author"> Posted by: Bob </span>
				<span class="date"> December 27, 2012 </span>
				<span class="num-comments"> one comment </span>
				<span class="categories"> 
					<?php the_category( ); ?>	
				</span>
				<span class="tags">tag, tag2, tag3</span> 
			</div><!-- end postmeta -->			
		</article><!-- end post -->

<?php 
	endwhile;
	else: ?>
	<h2>Sorry, no posts found</h2>
<?php endif; ?>


	</main><!-- end #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>