<?php
namespace nullref\user;


use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * @author    Dmytro Karpovych
 * @copyright 2018 NRE
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        /** @var Module $module */
        if ((($module = $app->getModule('user')) == null) || !($module instanceof Module)) {
            return;
        };

        //@TODO implement bootstraping
    }
}
