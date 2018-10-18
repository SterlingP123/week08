<?php

echo "<ul class='nav'>";
for($i=0;$i<=4;$i++){
    /* this will echo out each list item <li> using content from the $myNav array. */
    
    echo "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
}
echo "</ul>";

?>