<?php
namespace Awixe\Module\Session;
interface HandlerInterface {
    public function set(string $name, $value = null);
    public function get(string $name, $defaultReturnValue = null);
    public function del(string $name);
}
?>
