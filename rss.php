<?php

  $xml = 'https://www.volkskrant.nl/sport/rss.xml';
  $load_xml = simplexml_load_file($xml);
  $namespaces = $load_xml->channel->item->getNamespaces(true);
  //echo $load_xml->channel->item[0]->children($namespaces['media'])->content->attributes()->url;

  //get elements from "<channel>"
  $channel = $load_xml->channel;
  $channel_title = $channel->title;
  $channel_link = $channel->link;
  $channel_desc = $channel->description;
  $channel_image = $channel->image->url;
  ?>
  
  <div class='channel'>
    <img src='<?= $channel_image ?>' width='140px' height='140px'>
  <h2><a target='_blank' href='<?= $channel_link ?>'><?= $channel_title ?></a></h2>
  <h3><?= $channel_desc ?></h3>
  </div>

  <?php //get and output "<item>" elements
  $items = $load_xml->channel->item;
  
  foreach($items as $item) :
    $item_title = $item->title;
    $item_link = $item->link;
    $item_desc = $item->description;
    $item_pub = $item->pubDate;
    $item_img = $item->children($namespaces['media'])->content->attributes()->url;
    ?>
    <div class='item'>
      <div class='text'>
        <h3 class='title'><a target='_blank' href='<?= $item_link ?>'><?= $item_title ?></a></h3>
        <div class='date'><?= $item_pub ?></div>
        <?= $item_desc ?>
        <br>
        <a class='button' target='_blank' href='<?= $item_link ?>'>Lees Meer</a>
      </div>
      <div class='image'>
        <img src='<?= $item_img ?>'>
      </div>
    </div>
  <?php endforeach; 
?>

