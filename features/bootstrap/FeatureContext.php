<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\TranslatableContext;
use Behat\Behat\Context\Initializer\ContextInitializer;
use kolev\MultilingualExtension\Context\MultilingualContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements SnippetAcceptingContext {
  
 /**
   * The $configFactory variable.
   *
   * @var kolev\MultilingualExtension\Context\MultilingualContext
   */
   private $multilingualContext;
  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  
//  public function __construct() {
//     $this->useContext('subcontext_alias', new MultilingualContext());
//  }
  
   /** @BeforeScenario */
    public function before(BeforeScenarioScope $scope) {
        $environment = $scope->getEnvironment();
        // Get all the contexts you need in this context
        $this->multilingualContext = $environment->getContext('kolev\MultilingualExtension\Context\MultilingualContext');
        // $this->guestContest is the instance of GuestContext
     }
     
  /**
   * @BeforeStep
   */
//  public function beforeStep()
//  {
//   $this->getSession()->getDriver()->maximizeWindow();
//  }
  
  /**
   * @Then I test
   */
  public function iTest() {
    $var = $this->multilingualContext->languageDetection();
    print "<pre>";var_dump($var);exit;
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
 * @When /^The document should open in a new tab$/
 */    
public function documentShouldOpenInNewTab(){
    $session     = $this->getSession();
    $windowNames = $session->getWindowNames();
    if(sizeof($windowNames) < 2){
        throw new \ErrorException("Expected to see at least 2 windows opened"); 
    }

    //You can even switch to that window
    $session->switchToWindow($windowNames[1]);
}
 /**
  * Open hidden search field and put value on it.
  * 
  * @When /^I fill hidden field "(?P<id>[^"]*)" with "(?P<value>[^"]*)"$/
  */
public function iFillHiddenFieldWith($field, $value) {
  $this->getSession()->executeScript("
    var element = document.getElementById('".$field."');
                 
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
 * @Then I click on the checkbox :arg1
 */
public function iClickOnTheCheckbox($class_name) {
  $this->getSession()->getPage()->find("css", "input[type=checkbox].".$class_name)->check();
}

/**
 * @Then I wait for :arg1 seconds
 */
public function iWaitForSeconds($arg1) {
  $this->getSession()->wait($arg1);
}

/**
  * Click on the element with the provided xpath query
  *
  * @When /^I click on the element with xpath "([^"]*)"$/
  */
public function iClickOnTheElementWithXPath($xpath) {
  $session = $this->getSession(); // get the mink session
  $element = $session->getPage()->find(
      'xpath',
      $session->getSelectorsHandler()->selectorToXpath('xpath', $xpath)
  ); // runs the actual query and returns the element

  // errors must not pass silently
  if (null === $element) {
      throw new \InvalidArgumentException(sprintf('Could not evaluate XPath: "%s"', $xpath));
  }

  // ok, let's click on it
  $element->click();
}

/**
 * Wait for AJAX to finish.
 *
 * @Given /^I wait for AJAX to finish$/
 */
public function iWaitForAjaxToFinish() {
  $this->getSession()->wait(10000, '(0 === jQuery.active)');
}

/**
 * @Given I click the :arg1 element
 */
public function iClickTheElement($selector) {
  $page = $this->getSession()->getPage();
  $element = $page->find('css', $selector);

  if (empty($element)) {
      throw new Exception("No html element found for the selector ('$selector')");
  }

  $element->click();
}

/**
 * @Given I click the "([^"]*)" element and open in new tab$/
 */
public function iClickTheElementAndOpenInNewTab($selector) {
  $page = $this->getSession()->getPage();
  $element = $page->find('css', $selector);

  if (empty($element)) {
      throw new Exception("No html element found for the selector ('$selector')");
  }
  $windowNames = $this->getSession()->getWindowNames();
  $element->click();
  $this->getSession()->switchToWindow($windowNames[1]);
}

/**
  * Click some text
  *
  * @When /^I click on the text "([^"]*)" in the "([^"]*)" element$/
  */
public function iClickOnTheTextInTheElements($text, $selector) {
  $elements = $this->getSession()->getPage()->findAll('css', $selector);
  foreach ($elements as $element) {
    $elemntText = $element->getText();
    if ($elemntText == $text) {
      $element->getParent()->click();
    }
  }
  if (null === $element) {
    throw new \InvalidArgumentException(sprintf('Cannot find text: "%s"', $text));
  }
}

/**
  * Click some text
  *
  * @When /^I check text contain "([^"]*)" in the "([^"]*)" element$/
  */
public function iCheckTextContainInTheElement($text, $selector) {
  $elements = $this->getSession()->getPage()->findAll('css', $selector);
  foreach ($elements as $element) {
    $elemntText = $element->getText();
    if (strpos($elemntText, $text) !== false) {
      return;
    }
  }
  if (null === $element) {
    throw new \InvalidArgumentException(sprintf('Cannot find text: "%s"', $text));
  }
}

/**
 * @When /^(?:|I )select "([^"]*)" in the "([^"]*)" select$/
 */
public function iselectInTheSelect($option, $name) {
  $page = $this->getSession()->getPage();
  $selectElement = $page->find('css', $name);

  $selectElement->selectOption($option);
}

/**
   * Wait until the id="updateprogress" element is gone,
   * or timeout after 3 minutes (180,000 ms).
   *
   * @Given /^I wait for the batch job to finish$/
   */
  public function iWaitForTheBatchJobToFinish() {
    $this->getSession()->wait(180000, 'jQuery("#updateprogress").length === 0');
  }
    
  
  /*
     * This function detects site's language based on URL. If no URL language is detected
     * the default_language is used.
     */

    public function languageDetection() {
        $current_url = $this->getSession()->getCurrentUrl();
        $base_url = $this->getMinkParameter('base_url');
        $base_url_length = strlen($base_url);
        //$language_code = substr($current_url,$base_url_length,5);
        
        /* Patch for multilingual */
        // Modify as per our requirement to deal with language.        
        $url_parts = parse_url($current_url);
        // There is no locales provided in url then take from default.
        if( empty($url_parts['path']) ) {
            $clean_url_language_code = $this->multilingualContext->multilingual_parameters['default_language'];
        } else {
            $locale_parts = explode('/', $url_parts['path']);
            $clean_url_language_code = $locale_parts[1];
        } 
        /*patch end here*/
        $not_clean_url_language_code = substr($current_url,$base_url_length+3,2);
        if(in_array($clean_url_language_code, $this->multilingualContext->languages_iso_codes)) {
          return $clean_url_language_code;
            
        }
        else if (in_array($not_clean_url_language_code, $this->multilingualContext->languages_iso_codes)){
            return $not_clean_url_language_code;
        }
        else return $this->multilingualContext->multilingual_parameters['default_language'];
    }
    /**
     * This function localizes the targeted string. It tries to find a definition of the provided text (in English)
     * in the translations file that is provided within the profile parameters. If it fails to find translation
     * for the requested language it falls back to English. If the string is not defined at all in the translations
     * file there will be an exception thrown.
     */

    public function localizeTargetInput($target, $input) {
        $translations = $this->multilingualContext->multilingual_parameters['translations'];
        if(isset($this->multilingualContext->translations[$target][$this->multilingualContext->multilingual_parameters['default_language']])){
            $target = $this->multilingualContext->translations[$target][$this->languageDetection()][$input];
            return $target;
        }
        elseif (isset($this->multilingualContext->translations[$target])) {
            return $target;
        }
        else {
          echo "The text '$target'' is not defined in '$translations' translation file.\r\n";
        }
    }

    /**
     * @Then /^(?:|I )should see localized value of taxonomy term "(?P<text>(?:[^"]|\\")*)" in input "([^"]*)" element$/
     *
     */    
    // Here we can check single taxonomy term with input field.
    public function iShouldSeeLocalizedValueOfTaxonomyTermInInputElement($value, $input) {
      $tid = $this->multilingualContext->translations[$value]['id'];
      unset($this->multilingualContext->translations[$value]['id']);
      $exceptionError = array();
      if ($tid) {
        foreach($this->multilingualContext->translations[$value] as $languageKey => $languageValue) {
          $this->getSession()->visit($this->locatePath('/' .$languageKey. '/taxonomy/term/' . $tid . '/edit'));
          $this->getSession()->wait(2000);
          $value = str_replace('_', '-', $value); 
          $valueLoc = $this->localizeTargetInput($value, $input);
          $inputElement = 'edit-' . $input .'-'. $languageKey . '-0-value';
          $exceptionError[] = $this->assertValueInInputElement($valueLoc, $inputElement);
        }
      }
      if ( !empty($exceptionError)) {
        throw new \Exception(sprintf("Error Occured"));
      }
    }

    /**
     * @Then /^(?:|I )should see localized value of vocabulary "(?P<text>(?:[^"]|\\")*)" in input "([^"]*)" element$/
     *
     */  
    // Here we can check the vocabulary.
     public function iShouldSeeLocalizedValueOfVocabularyInInputElement($value, $input) {
      $vocubalary = taxonomy_vocabulary_machine_name_load($value);
      //$taxonomy_tree = taxonomy_get_tree($vocubalary->vid);
      $exceptionError = array();
      $taxonomy_tree = array(
        '0' => (object) array(
          'tid' => '2593',
          'name' => 'Fluke IG'
        ),
        '1' => (object) array(
          'tid' => '2061',
          'name' => 'Products'
        ),
      );
      foreach($taxonomy_tree as $tax_key => $tax_value) {
        $tid = $this->multilingualContext->translations[$tax_value->name]['id'];
        unset($this->multilingualContext->translations[$tax_value->name]['id']);
        foreach($this->multilingualContext->translations[$tax_value->name] as $languageKey => $languageValue) {
          if($tax_value->tid == $tid) {
            $this->getSession()->visit($this->locatePath('/' .$languageKey. '/taxonomy/term/' . $tax_value->tid . '/edit'));
            $this->getSession()->wait(2000);
            $inputValue = str_replace('_', '-', $input); 
            $valueLoc = $this->localizeTargetInput($tax_value->name, $input);
            $inputElement = 'edit-' . $inputValue .'-'. $languageKey . '-0-value';
            $exceptionError[] = $this->assertValueInInputElement($valueLoc, $inputElement, $languageKey);
          }
        }
      }
      if ( !empty($exceptionError)) {
        throw new \Exception(sprintf("Error Occured"));
      }
    }
    /**
     * Returns fixed step argument (with \\" replaced back to ")
     *
     * @param string $argument
     *
     * @return string
     */
    protected function fixStepArgument($argument)
    {
        return str_replace('\\"', '"', $argument);
    }
    
    public function assertValueInInputElement($value, $input, $language) {

        if (substr($input,0,1) != "#") {
            $input = "#" . $input;
        }
        $session = $this->getSession();
        $element = $session->getPage()->find('css', $input);

        if(isset($element)) {
            $text = $element->getValue();
        }
        else {
            echo sprintf("Element is null \r\n");
        }

        if($text === $value) {
            return true;
        }
        else {
          echo sprintf('Value of input : "%s" does not match the text "%s" for language "%s"' . PHP_EOL, $text, $value, $language);
          return 'Error';
        }
    }
   
}