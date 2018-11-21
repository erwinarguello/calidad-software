<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    
    public function testNombreCompleto()
    {
        $consumer = new Dummy();

        $consumer->setNombre('Said');
		
		$consumer->setApellido('Dawn');

        $result = $consumer->nombreCompleto();

        $this->assertEquals('Said Dawn', $result);
    }

    public function testEmail()
    {
    	$consumer = new Dummy();

    	$consumer->setCorreo("dauun.said@gmail.com");

    	$result = $consumer->isValidEmail();

    	$this->assertTrue($result);
    }
}
