<?php

/*
Plugin Name: Tag Excess
Plugin URI: http://www.syrus.it
Description: Tag Excess
Version: 1.0
Author: Daniele Di Rollo
Author URI: http://www.syrus.it
*/

function tag_excess($content) {
	$posttags = get_the_tags();
	if ($posttags) {
		foreach($posttags as $tag) {
			if ($tag->count>2){
				echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
			}
		}
	}
}


function pagina_tag() {
		add_options_page('Tag Excess', 'Tag Excess', 8, basename(__FILE__), 'pagina_tag_contenuto');
}

function pagina_tag_contenuto() {
$conta1 = 0;
$conta2 = 0;
$conta3 = 0;
$conta4 = 0;
echo '<div id="message" class="updated fade"><p>';
	echo "Totale Articoli: ".wp_count_posts()->publish."<br>";
	echo "Per evitare il TAG EXCESS il rapporto tra tag e posts deve essere al disotto del 20%: ".(wp_count_posts()->publish/100)*20;
	echo "<br>";
	$posttags = get_tags();
	if ($posttags) {
		foreach($posttags as $tag) {

			if($tag->count>0){
				$conta1++;
			}
			if($tag->count>1){
				$conta2++;
			}
			if($tag->count>2){
				$conta3++;
			}
			if($tag->count>3){
				$conta4++;
			}

		}

		echo "Tag presenti in almeno 1 articolo: ".$conta1."<br>";
		echo "Tag presenti in più di 1 articolo: ".$conta2."<br>";
		echo "Tag presenti in più di 2 articolo: ".$conta3."<br>";
		echo "Tag presenti in più di 3 articoli: ".$conta4."<br>";
		echo "<br>";
		echo "Stai usando i tag presenti in più di 2 articoli";

	}

echo '</p></div>';

}


add_filter('the_tags', 'tag_excess');

add_action('admin_menu', 'pagina_tag');
