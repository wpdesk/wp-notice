<?php

use \WPDesk\Notice\PermanentDismissibleNotice;

class TestPermanentDismissinleNotice extends WP_UnitTestCase
{

    public function testAddAction()
    {
        $notice_priority = 11;

        $notice = new PermanentDismissibleNotice(
            PermanentDismissibleNotice::NOTICE_TYPE_INFO,
            'test',
            'test_name',
            $notice_priority
        );

        $this->assertEquals($notice_priority, has_action('admin_notices', [$notice, 'showNotice'], $notice_priority));
    }

    public function testShowNotice()
    {
        $notice = new PermanentDismissibleNotice(
            PermanentDismissibleNotice::NOTICE_TYPE_INFO,
            'test',
            'test_name'
        );

        $this->expectOutputString(
            '<div class="notice notice-info is-dismissible"data-notice-name="test_name"><p>test</p></div>'
        );

        $notice->showNotice();
    }

}
