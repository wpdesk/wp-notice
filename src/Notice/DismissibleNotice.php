<?php

namespace WPDesk\Notice;

/**
 * Class Notice.
 *
 * @package WPDesk\Notice
 */
class DismissibleNotice extends Notice
{

	/**
	 * @var string
	 */
	private $noticeDismissOptionName;

    /**
     * WPDesk_Flexible_Shipping_Notice constructor.
     *
     * @param string $noticeType Notice type.
     * @param string $noticeContent Notice content.
     * @param string $noticeDismissOptionName Notice dismiss option name.
     */
    public function __construct($noticeType, $noticeContent, $noticeDismissOptionName)
    {
        parent::__construct($noticeType, $noticeContent, true);
        $this->noticeDismissOptionName = $noticeContent;
    }

    protected

}

