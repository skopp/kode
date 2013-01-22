Feature: Kode
  To learn programming
  As a web user
  I want to play a game that teaches programming concepts

  Background:
    Given I have an account
    And I go to homepage

  Scenario: Start the game
    When I start a new game
    Then I should see initial game board

  Scenario: Play the game
    When I make a move
    Then I should see "Kode Board"
