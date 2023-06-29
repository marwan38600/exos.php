<?php

echo "<h1>Nos films</h1>\n";

echo "<ul>";
foreach ($movies as $movie) {
    echo "<li>" . $movie['title'] . "</li>";
}
echo "</ul>";

?>