<?php
/**
 * Session module - A session handler that acts as a wrapper
 * 
 * @copyright (c) 2017 Nicholas English
 * @license GPL-3.0
 * @link    https://github.com/Awixe/Session/blob/master/LICENSE
 */
namespace Awixe\Module\Session;
interface HandlerInterface {
    public function set(string $name, $value = null);
    public function get(string $name, $defaultReturnValue = null);
    public function del(string $name);
}
?>
