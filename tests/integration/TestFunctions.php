<?php

use \WPDesk\Notice\Notice;
use \WPDesk\Notice\PermanentDismissibleNotice;
use \WPDesk\Notice\DismissibleNotice;
use \WPDesk\Notice\NoDismissibleNotice;

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
        $notice = wpdesk_notice('test');

        $this->assertInstanceOf(Notice::class, $notice);
    }

    /**
     * Test WPDeskPermanentDismissibleNotice function.
     */
    public function testWPDeskPermanentDismissibleNotice()
    {
        $notice = wpdesk_permanent_dismissible_notice('test');

        $this->assertInstanceOf(PermanentDismissibleNotice::class, $notice);
    }

    /**
     * Test WPDeskDismissibleNotice function.
     */
    public function testWPDeskDismissibleNotice()
    {
        $notice = wpdesk_dismissible_notice('test');

        $this->assertInstanceOf(DismissibleNotice::class, $notice);
    }

    /**
     * Test WPDeskDismissibleNotice function.
     */
    public function testWPDeskNoDismissibleNotice()
    {
        $notice = wpdesk_no_dismissible_notice('test');

        $this->assertInstanceOf(NoDismissibleNotice::class, $notice);
    }

}
