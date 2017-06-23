<?php if(is_page(6655) || is_tax( 'portfolio-category' )): ?>
	<div class="taxonomy-links-wrap">
		<ul>
			<li><a href="<?php echo home_url(); ?>/case-studies/">All</a></li>
			<?php
			$categories = get_categories( array(
				'taxonomy' => 'portfolio-category',
				'orderby' => 'name',
				'order'   => 'DESC',
				'hide_empty'	=> 1
			) );

			foreach( $categories as $category ) {
				$category_link = sprintf(
					'<a href="%1$s" alt="%2$s">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					esc_html( $category->name )
				);

				echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
			}
			?>
		</ul>
	</div>
<?php endif; ?>
