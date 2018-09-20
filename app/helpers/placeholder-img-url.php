<?php
function placeholder_img_url( $width, $height, $text_to_display='' ) {
  if( $text_to_display != ''):
    $text_to_display = str_replace( ' ', '+', $text_to_display);
    echo ( '//via.placeholder.com/' . $width . 'x' . $height . '?' . $text_to_display );
  else:
    echo ( '//via.placeholder.com/' . $width . 'x' . $height );
  endif;
}