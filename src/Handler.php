<?php
/**
 * Session module - A session handler that acts as a wrapper
 * 
 * @copyright (c) 2017 Nicholas English
 * @license GPL-3.0
 * @link    https://github.com/Awixe/Session/blob/master/LICENSE
 */
namespace Awixe\Module\Session;
class Handler implements HandlerInterface {
    public function set(string $name, $value = null) {
        if (!is_null($value)) {
            $_SESSION[$name] = $value;
        }
    }
    public function get(string $name, $defaultReturnValue = null) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return $defaultReturnValue;
    }
    public function del(string $name) {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }
}
?>
