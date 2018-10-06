<?php

/**
 * Creates Notice.
 *
 * @param $noticeContent
 * @param string $noticeType
 * @param bool $isDismissible
 * @param int $priority
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskNotice($noticeContent, $noticeType = 'info', $isDismissible = false, $priority = 10)
{
    return \WPDesk\Notice\Factory::notice($noticeContent, $noticeType, $isDismissible, $priority);
}

/**
 * Creates Notice.
 *
 * @param $noticeContent
 * @param string $noticeType
 * @param bool $isDismissible
 * @param int $priority
 *
 * @return \WPDesk\Notice\Notice
 */
function WPDeskPermanentDismissibleNotice($noticeContent, $noticeType = 'info', $priority = 10)
{
    return \WPDesk\Notice\Factory::permanentDismissibleNotice($noticeContent, $noticeType, $priority);
}
