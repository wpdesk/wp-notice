<?php

/**
 * Creates Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNotice($noticeContent, $noticeType = 'info', $dismissible = false, $priority = 10, $attributes = array())
{
    return \WPDesk\Notice\Factory::notice($noticeContent, $noticeType, $dismissible, $priority, $attributes);
}

/**
 * Creates Notice.
 *
 * Alias for {@see WPDeskNotice()} function.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice(
    $noticeContent,
    $noticeType = 'info',
    $dismissible = false,
    $priority = 10,
    $attributes = array()
) {
    return WPDeskNotice($noticeContent, $noticeType, $dismissible, $priority, $attributes);
}

/**
 * Creates Dismissible Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskDismissibleNotice($noticeContent, $noticeType = 'info', $priority = 10, $attributes = array())
{
    return \WPDesk\Notice\Factory::dismissibleNotice($noticeContent, $noticeType, $priority, $attributes);
}

/**
 * Creates Dismissible Notice.
 *
 * Alias for {@see WPDeskPermanentDismissibleNotice()} function.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_dismissible_notice($noticeContent, $noticeType = 'info', $priority = 10, $attributes = array())
{
    return WPDeskDismissibleNotice($noticeContent, $noticeType, $priority, $attributes);
}

/**
 * Creates No Dismissible Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNoDismissibleNotice($noticeContent, $noticeType = 'info', $priority = 10, $attributes = array())
{
    return \WPDesk\Notice\Factory::noDismissibleNotice($noticeContent, $noticeType, $priority, $attributes);
}

/**
 * Creates No Dismissible Notice.
 *
 * Alias for {@see WPDeskPermanentDismissibleNotice()} function.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_no_dismissible_notice($noticeContent, $noticeType = 'info', $priority = 10, $attributes = array())
{
    return WPDeskNoDismissibleNotice($noticeContent, $noticeType, $priority, $attributes);
}
/**
 * Creates Permanent Dismissible Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param string $noticeName Notice name.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskPermanentDismissibleNotice(
    $noticeContent,
    $noticeType = 'info',
    $noticeName = '',
    $priority = 10,
    $attributes = array()
) {
    return \WPDesk\Notice\Factory::permanentDismissibleNotice(
        $noticeContent,
        $noticeType,
        $noticeName,
        $priority,
        $attributes
    );
}

/**
 * Creates Permanent Dismissible Notice.
 *
 * Alias for {@see WPDeskPermanentDismissibleNotice()} function.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param string $noticeName Notice name.
 * @param int    $priority Notice priority.
 * @param array  $attributes Attributes.
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_permanent_dismissible_notice(
    $noticeContent,
    $noticeType = 'info',
    $noticeName = '',
    $priority = 10,
    $attributes = array()
) {
    return WPDeskPermanentDismissibleNotice($noticeContent, $noticeType, $noticeName, $priority, $attributes);
}
