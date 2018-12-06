<?php
    //return image
    function get_acf_image ( $image_id, $size, $default) {
        if(is_numeric($image_id)) {
            $image = wp_get_attachment_image_src($image_id, $size);
            return $image[0];
        }else
            return $default;
    }