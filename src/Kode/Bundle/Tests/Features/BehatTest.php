<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Behat\Behat\Console\BehatApplication;

class BehatTest extends WebTestCase {
	/**
	 */
	public function testBehatFeatures() {
		try {
			$input = new ArrayInput(array('--format' => 'progress'));
			$output = new ConsoleOutput();

			$app = new \Behat\Behat\Console\BehatApplication('DEV');
			$app->setAutoExit(false);

			$result = $app->run($input, $output);

			$this->assertEquals(0, $result);
		} catch (\Exception $exception) {
			$this->fail($exception->getMessage());
		}
	}
}