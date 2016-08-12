<?php $page = get_page_by_path('promo-images'); ?>
<section class="promo-images" id="promo_images">
	<div class="container">
		<?php zerif_before_page_content_trigger(); ?>
		<?php zerif_top_page_content_trigger(); ?>
		<div id="primary" class="content-area">
				<?php // zerif_page_header_trigger(); ?>
				<div class="entry-content">
				<?php echo $page->post_content; ?>
			</div>
		</div><!-- #primary -->
		<?php zerif_bottom_page_content_trigger(); ?>
		<?php	zerif_after_page_content_trigger(); ?>
			?>
	</div><!-- .container -->
</section>
