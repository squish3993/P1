<?php

function getQuote() {
	$quotes = ["Why so serious? -The Joker", "Me, I'm dishonest, and you can always trust a dishonest man to be dishonest. Honestly, it's the honest ones you have to watch out for... -Jack Sparrow", "Isn't it funny how day by day nothing changes, but when we look back everythng is different. -C.S Lewis"];

	$num = rand(0, (count($quotes)-1));
	$randQuote = $quotes[$num];
	return $randQuote;
}