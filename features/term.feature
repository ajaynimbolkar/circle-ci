@api
Feature: Login User
  Scenario: Login with user
   Given I am logged in as a user with the "administrator" role
   Then I should see the text "Products"
