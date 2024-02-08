<?php

namespace App\Helpers;

use App\Libraries\Slim;
use App\Libraries\SlimStatus;
use DB;
use Keygen\Keygen;


class SlimImage
{
    public static function slim_image_upload($image, $path, $if_not_set_image)
    {
        //   $this->load->library('slim');

        $image_error = FALSE;
        $image = str_replace(' ', '-', $image);
        try {

            $images = Slim::getImages($image);
        } catch (Exception $e) {
            Slim::outputJSON(array(
                'status' => SlimStatus::FAILURE,
                'message' => 'Unknown Error'
            ));
        }
        $image = array_shift($images);
        if ($images == FALSE) {
            $response['message'] = "The image field is required";
        } elseif (!isset($image)) {
            $response['message'] = "The image not found";
        } elseif (!isset($image['output']['data']) && !isset($image['input']['data'])) {
            $response['message'] = "The image field not send any data";
        }
        if (isset($image['output']['data'])) {
            $name = $image['output']['name'];
            $data = $image['output']['data'];
            $output = Slim::saveFile($data, $name, $path);
        }
        if (isset($image['input']['data'])) {
            $name = $image['input']['name'];
            $data = $image['input']['data'];
            $input = Slim::saveFile($data, $name, $path);
        }

        if (isset($output) && isset($input)) {


            $response['output'] = array(
                'file' => $output['name'],
                'path' => $image_path[0]
            );
            $response['input'] = array(
                'file' => $input['name'],
                'path' => $input['path']
            );
        }
        if (isset($output)) {
            $image_path = explode('./', $output['path']);
            $path = $image_path[1];
        } else {

            $image_path = explode('./', $path);
            $path = $image_path[1] .  $if_not_set_image;
        }

        $response['file'] = isset($output) ? $output['name'] : $if_not_set_image;
        $response['path'] = $path;
        $response['status'] = isset($output) ? SlimStatus::SUCCESS : SlimStatus::FAILURE;
        // print_r($response);
        // die;
        return $response;
    }

}
