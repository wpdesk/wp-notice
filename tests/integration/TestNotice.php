<?php

use \WPDesk\Notice\Notice;

class TestNotice extends WP_UnitTestCase
{

    public function testAddAction()
    {
        $notice_priority = 11;

        $notice = new Notice(Notice::NOTICE_TYPE_INFO, 'test', false, $notice_priority);

        $this->assertEquals($notice_priority, has_action('admin_notices', [$notice, 'showNotice'], $notice_priority));
    }

    public function testShowNotice()
    {
        $notice = new Notice(Notice::NOTICE_TYPE_INFO, 'test');

        $this->expectOutputString('<div class="notice notice-info"><p>test</p></div>');

        $notice->showNotice();
    }

    public function testShowNoticeDismissible()
    {
        $notice = new Notice(Notice::NOTICE_TYPE_INFO, 'test', true);

        $this->expectOutputString('<div class="notice notice-info is-dismissible"><p>test</p></div>');

        $notice->showNotice();
    }

}
