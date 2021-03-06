<?php
/**
 * @license MIT
 * Full license text in LICENSE file
 */

namespace Driver\Core\Tool;

interface Photoshopper
{
    public function setup($source_path, $destination_path = NULL);

    public function get_width();

    public function get_height();

    public function resize_to_width($px);

    public function resize_to_height($px);

    public function square_crop($px);

    public function blur();

    public function gaussian_blur($sigma);

    public function rotate($degrees);

    public function get_geotagged_location_coordinates();

    public function get_exif_orientation();

    public function auto_orientate();
}
