<?php

/**
 * Creates Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNotice($noticeContent, $noticeType = 'info', $dismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice($noticeContent, $noticeType, $dismissible, $priority);
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
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice($noticeContent, $noticeType = 'info', $dismissible = false, $priority = 10)
{
    return WPDeskNotice($noticeContent, $noticeType, $dismissible, $priority);
}

/**
 * Creates Notice Info.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNoticeInfo($noticeContent, $dismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice(
        $noticeContent,
        \WPDesk\Notice\Notice::NOTICE_TYPE_INFO,
        $dismissible,
        $priority
    );
}

/**
 * Creates Notice Info.
 *
 * Alias for {@see WPDeskNoticeInfo()} function.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice_info($noticeContent, $dismissible = false, $priority = 10)
{
    return WPDeskNoticeInfo($noticeContent, $dismissible, $priority);
}

/**
 * Creates Notice Error.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNoticeError($noticeContent, $dismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice(
        $noticeContent,
        \WPDesk\Notice\Notice::NOTICE_TYPE_ERROR,
        $dismissible,
        $priority
    );
}

/**
 * Creates Notice Error.
 *
 * Alias for {@see WPDeskNoticeError()} function.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice_error($noticeContent, $dismissible = false, $priority = 10)
{
    return WPDeskNoticeError($noticeContent, $dismissible, $priority);
}

/**
 * Creates Notice Warning.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNoticeWarning($noticeContent, $dismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice(
        $noticeContent,
        \WPDesk\Notice\Notice::NOTICE_TYPE_WARNING,
        $dismissible,
        $priority
    );
}

/**
 * Creates Notice Warning.
 *
 * Alias for {@see WPDeskNoticeWarning()} function.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice_warning($noticeContent, $dismissible = false, $priority = 10)
{
    return WPDeskNoticeWarning($noticeContent, $dismissible, $priority);
}

/**
 * Creates Notice Success.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNoticeSuccess($noticeContent, $dismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice(
        $noticeContent,
        \WPDesk\Notice\Notice::NOTICE_TYPE_SUCCESS,
        $dismissible,
        $priority
    );
}

/**
 * Creates Notice Success.
 *
 * Alias for {@see WPDeskNoticeSuccess()} function.
 *
 * @param string $noticeContent Notice content.
 * @param bool   $dismissible Dismissible notice.
 * @param int    $priority Notice priority,
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_notice_success($noticeContent, $dismissible = false, $priority = 10)
{
    return WPDeskNoticeSuccess($noticeContent, $dismissible, $priority);
}

/**
 * Creates Permanent Dismissible Notice.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeType Notice type.
 * @param string $noticeName Notice name.
 * @param int    $priority Notice priority.
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskPermanentDismissibleNotice($noticeContent, $noticeName, $noticeType = 'info', $priority = 10)
{
    return \WPDesk\Notice\Factory::permanentDismissibleNotice($noticeContent, $noticeName, $noticeType, $priority);
}

/**
 * Creates Permanent Dismissible Notice.
 *
 * Alias for {@see WPDeskPermanentDismissibleNotice()} function.
 *
 * @param string $noticeContent Notice content.
 * @param string $noticeName Notice name.
 * @param string $noticeType Notice type.
 * @param int    $priority Notice priority.
 *
 * @return \WPDesk\Notice\Notice
 */
function wpdesk_permanent_dismissible_notice($noticeContent, $noticeName, $noticeType = 'info', $priority = 10)
{
    return WPDeskPermanentDismissibleNotice($noticeContent, $noticeName, $noticeType, $priority);
}
