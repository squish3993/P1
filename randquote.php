<?php

//Creates a function that generates a random quote that will be called in the HTML file 
function getQuote() { 

	//Generate array with quotes
	$quotes = ["Why so serious? -The Joker", "Me, I'm dishonest, and you can always trust a dishonest man to be dishonest. Honestly, it's the honest ones you have to watch out for... -Jack Sparrow", "Isn't it funny how day by day nothing changes, but when we look back everythng is different. -C.S Lewis"];

	//generate a random number between 0 and the size of our array (minus 1 because arrays start at 0)
	$num = rand(0, (count($quotes)-1));

	//takes the random number and uses it to call a quote from the array. Since the number is random, the quote is random. 
	$randQuote = $quotes[$num];
	
	return $randQuote;
}