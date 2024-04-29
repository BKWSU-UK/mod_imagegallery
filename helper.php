<?php
namespace Joomla\Module\ImageGallery;

defined('_JEXEC') or die;

use Joomla\CMS\Log\Log;
use Joomla\CMS\Uri\Uri;

class Helper
{
    public static function getImages($params)
    {
        $galleries = [];
        foreach ($params as $param) {
            $folder = Uri::base(true) . 'images/' . $param->image_folder;
            Log::Add("Image folder: " . $folder, Log::DEBUG);
            $images = [];
            if (file_exists($folder)) {
                $files = array_diff(scandir($folder), array('.', '..'));
                foreach ($files as $file) {
                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                        $images[] = $file;
                    }
                }
            }
            $galleries[] = [
                'date' => $param->gallery_date,
                'title' => $param->gallery_title,
                'image_folder' => $folder,
                'images' => $images
            ];
        }
        return $galleries;
    }
}
