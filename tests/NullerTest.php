<?php
require 'vendor/autoload.php';

use Nuller\Nuller;

Class NullerTest extends PHPUnit_Framework_TestCase {

    public function testDefaultStringPlaceholder() {
        Nuller::$default_string_placeholder = 'N/A';
        $this->assertEquals('N/A', Nuller::nullified('someString', true));
    }

    public function testNullified() {
        $this->assertEquals(null, Nuller::nullified('someString'));
    }

    public function testNullifiedToString() {
        $this->assertEquals('Empty', Nuller::nullified('someString', true, 'Empty'));
        $this->assertEquals('Empty', Nuller::nullifiedToString('someString', 'Empty'));
    }

    public function testNullifiedIfEmpty() {
        $this->assertEquals('String', Nuller::nullifiedIfEmpty('String'));
    }

}