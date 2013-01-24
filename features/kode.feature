Feature: Kode
  To learn programming
  As an web user
  I want to play an online game that teaches programming concepts

  Background:
    Given I have an account
    And I go to homepage

  Scenario: Start the game
    When I start a new game
    Then I should see initial game board

  Scenario: Make a move
    When I click some code tiles
    And I press "Run"
    Then my character will execute the code
