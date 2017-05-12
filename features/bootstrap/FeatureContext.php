<?php

use Drupal\DrupalExtension\Context\Context;
use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Assert\Assertion;
use Drupal\Driver\DrushDriver;

/**
* Defines application features from the specific context.
*/
class FeatureContext extends RawDrupalContext implements SnippetAcceptingContext {
 
  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {
    /**$alias = '@mysite';
    $driver = new DrushDriver($alias);

    $node = (object) array(
      'type' => 'article',
      'uid' => 1,
      'title' => $driver->getRandom()->name(),
    );
    $driver->createNode($node);**/
  }

  /**
    * @Then I set main window name
    */
  public function iSetMainWindowName() {
    $window_name = 'main_window';
    $script = 'window.name = "' . $window_name . '"';
    $this->getSession()->executeScript($script);
  }
  
    /**
    * @Then I switch back to main window
    */
    public function iSwitchBackToMainWindow() {
      $this->getSession()->switchToWindow(null);
    }

    /**
     * @When I check for taxonomy :arg1
     */
    public function iCheckForTaxonomy2($arg1)
    {
       var_dump("tete");
       for($i=0; $i<10; $i++) {
        
       }
        //$tt = $this->getUserManager()->getCurrentUser();
        //$term = $this->getCore()->loadTaxonomyTermByName("url_builder", "Social Share");
    }
    
    /**
      * Open hidden search field and put value on it.
      *
      * @When /^I fill hidden field "(?P<id>[^"]*)" with "(?P<value>[^"]*)"$/
      */
    public function iFillHiddenFieldWith($field, $value) {
      $this->getSession()->executeScript("
        var element = document.getElementById('".$field."');
        element.style.width = '200px';
        element.style.transition = 'left 0.25s ease-in 0s, width 0.25s ease-in 0s, background 0.5s ease 0s';             
        ");
      
      $this->getSession()->wait(2000);
      $this->getSession()->getDriver()->setValue('//*[@id="'.$field.'"]', $value);
    }
    
    /**
    * Click hidden submit button.
    * @Then /^I Press hidden submit "(?P<id>[^"]*)"$/
    */
    public function iPressHiddenSubmit($field) {
      $javascript = "document.getElementById('" . $field . "').click()";
      $this->getSession()->executeScript($javascript);
    }
    
    /**
    * @Then /^I hover over "([^"]*)"$/
    */
    public function iHoverOver($arg1) {
      $page = $this->getSession()->getPage();
      $findName = $page->find("css", $arg1);
      if (!$findName) {
        throw new Exception($arg1 . " could not be found");
      } else {
        $findName->mouseOver();
        $this->getSession()->wait(2000);
      }
    }
    
    /**
    * @Then /^I click href "([^"]*)"$/
    */
    public function iClickHref($arg1) {
      $session = $this->getSession();
      $element = $session->getPage()->find(
        'xpath',
          $session->getSelectorsHandler()->selectorToXpath('css', 'a[href*="'. $arg1 .'"]') // just changed xpath to css
          );
      if (null === $element) {
        throw new \InvalidArgumentException(sprintf('Could not evaluate CSS Selector: "%s"', $cssSelector));
      }
      $element->click();
      $this->getSession()->wait(4000);
    }
    
    /**
    * @Then I fill in the search box with :arg1
    */
    public function iFillInTheSearchBoxWith($class_name) {
      $this->getSession()->getPage()->find("css", "input[type=checkbox].".$class_name)->check();        
      $this->getSession()->wait(2000);
    }
    
    /**
    * @Then I wait for :arg1 seconds
    */
    public function iWaitForSeconds($arg1) {
      $this->getSession()->wait($arg1);
    }
    
  }