<?php

namespace WPDesk\Notice;

/**
 * Class DismissibleNotice
 *
 * WordPress admin dismissible notice.
 * @package WPDesk\Notice
 */
class DismissibleNotice extends Notice
{

    /**
     * DismissibleNotice constructor.
     *
     * @param string $noticeContent Notice content.
     * @param string $noticeType Notice type.
     * @param int    $priority Priority
     * @param array $attributes Attributes.
     */
    public function __construct($noticeContent, $noticeType, $priority = 10, $attributes = array())
    {
        parent::__construct($noticeContent, $noticeType, true, $priority, $attributes);
    }

}

