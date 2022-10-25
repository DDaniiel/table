<?php
$q = 6;
print "<table style=\"border: 3px\">";
for ($i = 1; $i < $q; $i++) {
    $image = "<img width=\"100px\" src=\"images/img_$i.jpg\">";
    if ($i % 1 != 0) {
    }
    print "<tr><td style=\"border:solid;width:50px;text-align:center;\">$i</td><td style=\"border:solid;width:30px;\">$image</td></tr>";
}
print "</table>";
