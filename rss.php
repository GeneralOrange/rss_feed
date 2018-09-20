<?php

  $xml = 'https://www.volkskrant.nl/sport/rss.xml'; 
  $xmlDoc = new DOMDocument();
  $xmlDoc->load($xml);

  //get elements from "<channel>"
  $channel = $xmlDoc->getElementsByTagName('channel')->item(0);
  $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
  $channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
  $channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
  $image_src = $xmlDoc->getElementsByTagName('image')->item(0);
  $channel_image = $image_src->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue;
  ?>
  
  <div class='channel'>
    <img src='<?= $channel_image ?>' width='140px' height='140px'>
  <h2><a target='_blank' href='<?= $channel_link ?>'><?= $channel_title ?></a></h2>
  <h3><?= $channel_desc ?></h3>
  </div>

  <?php //get and output "<item>" elements
  $x=$xmlDoc->getElementsByTagName('item');
  
  foreach($x as $item) :
    $item_title = $item->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $item_link = $item->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $item_desc = $item->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
    $item_pub = $item->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
    ?>
    <div class='item'>
    <h3 class='title'><a target='_blank' href='<?= $item_link ?>'><?= $item_title ?></a></h3>
    <div class='date'><?= $item_pub ?></div>
    <?= $item_desc ?>
    <br>
    <a class='button' target='_blank' href='<?= $item_link ?>'>Lees Meer</a></div>
  <?php endforeach; 
?>

