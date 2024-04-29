<?php
namespace Joomla\Module\ImageGallery;

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;

// Include the helper.
require_once __DIR__ . '/helper.php';

$galleries = Helper::getImages($params->get('galleries', [], 'array'));

require ModuleHelper::getLayoutPath('mod_imagegallery');
