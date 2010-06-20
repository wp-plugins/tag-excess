=== Plugin Name ===
Contributors: Daniele Di Rollo
Donate link: http://www.syrus.it
Tags: tag, seo, excess
Requires at least: 2.9
Tested up to: 2.9.2
Stable tag: 1.1

Mantiene la pubblicazione dei tag al disotto del 20% del numero di articoli in modo da non generare un tag excess

== Description ==

Mantiene la pubblicazione dei tag al disotto del 20% del numero di articoli in modo da non generare un tag excess
Il plugin conta quante volte il tag viene associato negli articoli in modo da non pubblicare i tag che vengono utilizzati 1 sola volta evitando così la duplicazione dipagine identiche.

Esempio.
Title: Articolo 1 
Pagina: /articolo1.html
Tag: key1, key2, key3, key4

pagine tag: 
	key1.html
	key2.html
	key3.html
	key4.html

Questi tag se riferiscono solo all'articolo 1, andranno a generare 4 pagine identiche 


Se invece i tag sono condivisi con altri articoli (per più di 2 volte) le pagine duplicate diminuiscono

Title: Articolo 1 
Pagina: /articolo1.html
Tag: key1, key2, key3, key4

Title: Articolo 2 
Pagina: /articolo2.html
Tag: key2, key3, key4

Title: Articolo 3 
Pagina: /articolo3.html
Tag: key1, key2, key3

pagine tag: 
	key2.html
	key3.html

 

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `tag_excess_seo.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==
cooming soon

== Screenshots ==
cooming soon

== Changelog ==
= 1.1 =
* Ultima Versione stabile

== Upgrade Notice ==
= 1.1 =
Ultima Versione stabile


`<?php code(); // goes in backticks ?>`
