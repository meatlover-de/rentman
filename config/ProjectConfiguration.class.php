<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

set_include_path('/private/var/root/PEAR/' . get_include_path());

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineActAsSignablePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfJQueryUIPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
