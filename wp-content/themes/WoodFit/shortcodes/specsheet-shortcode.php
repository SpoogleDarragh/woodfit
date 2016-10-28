<?php
	add_shortcode('linear-specsheets','display_linear_specsheets');

	function display_linear_specsheets(){
		$args = array(
			'post_type' => 'specsheet',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'specsheet_category', //taxonomy name
					'field'    => 'slug', //query by slug
					'terms'    => 'linear', //term
				),
			),

			);//end of array

		$string = '';

		$query = new WP_Query( $args );
        if( $query->have_posts() ){
            $string .= '<div class=" et_pb_row et_pb_row_2">';
            while( $query->have_posts() ){
                $query->the_post();
                $string .= '<div class="et_pb_column et_pb_column_1_3  et_pb_column_3">' . get_the_title() . '</div>';
            }
            $string .= '</div>';
        }
        wp_reset_postdata();
        return $string;
	}//end of function