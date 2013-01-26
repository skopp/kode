Feature: Make a move
  To play the game
  I want to construct and run a program

  Background:
    Given I have an account
    And I go to homepage
    And I start a new game

  Scenario Outline: Make a move
    When I click "tile_<tile>"
    Then I should see "<tile>" in the program

  Examples:
    | tile  |
    | left  |
    | right |
    | up    |
    | down  |