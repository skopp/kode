<?php

use Behat\Behat\Context\ClosuredContextInterface,
	Behat\Behat\Context\TranslatedContextInterface,
	Behat\Behat\Context\BehatContext,
	Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
	Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\Step;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext {
	/**
	 * @Given /^I have an account$/
	 */
	public function iHaveAnAccount() {
		// I just happen to know test user exists :)
	}

	/**
	 * @When /^I submit correct credentials$/
	 */
	public function iSubmitCorrectCredentials() {
		return $this->login("tester", "AB!@ab12");
	}

	/**
	 * @When /^I submit incorrect credentials$/
	 */
	public function iSubmitIncorrectCredentials() {
		return $this->login("tester_" . time(), time());
	}

	private function login($username, $password) {
		return array(
			new Step\When('I fill in "username" with "' . $username . '"'),
			new Step\When('I fill in "password" with "' . $password . '"'),
			new Step\When('I press "Login"')
		);
	}

	/**
	 * @Given /^I start a new game$/
	 */
	public function iStartANewGame() {
		return array(
			new Step\When('I follow "Play 2 Learn"')
		);
	}

	/**
	 * @Then /^I should see initial game board$/
	 */
	public function iShouldSeeInitialGameBoard() {
		return array(
			new Step\Then('I should see "Place statements"')
		);
	}

	/**
	 * @When /^I click some code tiles$/
	 */
	public function iClickSomeCodeTiles() {
		return array(
			new Step\When('I click "tile_left"'),
			new Step\When('I click "tile_down"'),
			new Step\When('I click "tile_right"'),
			new Step\When('I click "tile_up"')
		);
	}

	/**
	 * @When /^(?:|I )click "(?P<element>[^"]*)"$/
	 */
	public function iClickElement($element) {
		$this->getSession()->getPage()->findById($element)->click();
	}

	/**
	 * @Then /^I should see "([^"]*)" in the program$/
	 */
	public function iShouldSeeInTheProgram($tile) {
		//$element = $this->getSession()->getPage()->findById('kode_board');
		$this->assertSession()->elementContains('css', '#kode_board', $this->fixStepArgument($tile));
	}

	/**
	 * @When /^I run the program$/
	 */
	public function iRunTheProgram() {
		return array(
			new Step\When('I click "action_run"')
		);
	}

	/**
	 * @Then /^my character should execute the code$/
	 */
	public function myCharacterShouldExecuteTheCode() {
		return array(
			new Step\Then('I should see "Kode Executed"')
		);
	}}
