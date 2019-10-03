<?php

//get portfolio comment value
$portfolio_hide_comments = "";
if(get_post_meta(get_the_ID(), "qode_portfolio-hide-comments", true) == "yes"){
	$portfolio_hide_comments = "yes";
} elseif (pitch_qode_options()->getOptionValue( 'portfolio_hide_comments' )){
	$portfolio_hide_comments = pitch_qode_options()->getOptionValue( 'portfolio_hide_comments' );
}

if($portfolio_hide_comments != "yes"){
	comments_template('', true); 
}