<?php
/*
    $item['source'] = string;
    $item['nid'] = int;
    $item['title'] = string;
    $item['url'] = string;
    $item['passages'] = array;
*/
?>

  <div class="yasearch-link">
    <a href="<?php echo $item['url']; ?>" title="<?php echo $item['url']; ?>" class="title"><?php echo $item['title']; ?></a>
  </div>
  <div class="yasearch-passages">
    <?php foreach($item['passages'] as $passage) : ?>
      <div class="yasearch-passage"><?php echo $passage; ?></div>
    <?php endforeach; ?>
  </div>
