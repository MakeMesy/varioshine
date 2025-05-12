<?php

$hero_query = "SELECT id, heading, slogan, img, btn, link FROM hero_section_home";
$stmt = $conn->prepare($hero_query);
$stmt->execute();
$stmt->bind_result($id, $heading, $slogan, $img, $btn, $link);

$hero_sections = [];
while ($stmt->fetch()) {
  $hero_sections[] = [
    'id' => $id,
    'heading' => $heading,
    'slogan' => $slogan,
    'img' => $img,
    'btn' => $btn,
    'link' => $link
  ];
}
$stmt->close();

?>