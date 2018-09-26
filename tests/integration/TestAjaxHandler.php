<?php

use \WPDesk\Notice\AjaxHandler;

class TestAjaxHandler extends WP_UnitTestCase
{

    const ASSETS_URL = 'http://test.com/test/assetes/';
    const WP_DEFAULT_PRIORITY = 10;

    public function testHooks()
    {
        $ajaxHandler = new AjaxHandler(self::ASSETS_URL);
        $ajaxHandler->hooks();

        $this->assertEquals(
            self::WP_DEFAULT_PRIORITY,
            has_action('admin_enqueue_scripts', [$ajaxHandler, 'enqueueAdminScripts'])
        );
        $this->assertEquals(
            self::WP_DEFAULT_PRIORITY,
            has_action('wp_ajax_wpdesk_notice_dismiss', [$ajaxHandler, 'processAjaxNoticeDismiss'])
        );
    }

    public function testEnqueueAdminScripts()
    {
        $ajaxHandler = new AjaxHandler(self::ASSETS_URL);
        $ajaxHandler->hooks();
        do_action('admin_enqueue_scripts');
        $registeredScripts = wp_scripts()->registered;

        $this->assertArrayHasKey('wpdesk_notice', $registeredScripts, 'Script not registered!');
        $this->assertEquals(
            self::ASSETS_URL . 'js/notice.js',
            $registeredScripts['wpdesk_notice']->src,
            'Script src is invalid!'
        );
    }

}
