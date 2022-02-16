<? 

namespace application\core;


use application\core\View;

abstract class Controller{
        
    
    public $route;
    public $view;
    public $auth;
    public $ENV;
    public $session;


    public function __construct($route)
    {

        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadmodel($route['controller']);
        
        $ENV = require 'application/config/env_config.php';

        $this->ENV = $ENV;
        // Create a configuration object for the Auth0 PHP SDK:
        $auth0Configuration = new \Auth0\SDK\Configuration\SdkConfiguration(
            domain: $ENV['AUTH0_DOMAIN'],
            clientId: $ENV['AUTH0_CLIENT_ID'],
            clientSecret: $ENV['AUTH0_CLIENT_SECRET'],
            cookieSecret: $ENV['AUTH0_COOKIE_SECRET']
        );

        // Now instantiate the Auth0 class with the above configuration:
        $this->auth = new \Auth0\SDK\Auth0($auth0Configuration);

        $this->session = $this->auth->getCredentials();
    }

    public function loadmodel($name){
        $path='application\models\\'.ucfirst($name);
        if(class_exists($path)){
            return new $path();
        }

    }
}