<?php

/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae tortor vel eros aliquam sodales et in neque. Donec fringilla arcu lacus, in pretium magna gravida vel. Integer et ante odio. Vivamus vestibulum elit ut ex ornare, nec facilisis nisi consectetur. Sed lectus mauris, tristique non sollicitudin a, posuere in odio. Phasellus commodo tellus ut libero dignissim maximus. Sed turpis neque, egestas at convallis eget, consectetur vel ex. Nulla leo ex, venenatis id odio vitae, venenatis imperdiet turpis. Donec vitae nibh non magna sagittis elementum. Nulla nisl tellus, tincidunt in elit eget, molestie euismod mi. Cras cursus odio eget leo condimentum, rutrum aliquam arcu congue. Fusce sit amet malesuada libero, nec lacinia dolor. Nam ac risus commodo, dignissim ipsum ac, cursus justo. Ut et viverra ipsum, vel vehicula turpis. Aliquam fringilla sed turpis quis blandit ";

$array_stringa = explode('.', $paragrafo);

echo "<pre>";
var_dump($array_stringa);
echo "</pre>";

?>