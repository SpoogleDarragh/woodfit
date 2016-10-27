<?php
	add_shortcode('linear-specsheets','display_linear_specsheets');

	function display_linear_specsheets(){
		$args = array(
			'post_type' => 'specsheet',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'specsheet_category',
					'field'    => 'slug',
					'terms'    => 'linear',
				),
			),

			);//end of array

		$string = '';

		$query = new WP_Query( $args );
        if( $query->have_posts() ){
            $string .= '<ul>';
            while( $query->have_posts() ){
                $query->the_post();
                $string .= '<li>' . get_the_title() . '</li>';
            }
            $string .= '</ul>';
        }
        wp_reset_postdata();
        return $string;
	}//end of function