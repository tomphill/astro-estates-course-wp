<?php
  $price = get_field("price", $post_id);
  $bedrooms = get_field("bedrooms", $post_id);
  $bathrooms = get_field("bathrooms", $post_id);
?>
<div class="property-details">
  <div class="price">
    £<? echo $price; ?>
  </div>
  <div class="beds-baths">
    <div>
      <? echo $bedrooms; ?> bedrooms
    </div>
    <div>
      <? echo $bathrooms; ?> bathrooms
    </div>
  </div>
</div>