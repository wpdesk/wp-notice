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
        $notice = WPDeskNotice('test');

        $this->assertInstanceOf(Notice::class, $notice);
    }

    /**
     * Test WPDeskPermanentDismissibleNotice function.
     */
    public function testWPDeskPermanentDismissibleNotice()
    {
        $notice = WPDeskPermanentDismissibleNotice('test');

        $this->assertInstanceOf(PermanentDismissibleNotice::class, $notice);
    }

}
