<?php

namespace WPDesk\Notice\Notice;

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

    /**
     * Get attributes as string.
     *
     * @return string
     */
    protected function getAttributesAsString()
    {
        $attributesAsString = parent::getAttributesAsString();
        $attributesAsString .= sprintf('data-dismiss-option="%1$s"', esc_attr($this->noticeDismissOptionName));
        return $attributesAsString;
    }

}

