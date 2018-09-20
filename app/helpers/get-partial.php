<?php
// Simplified partials integration for cleaner markup
function get_partial( $folder, $slug ) {
  return include( locate_template( 'page-templates/layouts/' . $folder . '/' . $slug . '.php' ) );
}