<?php

  $xml = 'https://www.volkskrant.nl/sport/rss.xml'; 
  $xmlDoc = new DOMDocument();
  $xmlDoc->load($xml);

  //get elements from "<channel>"
  $channel=$xmlDoc->getElementsByTagName('channel')->item(0);
  $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
  $channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
  $channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
  $image_src = $xmlDoc->getElementsByTagName('image')->item(0);
  $channel_image = $image_src->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue;

  //output elements from "<channel>"
  $output = "";
  $output .= "<p class='channel'><img src='" . $channel_image . "' width='140px' height='140px'>";
  $output .= "<br>";
  $output .= "<a href='" . $channel_link. "'>" . $channel_title . "</a>";
  $output .= "<br>";
  $output .= $channel_desc;
  $output .= "<br>";
  $output .= "</p>";

  //get and output "<item>" elements
  $x=$xmlDoc->getElementsByTagName('item');
  for ($i=0; $i<=10; $i++) {
    $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
    $output .= "<p class='item'><a href='" . $item_link . "'>" . $item_title . "</a>";
    $output .= "<br>";
    $output .= $item_desc . "</p>";
  }
  echo $output;
?>