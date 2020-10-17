<?php
# PHP - Random Quote Generator v1.0
# Author: Robert Di Marcoberardino



# Multidimensional Array that holds quotes and accompanying information.
$quotes = array(
	array(
    "quote" => "A coward dies a thousand deaths, the brave just one.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  ),
  array(
    "quote" => "Don't find fault, find a remedy; anybody can complain.",
    "source" => "Henry Ford",
    "citation" => "Book",
    "year" => 1954,
    "type" => "Business" 
  ),
  array(
    "quote" => "Just walk beside me, and be my friend.",
    "source" => "Albert Camus",
    "citation" => "Book",
    "year" => 1900,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "In the future everyone will be famous for 15 minutes.",
    "source" => "Andy Warhol",
    "citation" => "Interview",
    "year" => 1967,
    "type" => "Art" 
  ),
  array(
    "quote" => "Once You Are Dead, You Are Made for Life.",
    "source" => "Jimi Hendrix",
    "citation" => "Interview",
    "year" => 1969,
    "type" => "Music" 
  ),
  array(
    "quote" => "Showing Up Is 80 Percent of Life",
    "source" => "Woody Allen",
    "citation" => "Interview",
    "year" => 1977,
    "type" => "Film" 
  ),
  array(
    "quote" => "A guilty conscience needs no accuser.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  ),
  array(
    "quote" => "The happiness of your life depends upon the quality of your thoughts.",
    "source" => "Marcus Aurelius",
    "citation" => "Meditations",
    "year" => 180,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "Contentment is not the fulfillment of what you want, but the realization of how much you already have.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "Someday I will learn to stop procrastinating, but today is not the day.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  ),
  array(
    "quote" => "Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do.",
    "source" => "Mark Twain",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  )
);


# getRandomQuote takes in the $quotes-Array, selects and returns a random entry
function getRandomQuote($array) {

	$randomNumber = rand(0, sizeof($array)-1);

	return $array[$randomNumber];
}


# printQuote calls getRandomQuote, takes in the random array entry, evaluates it and returns a complete HTML-string
function printQuote($array) {
	# get random quote from the $quotes-array
	$getQuote = getRandomQuote($array);

	# declare an empty string
	$StringWithQuote = "";

	# get all array values
	$quote = $getQuote["quote"];
	$source = $getQuote["source"];
	$citation = $getQuote["citation"];
	$year = $getQuote["year"];
	$type = $getQuote["type"];

	# check if citation has a value and add html or an empty string
  if ($citation) {
    $citationIsNotEmpty = "<span class=\"citation\">" . $citation . "</span>";
  } else {
    $citationIsNotEmpty = "";
  }

  # check if year is given and add html or an empty string
  if (isset($year)) {
    $yearIsSet = "<span class=\"year\">" . $year . "</span>";
  } else {
    $yearIsSet = "";
  }

  # build complete string
  $stringWithQuote = "<p class=\"quote\">" . $quote . "</p>" .
                     "<p class=\"source\">" . $source . 
                     $citationIsNotEmpty . 
                     $yearIsSet . 
                     "<span class=\"year\">" . $type . "</span>" .
                     "</p>";


  # display HTML
  echo $stringWithQuote;   
}


# changeBackgroundColor creates a random rpg-Value and returns it
function changeBackgroundColor() {
	# generate random integer between 0 and 230 for each rgb-value
  # we skip rgb values 231 to 255 to avoid white and light backgrounds
  # that would clash with the white font color
	$rValue = rand(0, 230);
	$gValue = rand(0, 230);
	$bValue = rand(0, 230);

	# build CSS-style string
  $randomColor = "rgb(" . $rValue . "," . $gValue . "," . $bValue . ")";

  # return and display the random rgb-value
  echo $randomColor;
}
