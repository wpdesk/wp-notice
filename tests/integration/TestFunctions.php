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
     * Test WPDeskPermanentDismissibleNotice function.
     */
    public function testWPDeskPermanentDismissibleNotice()
    {
        $notice = wpdesk_permanent_dismissible_notice('test');

        $this->assertInstanceOf(PermanentDismissibleNotice::class, $notice);
    }

}
