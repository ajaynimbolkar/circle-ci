@api
Feature: Testing actions performed after logging in.
  Scenario: Successful ECM login by valid user
    Given I am logged in as a user with the "administrator" role
    Then I should see localized value of vocabulary "url_builder" in input "field_content_title" element

