<?
namespace application\controllers;
include 'vendor/autoload.php';
use application\core\Controller;


class MainController extends Controller
{

    public function indexAction()
    {
        $this->view->redirect('/admin');
    }

    


    public function opinionAction()
    {
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-3600*8);
                setcookie($name, '', time()-3600*8, '/');
            }
        }

        if(!empty($_GET)){
            $_SESSION['selected_product'] = $_GET['id_product'];
        }

        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        $context = $this->model->renderReviewer($uri, $lang);
        if ($context != 0) {
            $products = $this->model->getProducts($context['reviewer']['id']);
            if(count($products)>1){
               
                $prodvars = $this->model->getProdvars($context['reviewer']['id']);
                $prodlangs = $this->model->getProdsLangs($products);
                $prodvarlangs = $this->model->getProdvarsLangs($prodvars);
                $products = $this->model->changeProdLanguage($products, $prodlangs, $context['lang']);
                $prodvars = $this->model->changeProdvarsLanguage($prodvars, $prodvarlangs, $context['lang']);
                $langs_list = $this->model->getReviewerLangs($context['reviewer']['id']);
                $vars = [
                    'reviewer' => $context['reviewer'],
                    'baseURL' => $context['baseURL'],
                    'products' => $products,
                    'prodvars' => $prodvars,
                    'langs_cut' => $langs_list,
                    'lang' => $context['lang'],

                ];
                if (isset($this->route['lang'])) {
                    $vars += ['route_lang' => $this->route['lang'],];
                    $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
                }else{
                    $vars += ['index_url' => '/'.$this->route['opinion'],];
                }
                $this->view->render($context['design'], $vars, $context['path'] . '/index.php', $context['layout']);
            }else{
                if (isset($this->route['lang'])) {
                    $url = '/'.$uri.'-'.$this->route['lang'].'/form';
                }else{
                    $url = '/'.$uri.'/form';
                }

                $one_var = 1;
                setcookie('one_variation', $one_var);
                $_SESSION['one_variation'] = $one_var;
                setcookie('selected_product', $products[0]['id']);
                $_SESSION['selected_product'] = $products[0]['id'];

                if(isset($_COOKIE['selected_product'])){
                    $_SESSION['selected_product'] = $_COOKIE['selected_product'];
                }
                $this->formAction();
            }
            
        } else {
            $this->view->errorCode(404);
        }
    }

    public function formAction()
    {

        if(!empty($_GET)){
            $_SESSION['selected_product'] = $_GET['id_product'];
        }
        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        if(isset($_COOKIE['selected_product'])){
            $_SESSION['selected_product'] = $_COOKIE['selected_product'];
        }
        $context = $this->model->renderReviewer($uri, $lang);
        $product = $this->model->getProduct($_SESSION['selected_product']);
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $index = $_POST['index'];
            $country = $_POST['country'];
            $phone = $_POST['phone'];
            $number = $_POST['number'];
            $id_gift = $_POST['id_gift'];
            $gift = array(
                'id' => explode("-", $id_gift)[1],
                'type' => explode("-", $id_gift)[0]
            );
            if ($gift['type'] == 'present') {
                $gift_name = $this->model->getPresent($gift['id'])['name'];
            } elseif ($gift['type'] == 'presvar') {
                $gift_name = $this->model->getPresvar($gift['id'])['name'];
            }
            $ip = $this->model->getIp();
            if ($context != 0) {
                $post = [
                    'id_reviewer' => $context['reviewer']['id'],
                    'ip' => $ip,
                    'name' => $name,
                    'mail' => $email,
                    'address' => $address,
                    'city' => $city,
                    'state' => $state,
                    'zip_code' => $index,
                    'country' => $country,
                    'phone' => $phone,
                    'amazon_order' => $number,
                    'gift' => $gift_name,

                ];
                $id_form = $this->model->sendForm($post);
                $this->model->updateReviewerForm($context['reviewer']['id']);
                $sub = "EURODO Ltd";
                $mes = "E-mail: $email\nFull name: $name\nAddress: $address\nCity: $city\nState: $state\nZip code: $index\nCountry: $country\nPhone: $phone\nAmazon order: $number\nGift: $gift_name
                ";
                $send =  mail($context['reviewer']['email'], $sub, $mes, "From: EURODO");
                setcookie('email', $email, time() + 3600, '/');
                setcookie('id_form', $id_form, time() + 3600*8, '/');
                if (isset($this->route['lang'])) {
                    $url = $this->route['opinion'] . '-' . $this->route['lang'];
                } else {
                    $url = $this->route['opinion'];
                }
                if ($product['variate'] == 0) {
                    $url_to = '/' . $url . '/product';
                    $this->view->location($url_to);
                } else {
                    $url_to = '/' . $url . '/variate';
                    $this->view->location($url_to);
                }
            } else {
                $this->view->errorCode(404);
            }
        } else {
            if ($context != 0) {
                $country = $this->model->getCountry($context['reviewer']['id']);

                $products = $this->model->getProducts($context['reviewer']['id']);
                $presents = $this->model->getPresents($context['reviewer']['id']);

                $presvars = $this->model->getPresvars($context['reviewer']['id']);
                $prodvars = $this->model->getProdvars($context['reviewer']['id']);

                $prodlangs = $this->model->getProdsLangs($products);
                $lang_product = $this->model->getProdLangs($product['id'])[0];

                $prodvarlangs = $this->model->getProdvarsLangs($prodvars);

                $preslangs = $this->model->getPresentsLangs($presents);
                $presvarlangs = $this->model->getPresvarsLangs($presvars);

                $presents = $this->model->changePresentLanguage($presents, $preslangs, $context['lang']);
                $presvars = $this->model->changePresvarsLanguage($presvars, $presvarlangs, $context['lang']);
                
                $products = $this->model->changeProdLanguage($products, $prodlangs, $context['lang']);
                $prodvars = $this->model->changeProdvarsLanguage($prodvars, $prodvarlangs, $context['lang']);

                $langs_list = $this->model->getReviewerLangs($context['reviewer']['id']);
                $vars = [
                    'reviewer' => $context['reviewer'],
                    'baseURL' => $context['baseURL'],
                    'products' => $products,
                    'product' => $product,
                    'presents' => $presents,
                    'prodvars' => $prodvars,
                    'presvars' => $presvars,
                    'langs_cut' => $langs_list,
                    'country' => $country,
                    'lang' => $context['lang'],
                    'prod_id' => $_SESSION['selected_product'],

                ];
                if(isset($lang_product)){
                    $vars += ['lang_product' =>  $lang_product,];
                }
                if (isset($this->route['lang'])) {
                    $vars += ['route_lang' => $this->route['lang'],];
                    $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
                }else{
                    $vars += ['index_url' => '/'.$this->route['opinion'],];
                }
                $this->view->render($context['design'], $vars, $context['path'].'/form.php', $context['layout']);
            } else {
                $this->view->errorCode(404);
            }
        }
    }

    public function productAction()
    {
        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        $context = $this->model->renderReviewer($uri, $lang);
        
        if ($context != 0) {
            $marcetplace = $this->model->oneMarcetplace($context['reviewer']['id'])[0];
            if(isset($_SESSION['selected_prodvar'])){
                $product = $this->model->getProdvar($_SESSION['selected_prodvar']);
            }else{
                $product = $this->model->getProduct($_SESSION['selected_product']);
            }
            
            $vars = [
                'baseURL' => $context['baseURL'],
                'marketplace_link' => $marcetplace['link'],
                'product' => $product,
            ];


            if (isset($this->route['lang'])) {
                $vars += ['route_lang' => $this->route['lang'],];
                $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
            }else{
                $vars += ['index_url' => '/'.$this->route['opinion'],];
            }
            $this->view->render($context['design'], $vars, $context['path'] . '/product.php', $context['layout']);
        }
    }

    public function variateAction()
    {

        if(!empty($_GET)){
            $_SESSION['selected_prodvar'] = $_GET['id_prodvar'];
        }


        $product = $this->model->getProduct($_SESSION['selected_product']);
        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        $context = $this->model->renderReviewer($uri, $lang);
        if ($context != 0) {
            $prodvars = $this->model->getProdvars($context['reviewer']['id']);
            foreach($prodvars as $index=>$prodvar){
                if($prodvar['parent_ASIN']!=$product['asin']){
                    unset($prodvars[$index]);
                }
            }
            $prodvars = array_values($prodvars);
            $prodvarlangs = $this->model->getProdvarsLangs($prodvars);
            $prodvars = $this->model->changeProdvarsLanguage($prodvars, $prodvarlangs, $context['lang']);
            $vars = [
                'reviewer' => $context['reviewer'],
                'baseURL' => $context['baseURL'],
                'prodvars' => $prodvars,
            ];
            if (isset($this->route['lang'])) {
                $vars += ['route_lang' => $this->route['lang'],];
                $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
            }else{
                $vars += ['index_url' => '/'.$this->route['opinion'],];
            }
            $this->view->render($context['design'], $vars, $context['path'] . '/variations.php', $context['layout']);
        } else {
            $this->view->errorCode(404);
        }
    }


    public function reviewAction()
    {
        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        $context = $this->model->renderReviewer($uri, $lang);
        if ($context != 0) {
            if(!empty($_POST || !empty($_FILES))){
                $ip = $this->model->getIp();
                if(isset($_SESSION['selected_prodvar'])){
                    $asin = $this->model->getProdvar($_SESSION['selected_prodvar'])['asin'];
                }else{
                    $asin = $this->model->getProduct($_SESSION['selected_product'])['asin'];
                }
                $star = $this->route['star'];
                $form = $this->model->getForm($_COOKIE['id_form']);
                $sub = "EURODO Ltd";
                //low reit
                if($this->route['star']>=1 && $this->route['star']<=3){
                    $review = $_POST['low_review'];
                    
                    $message = $this->model->getMessage($context['lang']);
                    $img = NULL;
                   
                    $send =  mail($form['mail'],$sub,$message['message'],"From: EURODO");

                    $post = [
                        'id_reviewer' => $context['reviewer']['id'],
                        'id_form' => $_COOKIE['id_form'],
                        'ip' => $ip,
                        'asin' => $asin,
                        'star' => $star,
                        'mail' => $_COOKIE['email'],
                        'review' => $review,
                        'lang' => $context['lang'],
                        'img' => NULL,
                        'link' => NULL,
                    ];
                    $this->model->sendReview($post, $img);
                    $this->model->updateReviewerReviews($context['reviewer']['id']);
                    
                    $mes = "E-mail: ".$form['mail']."\nReview: $review\nRating: $star
                        ";  

                    //High reit
                }elseif($this->route['star']===4 || $this->route['star']===5){
                    if(isset($_POST['link'])){
                        $img = NULL;
                        $link_text = $_POST['link'];
                    }elseif(isset($_FILES)){
                        $link_text=NULL;
                        switch(explode('/', $_FILES['file']['type'])[1]){
                            case 'jpg': 
                                $img = file_get_contents($_FILES['file']['tmp_name']);
                                break;
                            case 'png': 
                                $img = file_get_contents($_FILES['file']['tmp_name']);
                                break;
                            case 'jpeg': 
                                $img = file_get_contents($_FILES['file']['tmp_name']);
                                break;
                            default:
                                $img = NULL;
                                break;
                        }
                    }

                    

                    $post = [
                        'id_reviewer' => $context['reviewer']['id'],
                        'id_form' => $_COOKIE['id_form'],
                        'ip' => $ip,
                        'asin' => $asin,
                        'star' => $star,
                        'mail' => $_COOKIE['email'],
                        'review' => 'null',
                        'lang' => $context['lang'],
                        'img' => $img,
                        'link' => $link_text,
                    ];

                    $review = $this->model->sendReview($post, $img);
                    $message = $this->model->getMessage($context['lang']);
                    mail($form['mail'],$sub,$message['message'],"From: EURODO");
                    $this->model->updateReviewerReviews($context['reviewer']['id']);
                    if(isset($img)){
                        $image_link = "https://eazymatcha.com/admin/fetch_image/$review";
                    }else{
                        $image_link = $link_text;
                    }
                    $mes =  "E-mail: ".$form['mail']."\nRating: ".$star."\nImage: $image_link
                    "; 
                }
                if (isset($this->route['lang'])) {
                    $url = $this->route['opinion'] . '-' . $this->route['lang'];
                } else {
                    $url = $this->route['opinion'];
                }

                $url_to = '/' . $url . '/thanks/'.$star;
                
                

                $send = mail($context['reviewer']['email'], $sub, $mes,"From: EURODO");
                
                $this->view->location($url_to);
               }else{

                $prodvars = $this->model->getProdvars($context['reviewer']['id']);
                $vars = [
                    'reviewer' => $context['reviewer'],
                    'baseURL' => $context['baseURL'],
                    'prodvars' => $prodvars,
                    'stars' => $this->route['star'],
                ];
                if (isset($this->route['lang'])) {
                    $vars += ['route_lang' => $this->route['lang'],];
                    $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
                }else{
                    $vars += ['index_url' => '/'.$this->route['opinion'],];
                }
                if($this->route['star']>=1 && $this->route['star']<=3){
                    $this->view->render($context['design'], $vars, $context['path'] . '/low_reit.php', $context['layout']);
                }elseif($this->route['star']===4 || $this->route['star']===5){
                    $this->view->render($context['design'], $vars, $context['path'] . '/hight_reit.php', $context['layout']);
                }
               }
        } else {
            $this->view->errorCode(404);
        }

       
    }

    public function thanksAction()
    {
        $uri = $this->route['opinion'];
        if(isset($this->route['lang'])){
            $lang = $this->route['lang'];
        }else{
            $lang = NULL;
        }
        $context = $this->model->renderReviewer($uri, $lang);
        if ($context != 0) {
            $vars = [
                'reviewer' => $context['reviewer'],
                'baseURL' => $context['baseURL'],
                'stars' => $this->route['star'],
            ];
            if (isset($this->route['lang'])) {
                $vars += ['route_lang' => $this->route['lang'],];
                $vars += ['index_url' => '/'.$this->route['opinion'].'-'.$this->route['lang'],];
            }else{
                $vars += ['index_url' => '/'.$this->route['opinion'],];
            }
            if($this->route['star']>=1 && $this->route['star']<=3){
                $this->view->render($context['design'], $vars, $context['path'] . '/low_sended.php', $context['layout']);
            }elseif($this->route['star']===4 || $this->route['star']===5){
                $this->view->render($context['design'], $vars, $context['path'] . '/hight_sended.php', $context['layout']);
            }
        }
    }
}
