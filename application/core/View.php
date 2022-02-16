<? 
namespace application\core;

class View{
        
    public $path;
    public $route;
    public $layout = 'default';


    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render ($title, $vars=[], $path='', $layout=''){
        extract($vars);
        if(empty($path)){
            $path = 'application/views/'.$this->path.'.php';
        }
        if(empty($layout)){
            $layout = 'application/views/layouts/'.$this->layout.'.php';
        }
        
        if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require $layout;
        }else{
            echo 'Вид не найден: '.$this->path;
        }
    }

    public function redirect($url){
        header('location: '.$url);
        exit;
    }

    public static function errorCode($code) {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

    public function message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url) {
		exit(json_encode(['url' => $url]));
	}
	public function opinionErr($opinion) {
		exit(json_encode(['opinion' => $opinion]));
	}
	public function asinErr($asin) {
		exit(json_encode(['asin' => $asin]));
	}
}