<?php

require_once 'vendor/autoload.php';

if (!class_exists('\WPDesk\Notice\AjaxHandler')) {
    require_once 'src/WPDesk/Notice/AjaxHandler.php';
}
if (!class_exists('\WPDesk\Notice\Notice')) {
    require_once 'src/WPDesk/Notice/Notice.php';
}
if (!class_exists('\WPDesk\Notice\PermanentDismissibleNotice')) {
    require_once 'src/WPDesk/Notice/PermanentDismissibleNotice.php';
}
if (!class_exists('\WPDesk\Notice\Factory')) {
    require_once 'src/WPDesk/Notice/Factory.php';
}
require_once 'src/WPDesk/notice-functions.php';

