<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['igcommerce.ankur-dev'] = array(
    'uri' => 'ankur-dev-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1bbe07ec0c3f496a971cef9ef3817585@dbserver.ankur-dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:19930/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur-dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'ankur-dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.erik-test'] = array(
    'uri' => 'erik-test-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8396d8caf5be45a7bac860f24293212b@dbserver.erik-test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:20718/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.erik-test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'erik-test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.aj-behat'] = array(
    'uri' => 'aj-behat-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a42bb17cb6f248dd8f9fa62c72ffbff7@dbserver.aj-behat.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:10559/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.aj-behat.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'aj-behat.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.testreplace'] = array(
    'uri' => 'testreplace-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5ac7f85e9c4540c9925e1bac03b880e0@dbserver.testreplace.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:15769/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.testreplace.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'testreplace.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.solrpublish'] = array(
    'uri' => 'solrpublish-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:cf6ba949800449fd950eb2c8dbb287e0@dbserver.solrpublish.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:28423/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'solrpublish.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.dev'] = array(
    'uri' => 'dev-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4ba54b78264e4714af4e349ab3cf1e03@dbserver.dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:15501/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'dev.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.ajay-ig'] = array(
    'uri' => 'ajay-ig-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:709e1b745467446991726b263530a4b9@dbserver.ajay-ig.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:14725/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay-ig.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'ajay-ig.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.test'] = array(
    'uri' => 'test-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b53f291955ec4eef9de18ece0d4c59ed@dbserver.test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:10910/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'test.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.anisha'] = array(
    'uri' => 'anisha-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a998fbfb5a0049e09ff81e83be3f5961@dbserver.anisha.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:15873/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anisha.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'anisha.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw1783'] = array(
    'uri' => 'fw1783-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e1b89c2a57394f6b97b13e195e723153@dbserver.fw1783.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:25860/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw1783.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw1783.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.devbkp16mar'] = array(
    'uri' => 'devbkp16mar-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1cc92672cd6243279842e8b58bcc8387@dbserver.devbkp16mar.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:19135/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.devbkp16mar.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'devbkp16mar.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.toc'] = array(
    'uri' => 'toc-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a19645befc534e23b261323651c9a667@dbserver.toc.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:22987/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.toc.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'toc.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.theme'] = array(
    'uri' => 'theme-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1255e7ec534d41ceb39442daf6106e7d@dbserver.theme.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:12955/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.theme.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'theme.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.pomona'] = array(
    'uri' => 'pomona-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:160240412ba8465d955865f557c5c140@dbserver.pomona.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:17892/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pomona.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'pomona.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.libbypromo'] = array(
    'uri' => 'libbypromo-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:401bade9dd804ca7aa898e04ddef2585@dbserver.libbypromo.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:19733/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.libbypromo.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'libbypromo.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-testing'] = array(
    'uri' => 'jon-testing-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:23e3f66b1d734511b6fc5503ea0af3d9@dbserver.jon-testing.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:11058/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-testing.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-testing.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-webcard'] = array(
    'uri' => 'jon-webcard-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:86e7867211994964a4891360f8084ea6@dbserver.jon-webcard.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:21090/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-webcard.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-webcard.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw1766'] = array(
    'uri' => 'fw1766-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:c5ffc5e2737e455ca62bebe72e12c130@dbserver.fw1766.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:25972/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw1766.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw1766.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.syncmanuals'] = array(
    'uri' => 'syncmanuals-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ba66a59714224d29b58b224e93109629@dbserver.syncmanuals.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:20761/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'syncmanuals.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-sitemap'] = array(
    'uri' => 'jon-sitemap-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e5ea54929dd744d4ae4bb10c272b2148@dbserver.jon-sitemap.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:12913/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-sitemap.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-sitemap.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.live'] = array(
    'uri' => 'live-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ef73aa10f68d4d23ab7b1fa7e6f6c187@dbserver.live.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:13895/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'live.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw1790'] = array(
    'uri' => 'fw1790-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7b93e03a286c405bbd6cbe96329a8bcf@dbserver.fw1790.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in:20042/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw1790.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw1790.d6b80a3c-1bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.live'] = array(
    'uri' => 'inside.fluke.com',
    'db-url' => 'mysql://pantheon:5976372b6590462099852b18d2b92424@dbserver.live.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in:12498/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in',
    'remote-user' => 'live.bc6c8abf-838d-43db-ab3d-134f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.test'] = array(
    'uri' => 'test-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4d6b633ad00744e98a913655bf6c4d02@dbserver.test.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in:10571/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in',
    'remote-user' => 'test.bc6c8abf-838d-43db-ab3d-134f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.dev'] = array(
    'uri' => 'dev-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:38bdccc33cf44384aef36978269c9eff@dbserver.dev.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in:11659/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in',
    'remote-user' => 'dev.bc6c8abf-838d-43db-ab3d-134f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.login'] = array(
    'uri' => 'login-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:bff2c5333c264fdebede122da9bc55f3@dbserver.login.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in:19856/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.login.bc6c8abf-838d-43db-ab3d-134f538fee64.drush.in',
    'remote-user' => 'login.bc6c8abf-838d-43db-ab3d-134f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.anshul-live'] = array(
    'uri' => 'anshul-live-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7239b4793eff4dc383012e062536d261@dbserver.anshul-live.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:26946/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-live.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'anshul-live.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.dev'] = array(
    'uri' => 'dev-beha.pantheon.io',
    'db-url' => 'mysql://pantheon:afbb0d61a30e4d16b666e313487af6f6@dbserver.dev.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:13718/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'dev.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.php7'] = array(
    'uri' => 'php7-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:498e4e93f8ac41ecab254dd18592b19e@dbserver.php7.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:16977/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.php7.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'php7.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.pantheoncse'] = array(
    'uri' => 'pantheoncse-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:d7d75809029e4dc3b05cf515623c648c@dbserver.pantheoncse.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:20179/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pantheoncse.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'pantheoncse.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.fixproduct'] = array(
    'uri' => 'fixproduct-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8f75bd65b55f4936b2171bee68c9985d@dbserver.fixproduct.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:22026/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fixproduct.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'fixproduct.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.test'] = array(
    'uri' => 'test-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:abbb9bffdf8e4f16acbe20d4f37d5a4e@dbserver.test.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:12636/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'test.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.live'] = array(
    'uri' => 'beha-amprobe.de',
    'db-url' => 'mysql://pantheon:80b969d85d0d4ba6805a0124bf408ef2@dbserver.live.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:10723/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'live.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.toddstest'] = array(
    'uri' => 'toddstest-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8b3e1b2c5b7843bbbc4fd0b02091b16d@dbserver.toddstest.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in:20441/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.toddstest.56977d1d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'toddstest.56977d1d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.solrpublish'] = array(
    'uri' => 'solrpublish-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:3fed60c7b51f4fc8866d10bc44b0217d@dbserver.solrpublish.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:18951/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'solrpublish.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.urlbuilder'] = array(
    'uri' => 'urlbuilder-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:18d6af029f8e48448f8b0dc08e4e9b4e@dbserver.urlbuilder.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:29969/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.urlbuilder.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'urlbuilder.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.daniel'] = array(
    'uri' => 'daniel-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:3902625f1d994090925120ba66663e20@dbserver.daniel.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:15044/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.daniel.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'daniel.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ryan'] = array(
    'uri' => 'ryan-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:19ff0ee50aa44a57b02c93a19f825d49@dbserver.ryan.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:11300/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ryan.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'ryan.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.anisha'] = array(
    'uri' => 'anisha-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:eb73d3d136d443d59cea5c3332d3d80e@dbserver.anisha.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:18509/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anisha.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'anisha.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.lasbrey-s3'] = array(
    'uri' => 'lasbrey-s3-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1ab61a99683b436a8ff9225376f88466@dbserver.lasbrey-s3.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:12987/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.lasbrey-s3.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'lasbrey-s3.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ankur'] = array(
    'uri' => 'ankur-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:48f05662ce444f2a99a526c47c053437@dbserver.ankur.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:19584/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'ankur.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.fnet'] = array(
    'uri' => 'fnet-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:55d35a3d04f946c08b368e0665b0a752@dbserver.fnet.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:22463/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fnet.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'fnet.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ajay'] = array(
    'uri' => 'ajay-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e039c1419adf405198054b0c5ea29a6e@dbserver.ajay.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:26941/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'ajay.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.jon-sitemap'] = array(
    'uri' => 'jon-sitemap-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5415885aba0b4cfe9edc8a3b24610257@dbserver.jon-sitemap.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:25129/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-sitemap.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'jon-sitemap.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.dev'] = array(
    'uri' => 'dev-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:104edc9e1ac948e986c9a0904b42434e@dbserver.dev.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:15799/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'dev.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.anshul-live'] = array(
    'uri' => 'anshul-live-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4b106463c4a14212b64822d45cb99d35@dbserver.anshul-live.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:18962/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-live.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'anshul-live.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.syncmanuals'] = array(
    'uri' => 'syncmanuals-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a9cf7995bb1442959e2b3805267c5d48@dbserver.syncmanuals.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:22317/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'syncmanuals.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.live'] = array(
    'uri' => 'live-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ff4f7da901f94a3295bf48add92f55eb@dbserver.live.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:17687/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'live.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.erin'] = array(
    'uri' => 'erin-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:f07ffa8e16da418dac1797f0ed78ec8a@dbserver.erin.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:13719/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.erin.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'erin.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.test'] = array(
    'uri' => 'test-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:77b87d45994c47fa897dcf2361ad7ec3@dbserver.test.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:16586/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'test.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.devbkp16mar'] = array(
    'uri' => 'devbkp16mar-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:68578c0500714ff38c2af3514a04b806@dbserver.devbkp16mar.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in:10716/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.devbkp16mar.ccf660c6-40a4-4619-a14e-3c624b1322e4.drush.in',
    'remote-user' => 'devbkp16mar.ccf660c6-40a4-4619-a14e-3c624b1322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.s3'] = array(
    'uri' => 's3-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5eb80d5c10b546d9a945f58b04654614@dbserver.s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:18252/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 's3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.testreplace'] = array(
    'uri' => 'testreplace-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:45e2983dadfe49bab525a76f5db5676e@dbserver.testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:26331/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.solrpublish'] = array(
    'uri' => 'solrpublish-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:6bdd773f91304e46a5202c331703f685@dbserver.solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:10568/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.syncmanuals'] = array(
    'uri' => 'syncmanuals-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ad1fd0eef13b4a498bbd7a4da93d42d0@dbserver.syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:20646/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.ajay-dam'] = array(
    'uri' => 'ajay-dam-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8dbc1015ab734c6fb5ea43e6a3fd1c1b@dbserver.ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:12463/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.ankur'] = array(
    'uri' => 'ankur-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fa1c4edca974428ca2d3272e424a2e24@dbserver.ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:25201/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.test'] = array(
    'uri' => 'test-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:da6db73f69454a10b577e7268bcc80bb@dbserver.test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:10554/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.eod'] = array(
    'uri' => 'eod-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2e7dfe579cae4ff6ace2b9f844a797e7@dbserver.eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:16218/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.lasbrey-s3'] = array(
    'uri' => 'lasbrey-s3-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:09b07ecadd6d4c5d8fc13969df68d24e@dbserver.lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:12813/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.jon-testing'] = array(
    'uri' => 'jon-testing-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:49af9454ae0b4339a0938bbb5592dbda@dbserver.jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:22165/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.live'] = array(
    'uri' => 'data.fluke.com',
    'db-url' => 'mysql://pantheon:8a7d6c29e65f4496ab5ab004c3b9dee6@dbserver.live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:16753/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.anshul-dev'] = array(
    'uri' => 'anshul-dev-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e7958e532df44c52a2e1d653bf9dd8a2@dbserver.anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:14622/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.dev'] = array(
    'uri' => 'dev-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ce853a297293468f9d3fce8f4ba4718c@dbserver.dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:14826/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
