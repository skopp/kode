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
			new Step\When('I press "New Game"')
		);
	}

	/**
	 * @Then /^I should see initial game board$/
	 */
	public function iShouldSeeInitialGameBoard() {
		return array(
			new Step\Then('I should see "Kode Board"')
		);
	}

	/**
	 * @When /^I click some code tiles$/
	 */
	public function iClickSomeCodeTiles() {
		return array(
			new Step\When('I press "Left"'),
			new Step\When('I press "Down"'),
			new Step\When('I press "Right"'),
			new Step\When('I press "Up"')
		);
	}

	/**
	 * @When /^I make a move$/
	 */
	public function iMakeAMove() {
		return array(
			new Step\When('I press "Run"')
		);
	}

	/**
	 * @Then /^my character will execute the code$/
	 */
	public function myCharacterWillExecuteTheCode() {
		return array(
			new Step\Then('I should see "Kode Executed"')
		);
	}}
