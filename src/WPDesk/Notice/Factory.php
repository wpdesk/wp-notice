<?php

namespace WPDesk\Notice;

/**
 * Class Factory
 *
 * Factory for notices.
 * @package WPDesk\Notice
 */
class Factory
{

    /**
     * Creates Notice object.
     *
     * @param string $noticeType Notice type.
     * @param string $noticeContent Notice content.
     * @param bool   $isDismissible Is dismissible.
     * @param int    $priority Priority.
     * @param array  $attributes Attributes.
     *
     * @return Notice
     */
    public static function notice(
        $noticeContent = '',
        $noticeType = 'info',
        $isDismissible = false,
        $priority = 10,
        $attributes = array()
    ) {
        return new Notice($noticeType, $noticeContent, $isDismissible, $priority, $attributes);
    }

    /**
     * Creates PermanentDismissibleNotice object.
     *
     * @param string $noticeContent
     * @param string $noticeType
     * @param int    $priority
     * @param array  $attributes Attributes.
     *
     * @return DismissibleNotice
     */
    public static function dismissibleNotice(
        $noticeContent = '',
        $noticeType = '',
        $priority = 10,
        $attributes = array()
    ) {
        return new DismissibleNotice($noticeType, $noticeContent, $priority, $attributes);
    }

    /**
     * Creates PermanentDismissibleNotice object.
     *
     * @param string $noticeContent
     * @param string $noticeType
     * @param int    $priority
     * @param array  $attributes Attributes.
     *
     * @return NoDismissibleNotice
     */
    public static function noDismissibleNotice(
        $noticeContent = '',
        $noticeType = '',
        $priority = 10,
        $attributes = array()
    ) {
        return new NoDismissibleNotice($noticeType, $noticeContent, $priority, $attributes);
    }

    /**
     * Creates PermanentDismissibleNotice object.
     *
     * @param string $noticeContent
     * @param string $noticeType
     * @param string $noticeName
     * @param int    $priority
     * @param array  $attributes Attributes.
     *
     * @return PermanentDismissibleNotice
     */
    public static function permanentDismissibleNotice(
        $noticeContent = '',
        $noticeType = '',
        $noticeName = '',
        $priority = 10,
        $attributes = array()
    ) {
        return new PermanentDismissibleNotice($noticeType, $noticeContent, $noticeName, $priority, $attributes);
    }

}
