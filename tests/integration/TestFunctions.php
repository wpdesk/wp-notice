<?php

use \WPDesk\Notice\Notice;
use \WPDesk\Notice\PermanentDismissibleNotice;

/**
 * Class TestFunctions
 */
class TestFunctions extends WP_UnitTestCase
{

    /**
     * Test WPDeskNotice function.
     */
    public function testWPDeskNotice()
    {
        $notice = wpdesk_notice('test function');

        $this->assertInstanceOf(Notice::class, $notice);

        $this->expectOutputString('<div class="notice notice-info"><p>test function</p></div>');

        $notice->showNotice();
    }

    /**
     * Test WPDeskNoticeInfo function.
     */
    public function testWPDeskNoticeInfo()
    {
        $notice = wpdesk_notice_info('test function');

        $this->assertInstanceOf(Notice::class, $notice);

        $this->expectOutputString('<div class="notice notice-info"><p>test function</p></div>');

        $notice->showNotice();
    }

    /**
     * Test WPDeskNoticeError function.
     */
    public function testWPDeskNoticeError()
    {
        $notice = wpdesk_notice_error('test function');

        $this->assertInstanceOf(Notice::class, $notice);

        $this->expectOutputString('<div class="notice notice-error"><p>test function</p></div>');

        $notice->showNotice();
    }

    /**
     * Test WPDeskNoticeWarning function.
     */
    public function testWPDeskNoticeWarning()
    {
        $notice = wpdesk_notice_warning('test function');

        $this->assertInstanceOf(Notice::class, $notice);

        $this->expectOutputString('<div class="notice notice-warning"><p>test function</p></div>');

        $notice->showNotice();
    }

    /**
     * Test WPDeskNoticeSuccess function.
     */
    public function testWPDeskNoticeSuccess()
    {
        $notice = wpdesk_notice_success('test function');

        $this->assertInstanceOf(Notice::class, $notice);

        $this->expectOutputString('<div class="notice notice-success"><p>test function</p></div>');

        $notice->showNotice();
    }

    /**
     * Test WPDeskPermanentDismissibleNotice function.
     */
    public function testWPDeskPermanentDismissibleNotice()
    {
        $notice = wpdesk_permanent_dismissible_notice(
            'test function',
            'test-notice',
            Notice::NOTICE_TYPE_INFO
        );

        $this->assertInstanceOf(PermanentDismissibleNotice::class, $notice);

        $this->expectOutputString(
            '<div class="notice notice-info is-dismissible" data-notice-name="test-notice" id="wpdesk-notice-test-notice"><p>test function</p></div>'
        );

        $notice->showNotice();
    }

    /**
     * Test WPDeskInitNoticeAjaxHandler function.
     */
    public function testWPDeskInitNoticeAjaxHandler()
    {
        $ajax_handler = wpdesk_init_notice_ajax_handler();

        $this->assertInstanceOf(\WPDesk\Notice\AjaxHandler::class, $ajax_handler);
    }

}
