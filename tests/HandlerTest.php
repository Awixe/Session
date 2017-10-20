<?php
/**
 * Session module - A session handler that acts as a wrapper.
 *
 * @copyright (c) 2017 Nicholas English
 * @license GPL-3.0
 *
 * @link    https://github.com/Awixe/Session/blob/master/LICENSE
 */

namespace Awixe\Modules\Session\Tests;

session_start();
use Awixe\Modules\Session\Handler;

class HandlerTest extends \PHPUnit_Framework_TestCase
{
    private $handler;

    public function __construct()
    {
        $this->handler = new Handler();
    }

    public function testSetVar()
    {
        $this->assertFalse($this->handler->set('test', null));
    }

    public function testSetVar2()
    {
        $this->assertTrue($this->handler->set('test', 'hello'));
    }

    public function testDelVar()
    {
        $_SESSION['createDelTest'] = 'trx';
        $this->assertTrue($this->handler->del('createDelTest'));
    }

    public function testDelVar2()
    {
        $this->assertFalse($this->handler->del('otherVar'));
    }

    public function testGetVar()
    {
        $_SESSION['createGetTest'] = 'trx';
        $this->assertTrue(!is_null($this->handler->set('createGetTest')));
    }

    public function testGetVar()
    {
        $this->assertTrue(is_null($this->handler->set('OtherVar')));
    }
}
