Feature: Kode
  To learn programming
  As a web user
  I want to play an online game that teaches programming concepts

  Background:
    Given I have an account
    And I go to homepage

  Scenario: Start the game
    When I start a new game
    Then I should see initial game board

  Scenario: Play the game
    When I click some code tiles
    And I run the program
    Then my character should execute the code
