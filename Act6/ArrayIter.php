<?php
const favmovie = [
  "Howl's Moving Castle",
  "Deadpool",
  "Pixel",
  "Call",
  "Evil Dead Rise",
  "Gintama: The Movie: The Final Chapt",
  "Rurouni Kenshin",
];
foreach(favmovie as $index => $movie){
  echo($index + 1) . ". " . $movie . "\n";
}
?>