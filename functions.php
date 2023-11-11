<?
add_action("init", function(){
  // register custom blocks
  register_block_type(__DIR__ . "/blocks/tickItem");
  register_block_type(__DIR__ . "/blocks/propertyDetails");
  register_block_type(__DIR__ . "/blocks/propertySearch");

  add_filter("wp_graphql_blocks_process_attributes", function($attributes, $data, $post_id){
    if($data['blockName'] === "astroestates/property-details"){
      $price = get_field("price", $post_id);
      $bedrooms = get_field("bedrooms", $post_id);
      $bathrooms = get_field("bathrooms", $post_id);

      $attributes["price"] = $price;
      $attributes["bedrooms"] = $bedrooms;
      $attributes["bathrooms"] = $bathrooms;
    }else if($data['blockName'] === "contact-form-7/contact-form-selector"){
      $block_markup = render_block($data);
      $form_markup = do_shortcode($block_markup);
      $attributes['formMarkup'] = $form_markup;
    }
    return $attributes;
  }, 0, 3);
});