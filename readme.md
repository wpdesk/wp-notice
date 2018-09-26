WordPress Library to display notices in admin area.
===================================================

wp-notice is a simple library for WordPress plugins to display notices in admin area.

This library can display simple notices (error, warning, success, info) and dismissible notices.
It also handles dismiss functionality with AJAX requests.  

## Requirements

PHP 5.5 or later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require wpdesk/wp-notice:dev-master
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```


## Getting Started

Simple usage looks like:

```php
$notice = new Notice(Notice::NOTICE_TYPE_INFO, 'Notice text goes here', false); 
```

Notice must be used before WordPress action `admin_notices`. WordPress admin actions order is listed [here](https://codex.wordpress.org/Plugin_API/Action_Reference#Actions_Run_During_an_Admin_Page_Request). 
