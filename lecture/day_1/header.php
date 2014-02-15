<?php
// Russell Benton
// Febuary 4, 2013
// SSL
echo '<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <style>html{font-family: "Lato", Helvetica, sans-serif;} ul li{list-style: none;} strong{color: #E66665}</style>
    </head>
    <body>
	    <header>
';
/* all Definitions are taken from the php documentation
\t makes a 
l = A full textual representation of the day of the week
F = A full textual representation of a month, such as January or March
j = Day of the month without leading zeros
S = English ordinal suffix for the day of the month, 2 characters
Y = A two digit representation of a year
g = 12-hour format of an hour without leading zeros
i = Minutes with leading zeros
a = Lowercase Ante meridiem and Post meridiem
*/
echo date("\tl F jS, Y g:i a");
echo '
        </header>';
?>