<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\base\Module;
use app\models\User as User;

/**
 * Class AuthController
 * Three additional public properties can be used in any view file as variables with corresponding names, i.e. $user etc.
 * This variables are also available in any other classes, such as layouts, models etc. as static properties
 * @package app\controllers
 */

class AuthController extends Controller
{
    public static $user = null;
    public static $isAuth = false;
    public static $isAdmin = false;

    public function __construct(string $id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        self::$user = new User;
        self::$isAuth = !Yii::$app->user->isGuest;
        self::$isAdmin = self::$user->getAuth()->hasRole(\Yii::$app->user->id,"Admin");
    }

    /**
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render($view, $params = []){
        $params = array_merge($params,[
            'user' => self::$user,
            'isAuth' => self::$isAuth,
            'isAdmin' => self::$isAdmin
        ]);
        return parent::render($view,$params);
    }

}