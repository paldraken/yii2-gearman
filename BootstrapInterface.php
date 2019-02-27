<?php
namespace paldraken\yii2\gearman;

interface BootstrapInterface
{
    public function run(Application $application);
}
