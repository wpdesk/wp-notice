<?php

use \WPDesk\Notice\PermanentDismissibleNotice;

class TestPermanentDismissinleNotice extends WP_UnitTestCase
{

    const NOTICE_NAME = 'test_notice_name';

    public function testAddAction()
    {
        $notice_priority = 11;

        $notice = new PermanentDismissibleNotice(
            'test',
            'test_name',
            PermanentDismissibleNotice::NOTICE_TYPE_INFO,
            $notice_priority
        );

        $this->assertEquals($notice_priority, has_action('admin_notices', [$notice, 'showNotice'], $notice_priority));
    }

    public function testUndoDismiss()
    {
        update_option(
            PermanentDismissibleNotice::OPTION_NAME_PREFIX . self::NOTICE_NAME,
            PermanentDismissibleNotice::OPTION_VALUE_DISMISSED
        );

        $notice = new PermanentDismissibleNotice(
            PermanentDismissibleNotice::NOTICE_TYPE_INFO,
            self::NOTICE_NAME
        );
        $notice->undoDismiss();

        $this->assertEquals(
            '',
            get_option(PermanentDismissibleNotice::OPTION_NAME_PREFIX . self::NOTICE_NAME, '')
        );
    }

    public function testShowNotice()
    {
        $notice = new PermanentDismissibleNotice(
            'test',
            'test_name',
            PermanentDismissibleNotice::NOTICE_TYPE_INFO
        );

        $this->expectOutputString(
            '<div class="notice notice-info is-dismissible" data-notice-name="test_name" id="wpdesk-notice-test_name"><p>test</p></div>'
        );

        $notice->showNotice();
    }

}
