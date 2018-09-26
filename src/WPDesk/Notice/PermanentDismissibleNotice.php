<?php

namespace WPDesk\Notice;

/**
 * Class Notice.
 *
 * @package WPDesk\Notice
 */
class PermanentDismissibleNotice extends Notice
{

    const OPTION_NAME_PREFIX = 'wpdesk_notice_dismiss_';

    /**
     * @var string
     */
    private $noticeName;

    /**
     * @var string
     */
    private $noticeDismissOptionName;

    /**
     * WPDesk_Flexible_Shipping_Notice constructor.
     *
     * @param string $noticeType Notice type.
     * @param string $noticeContent Notice content.
     * @param string $noticeName Notice dismiss option name.
     */
    public function __construct($noticeType, $noticeContent, $noticeName)
    {
        parent::__construct($noticeType, $noticeContent, true);
        $this->noticeName = $noticeName;
        $this->noticeDismissOptionName = static::OPTION_NAME_PREFIX . $noticeName;
    }

    /**
     * Get attributes as string.
     *
     * @return string
     */
    protected function getAttributesAsString()
    {
        $attributesAsString = parent::getAttributesAsString();
        $attributesAsString .= sprintf('data-notice-name="%1$s"', esc_attr($this->noticeName));
        return $attributesAsString;
    }

}

