<?php
/**
 * @package   OSDownloads
 * @contact   www.alledia.com, hello@alledia.com
 * @copyright 2016 Open Source Training, LLC. All rights reserved
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

if (file_exists(__DIR__ . '/admin/abstract.script.installer.php')) {
    require_once __DIR__ . '/admin/abstract.script.installer.php';
} else {
    require_once __DIR__ . '/abstract.script.installer.php';
}

class Com_OSDownloadsInstallerScript extends AbstractOSDownloadsInstallerScript
{

}
