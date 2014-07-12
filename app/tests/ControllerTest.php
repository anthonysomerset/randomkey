<?php

class ControllerTest extends TestCase {

    public function testAll()
    {
        $this->call('GET', '/');
        $this->assertViewHas('decent');
        $this->assertViewHas('strong');
        $this->assertViewHas('ftknox');
        $this->assertViewHas('ci');
        $this->assertViewHas('wpa_160');
        $this->assertViewHas('wpa_504');
        $this->assertViewHas('wep_64');
        $this->assertViewHas('wep_128');
        $this->assertViewHas('wep_152');
        $this->assertViewHas('wep_256');
        $this->assertResponseOk();
    }

    public function testDecent()
    {
        $this->call('GET', '/decent');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testStrong()
    {
        $this->call('GET', '/strong');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testFtknox()
    {
        $this->call('GET', '/ftknox');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testCI()
    {
        $this->call('GET', '/ci');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWPA_160()
    {
        $this->call('GET', '/wpa160');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWPA_504()
    {
        $this->call('GET', '/wpa504');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWEP_64()
    {
        $this->call('GET', '/wep64');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWEP_128()
    {
        $this->call('GET', '/wep128');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWEP_152()
    {
        $this->call('GET', '/wep152');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testWEP_256()
    {
        $this->call('GET', '/wep256');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }

    public function testIP_address()
    {
        $this->call('GET', '/ip_address');
        $this->assertViewHas('key');
        $this->assertResponseOk();
    }
}