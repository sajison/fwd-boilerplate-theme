<?php
// SVG importer
function get_svg( $file ) {
  echo file_get_contents( get_stylesheet_directory_uri() . '/resources/images/dist/svg/' . $file . '.svg');
}
