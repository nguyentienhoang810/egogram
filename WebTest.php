<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase {
	public function setUp() {
		$targetUrl = 'http://tech.basicinc.jp/Selenium/2014/05/05/selenium2_phpunit/';

		$this->setHost('127.0.0.1');
		$this->setPort(4444);
		$this->setBrowser('firefox');
		$this->setBrowserUrl($targetUrl);
	}

	public function testTitle() {
		$this->url('/');
		$this->assertEquals('Title Hoge', $this->title());
	}
}
