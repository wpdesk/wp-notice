<?php

namespace WPDesk\Notice;

/**
 * Class Notice.
 *
 * @package WPDesk\Notice
 */
class Notice
{

    const NOTICE_TYPE_ERROR = 'error';
    const NOTICE_TYPE_WARNING = 'warning';
    const NOTICE_TYPE_SUCCESS = 'success';
    const NOTICE_TYPE_INFO = 'info';

    /**
     * Notice type.
     *
     * @var string
     */
    protected $noticeType;

    /**
     * Notice content.
     *
     * @var string
     */
    protected $noticeContent;

    /**
     * Is dismissible.
     *
     * @var bool
     */
    protected $isDismissible;

    /**
     * Attributes.
     *
     * @var string[]
     */
    protected $attributes = array();

    /**
     * WPDesk_Flexible_Shipping_Notice constructor.
     *
     * @param string $noticeType Notice type.
     * @param string $noticeContent Notice content.
     * @param bool $isDismissible Is dismissible.
     * @param int $priority Notice priority.
     */
    public function __construct($noticeType, $noticeContent, $isDismissible = false, $priority = 10)
    {
        $this->noticeType    = $noticeType;
        $this->noticeContent = $noticeContent;
        $this->isDismissible = $isDismissible;
        add_action('admin_notices', [$this, 'showNotice'], $priority);
    }

    /**
     * Get notice class.
     *
     * @return string
     */
    protected function getNoticeClass()
    {
        if ('updated' === $this->noticeType) {
            $notice_class = 'notice ' . $this->noticeType;
        } else {
            $notice_class = 'notice notice-' . $this->noticeType;
        }
        if ($this->isDismissible) {
            $notice_class .= ' is-dismissible';
        }
        return $notice_class;
    }

    /**
     * Get attributes as string.
     *
     * @return string
     */
    protected function getAttributesAsString()
    {
        $attribute_string = sprintf('class="%1$s"', esc_attr($this->getNoticeClass()));
        return $attribute_string;
    }

    /**
     * Show notice;
     */
    public function showNotice()
    {
        echo sprintf('<div %1$s><p>%2$s</p></div>', $this->getAttributesAsString(), $this->noticeContent);
    }

}

