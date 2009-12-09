<?php

/*
 * Include Symfony
 */
require_once ##SYMFONY_CORE_AUTOLOAD##;
sfCoreAutoload::register();

/*
 * Include Diem
 */
require_once ##DIEM_CORE_STARTER##;
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      // add plugins you want to enable here
    ));

    $this->setWebDir(##DIEM_WEB_DIR##);
  }
  
}