<?php

if ( ! function_exists( 'pitch_qode_kses_img' ) ) {
	/**
	 * Function that does escaping of img html.
	 * It uses wp_kses function with predefined attributes array.
	 * Should be used for escaping img tags in html.
	 * Defines pitch_qode_kses_img filter that can be used for changing allowed html attributes
	 *
	 * @param $content string string to escape
	 *
	 * @return string escaped output
	 * @see wp_kses()
	 *
	 */
	function pitch_qode_kses_img( $content ) {
		$img_atts = apply_filters(
			'pitch_qode_kses_img',
			array(
				'src'    => true,
				'alt'    => true,
				'height' => true,
				'width'  => true,
				'class'  => true,
				'id'     => true,
				'title'  => true
			)
		);
		
		return wp_kses(
			$content,
			array(
				'img' => $img_atts
			)
		);
	}
}