<?
namespace application\controllers;

include 'vendor/autoload.php';


use application\core\Controller;




class AdminController extends Controller
{


    public function stocksAction()
    {

        $_SESSION = array();

        $reviewers = $this->model->getReviewers($this->session->user['email']);
        $marcetplaces = $this->model->getMarcetplace();
        foreach ($reviewers as $key => $review) {
            foreach ($marcetplaces as $marcetplace) {
                if ($review['id_marketplace'] == $marcetplace['id']) {
                    $marcetplaces_cut[$key] = $marcetplace['marcetplace_cut'];
                }
            }
        }

        for ($i = 0; $i < count($reviewers); $i++) {
            $reviewers[$i]['id_marketplace'] = $marcetplaces_cut[$i];
        }
        $vars = [
            'session' => $this->session,
            'reviewers' => $reviewers,
            'marcetplaces' => $marcetplaces,
        ];
        $this->view->render('Акции', $vars);
    }


    public function loginAction()
    {


        $this->auth->clear();


        // Setup the user's session and generate a ULP URL:

        $loginUrl = $this->auth->login($this->ENV['AUTH0_BASE_URL'] . 'admin/callback');
        header("Location: " . $loginUrl);
        exit;
    }
    public function callbackAction()
    {
        define('ROUTE_URL_INDEX', rtrim($this->ENV['AUTH0_BASE_URL'], '/'));
        define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
        define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
        define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');

        if (!empty($_GET)) {
            $this->auth->exchange(ROUTE_URL_CALLBACK);
            header("Location: " . ROUTE_URL_INDEX);
            exit;
        }
    }

    public function logoutAction()
    {
        define('ROUTE_URL_INDEX', rtrim($this->ENV['AUTH0_BASE_URL'], '/'));
        define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
        define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
        define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');

        // Setup the user's session and generate a ULP URL:
        $logoutUrl = $this->auth->logout(ROUTE_URL_INDEX);

        // Finally, redirect the user to the Auth0 Universal Login Page.
        header("Location: " . $logoutUrl);
        exit;
    }


    public function deleteAction()
    {
        if (!empty($_GET)) {
            $opinion = $_GET['opinion'];
            $reviewer = $this->model->getReviewer($opinion)[0];
            if ($this->session->user['email'] === $reviewer['user_mail']) {
                $this->model->DeleteReviewer($opinion);
            }
            $this->view->message('Сообщение', "Отзывник удален");
        }
    }


    public function change_statusAction()
    {
        if (!empty($_GET)) {
            $status = $_GET['on'];
            $opinion = $_GET['opinion'];
            $reviewer = $this->model->getReviewer($opinion)[0];
            $this->model->changeStatus($opinion, $status);
        }
    }



    public function step1Action()
    {

        if (!empty($_POST)) {
            header('Content-type: text/html; charset=windows-1251');
            $domain =  filter_var(trim($_POST['domain']), FILTER_SANITIZE_STRING);
            $email =  filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
            $marketplace =  filter_var(trim($_POST['marketplace']), FILTER_SANITIZE_STRING);
            $opinion =  filter_var(trim($_POST['opinion']), FILTER_SANITIZE_STRING);
            $not_empty = 0;

            foreach (array_count_values($_POST['ASIN']) as $key => $val) {
                if ($val > 1) $this->view->asinErr($key);
            }

            if(!empty(array_diff($_POST['present_ASIN'], array('')))){
                foreach (array_count_values(array_diff($_POST['present_ASIN'],  array(''))) as $key => $val) {
                    if ($val > 1) $this->view->asinErr($key);
                }
            }

            

            $finded_opinion = $this->model->step1Validate($_POST);
            

            if ($finded_opinion) {
                $_SESSION['domain'] = $domain;
                $_SESSION['marketplace'] = $marketplace;
                $_SESSION['opinion'] = $opinion;
                $_SESSION['email'] = $email;





                if (!$this->model->hasVariations($_SESSION['products']) && !$this->model->hasVariations($_SESSION['presents'])) {
                    $present_variations = array();
                    $product_variations = array();
                    $_SESSION['present_variations'] = $present_variations;
                    $_SESSION['product_variations'] = $product_variations;


                    $this->view->location('admin/step3');
                } else {
                    $_SESSION['present_variations'] = array();
                    $_SESSION['product_variations'] = array();
                    $this->view->location('admin/step2');
                }
            } else {
                $this->view->opinionErr('Такая ссылка уже существует');
            }
        } else {
            $domains = $this->model->getDomains();
            $marcetplaces = $this->model->getMarcetplace();
            $vars = [
                'marcetplaces' => $marcetplaces,
                'domains' => $domains,
                'session' => $this->session,
            ];

            if (isset(
                $_SESSION['domain'],
                $_SESSION['marketplace'],
                $_SESSION['opinion'],
                $_SESSION['email']
            )) {
                $vars += [
                    'sess_domain' => $_SESSION['domain'],
                    'marketplace' => $_SESSION['marketplace'],
                    'opinion' => $_SESSION['opinion'],
                    'email' => $_SESSION['email'],
                ];
            }
            

            $this->view->render('step1', $vars);
        }
    }
    public function editAction()
    {

        if (!empty($_POST)) {
            header('Content-type: text/html; charset=windows-1251');
            $domain =  filter_var(trim($_POST['domain']), FILTER_SANITIZE_STRING);
            $email =  filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
            $marketplace =  filter_var(trim($_POST['marketplace']), FILTER_SANITIZE_STRING);
            $opinion =  filter_var(trim($_POST['opinion']), FILTER_SANITIZE_STRING);
            foreach (array_count_values($_POST['ASIN']) as $key => $val) {
                if ($val > 1) $this->view->asinErr($key);
            }

            $finded_opinion = $this->model->step1Validate($_POST);

            if ($finded_opinion) {
                $_SESSION['domain'] = $domain;
                $_SESSION['marketplace'] = $marketplace;
                $_SESSION['opinion'] = $opinion;
                $_SESSION['email'] = $email;




                if (!$this->model->hasVariations($_SESSION['products']) && !$this->model->hasVariations($_SESSION['presents'])) {
                    $present_variations = array();
                    $product_variations = array();
                    $_SESSION['present_variations'] = $present_variations;
                    $_SESSION['product_variations'] = $product_variations;


                    $this->view->location('admin/step3');
                } else {
                    $_SESSION['present_variations'] = array();
                    $_SESSION['product_variations'] = array();
                    $this->view->location('admin/step2');
                }
            } else {
                $this->view->message('Ошибка', 'Такая ссылка уже существует');
            }
        } else {
            if (isset($this->route['opinion'])) {
                $opinion = $this->route['opinion'];
                $reviewer = $this->model->getReviewer($opinion)[0];
                $domain = $this->model->getDomain($reviewer['id_domain'])[0]['d_name'];
                $opinion = $reviewer['opinion'];
                $products = $this->model->getProducts($reviewer['id']);
                $presents = $this->model->getPresents($reviewer['id']);
                $marcetplace = $this->model->oneMarcetplace($reviewer['id'])[0];
                $marcetplaces = $this->model->getMarcetplace();
                $_SESSION['edit'] = 1;
                $_SESSION['opinion'] = $opinion;
            }

            $domains = $this->model->getDomains();
            $vars = [
                'marcetplaces' => $marcetplaces,
                'domains' => $domains,
                'session' => $this->session,

            ];
            $vars += [
                'sess_domain' => $domain,
                'marketplace' => $marcetplace['marcetplace_cut'],
                'opinion' => $opinion,
                'email' => $reviewer['user_mail'],
            ];

            if (!isset($_SESSION['products'])) {
                $vars += ['products' => $products,];
            }
            if (!isset($_SESSION['presents'])) {
                $vars += ['presents' => $presents,];
            }
            if (isset(
                $_SESSION['domain'],
                $_SESSION['marketplace'],
                $_SESSION['opinion'],
                $_SESSION['email']
            )) {
                $vars += [
                    'sess_domain' => $_SESSION['domain'],
                    'marketplace' => $_SESSION['marketplace'],
                    'opinion' => $_SESSION['opinion'],
                    'email' => $_SESSION['email'],
                ];
            }
            $this->view->render('step1', $vars);
        }
    }

    public function step2Action()
    {

        if (!empty($_POST)) {


            $present_ASINS = array();
            $product_ASINS = array();
            if(isset($_POST['ASIN'])){
                foreach ($_POST['ASIN'] as $key => $val) {
                    foreach($_POST['ASIN'][$key] as $key2=>$val){
                        array_push($product_ASINS, $_POST['ASIN'][$key][$key2]);
                    }
                }
            }
            if(isset($_POST['present_ASIN'])){
                foreach ($_POST['present_ASIN'] as $key => $val) {
                    foreach($_POST['present_ASIN'][$key] as $key2=>$val){
                        array_push($present_ASINS, $_POST['present_ASIN'][$key][$key2]);
                    }
                }
            }
            
            if(!empty(array_diff($present_ASINS, array('')))){
                foreach (array_count_values(array_diff($present_ASINS,  array(''))) as $key => $val) {
                    if ($val > 1) $this->view->asinErr($key);
                }
            }

            if(!empty(array_diff($product_ASINS, array('')))){
                foreach (array_count_values(array_diff($product_ASINS,  array(''))) as $key => $val) {
                    if ($val > 1) $this->view->asinErr($key);
                }
            }

            $this->model->step2Validate($_POST);
            $this->view->location('admin/step3');
        }

        
        $variate = 0;
        if (isset($_SESSION['products'], $_SESSION['presents'])) {
            $products = $_SESSION['products'];
            $presents = $_SESSION['presents'];
            $opinion = $_SESSION['opinion'];
        }
        if (isset($_SESSION['edit'])) {
            $reviewer = $this->model->getReviewer($_SESSION['opinion'])[0];
            $product_variations = $this->model->getProdvars($reviewer['id']);
            $present_variations = $this->model->getPresvars($reviewer['id']);
        }


        $vars = [
            'session' => $this->session,
            'products' =>  $products,
            'presents' =>  $presents,
            'opinion' =>  $opinion,
        ];
        if (isset($present_variations)) {
            $vars += [
                'present_variations' => $present_variations,
            ];
        }
        if (isset($product_variations)) {
            $vars += [
                'product_variations' => $product_variations,
            ];
        }
        $this->view->render('step2', $vars);
    }

    public function step3Action()
    {

        if(!empty($_POST)){
            $_SESSION['input'] = $_POST['input'];
            $this->view->location('admin/step4');
        }

        if ($_SESSION['opinion'] == "opinion" || !isset($_SESSION['opinion'])) {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $opinion = substr(str_shuffle($permitted_chars), 0, 10);
        } else {
            $opinion = $_SESSION['opinion'];
        }

        if (isset($_SESSION['domain'])) {
            $domain =  $_SESSION['domain'];
        } else {
            $domain = 'eazymatcha.com';
        }

        $opinion_link = $domain . '/' . $opinion;
        $output_front = "/static/images/flyers/out/" . $domain . $opinion . "-front.png";
        $output_back = "/static/images/flyers/out/" . $domain . $opinion . "-back.png";


        $qr_code = (new \chillerlan\QRCode\QRCode)->render($opinion_link, 'static/images/flyers/out/' . $domain . $opinion . '.png');
        $qr_path = '/static/images/flyers/out/' . $domain . $opinion . '.png';
        $designes = $this->model->getDesignes();

        foreach ($designes as $design) {
            $flyers[$design['id']] = array(
                'front' => '/static/images/flyers/front/' . $design['name_design'],
                'back' => '/static/images/flyers/back/' . $design['name_design']
            );
        }


        $designes = $this->model->getDesignes();
        $reviewer = $this->model->getReviewer($_SESSION['opinion']);
        if (!empty($reviewer)) {
            $reviewer = $reviewer[0];
        }

        $vars = [
            'designes' => $designes,
            'session' => $this->session,
            'reviewer' => $reviewer,
            'output_front' => $output_front,
            'output_back' => $output_back,
            'qr_code' => $qr_code,
            'qr_path' => $qr_path,

        ];
        $this->view->render('step3', $vars);
    }

    public function step4Action()
    {
        if (!empty($_POST)) {
            if (isset($_POST['checked'])) {
                $checked = $_POST['checked'];
            } else {
                $checked = false;
            }
            if (isset($_SESSION['products']) && isset($_SESSION['opinion'])) {

                $design = $_POST['design'];
                $input = $_SESSION['input'];
                $email = $this->session->user['email'];
                $post_email = $_SESSION['email'];
                $time = date("Y-m-d H:i:s");
                $products = $_SESSION['products'];
                $presents = $_SESSION['presents'];
                $presents_variations = $_SESSION['present_variations'];
                $products_variations = $_SESSION['product_variations'];
                $domain = $_SESSION['domain'];
                $marcetplace = $_SESSION['marketplace'];
                $opinion = $_SESSION['opinion'];
                $id_status = 1;
                $review_link = $domain . '/' . $opinion;
                if (isset($_SESSION['edit'])) {
                    $edit = $_SESSION['edit'];
                }

                //Удаление qr кода и вкладышей
                $output_front = "/static/images/flyers/out/" . $domain . $opinion . "-front.jpg";
                $output_back = "/static/images/flyers/out/" . $domain . $opinion . "-back.jpg";
                $qr = '/static/images/flyers/out/' . $domain . $opinion . '.png';

                if (file_exists($output_back)) {
                    unlink($output_back);
                }
                if (file_exists($output_front)) {
                    unlink($output_front);
                }
                if (file_exists($qr)) {
                    unlink($qr);
                }

                if (isset($edit)) {

                    $id_reviewer = $this->model->getReviewer($opinion)[0]['id'];
                    $old_products = $this->model->getProducts($id_reviewer);
                    $old_presents = $this->model->getPresents($id_reviewer);
                    $old_prodvars = $this->model->getProdvars($id_reviewer);
                    $old_presvars = $this->model->getPresvars($id_reviewer);
                    $id_products = array();
                    $id_presents = array();
                    $id_prodvars = array();
                    $id_presvars = array();

                    //Просто изменение, если не добавлялись новые товары, подарки и вариации
                    //Изменение всех продуктов
                    if (count($old_products) == count($products)) {
                        for ($i = 0; $i < count($products); $i++) {
                            $prod_values = "`name` = '" . $products['product.' . $i]['name'] . "', `asin` = '" . $products['product.' . $i]['ASIN'] . "', `img` = '" . $products['product.' . $i]['img'] . "', `variate` = '" . $products['product.' . $i]['variate'] . "'";
                            $this->model->updateReviewer('products', $prod_values, $old_products[$i]['id']);
                        }
                    }
                    //Изменение всех подарков
                    if (count($old_presents) == count($presents)) {
                        for ($i = 0; $i < count($presents); $i++) {
                            $pres_values = "`name` = '" . $presents['present.' . $i]['name'] . "', `asin` = '" . $presents['present.' . $i]['ASIN'] . "', `img` = '" . $presents['present.' . $i]['img'] . "', `variate` = '" . $presents['present.' . $i]['variate'] . "'";

                            $this->model->updateReviewer('presents', $pres_values, $old_presents[$i]['id']);
                        }
                    }
                    //изменение вариаций товаров
                    if (isset($products_variations)) {
                        if (count($old_prodvars) == count($products_variations)) {
                            for ($i = 0; $i < count($products_variations); $i++) {
                                $values = "`asin` = '" . $products_variations['product_var.' . $i]['ASIN'] . "', `img`= '" . $products_variations['product_var.' . $i]['img'] . "', `color` = '" . $products_variations['product_var.' . $i]['color'] . "', `weight`= '" . $products_variations['product_var.' . $i]['weight'] . "', `name` = '" . $products_variations['product_var.' . $i]['name'] . "', `size` = '" . $products_variations['product_var.' . $i]['size'] . "', `parent_ASIN` = '" . $products_variations['product_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('products_variations', $values, $old_prodvars[$i]['id']);
                            }
                        }
                    }
                    //изменение вариаций подарков
                    if (isset($presents_variations)) {
                        if (count($old_presvars) == count($presents_variations)) {
                            for ($i = 0; $i < count($presents_variations); $i++) {
                                $values = "`asin` = '" . $presents_variations['present_var.' . $i]['ASIN'] . "', `img`= '" . $presents_variations['present_var.' . $i]['img'] . "', `color` = '" . $presents_variations['present_var.' . $i]['color'] . "', `weight`= '" . $presents_variations['present_var.' . $i]['weight'] . "', `name` = '" . $presents_variations['present_var.' . $i]['name'] . "', `size` = '" . $presents_variations['present_var.' . $i]['size'] . "', `parent_ASIN` = '" . $presents_variations['present_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('presents_variations', $values, $old_presvars[$i]['id']);
                            }
                        }
                    }

                    //Удаление лишних товаров, подарков и вариаций
                    //Товары
                    if (count($old_products) > count($products)) {
                        for ($i = 0; $i < count($products); $i++) {
                            $prod_values = "`name` = '" . $products['product.' . $i]['name'] . "', `asin` = '" . $products['product.' . $i]['ASIN'] . "', `img` = '" . $products['product.' . $i]['img'] . "', `variate` = '" . $products['product.' . $i]['variate'] . "'";
                            $this->model->updateReviewer('products', $prod_values, $old_products[$i]['id']);
                        }
                        $dif = count($old_products) - count($products);
                        for ($i = count($old_products) - 1; $i >= (count($old_products) - $dif); $i--) {
                            $this->model->deleteProd('products', $old_products[$i]['id']);
                        }
                    }
                    //Подарки
                    if (count($old_presents) > count($presents)) {
                        for ($i = 0; $i < count($presents); $i++) {
                            $pres_values = "`name` = '" . $presents['present.' . $i]['name'] . "', `asin` = '" . $presents['present.' . $i]['ASIN'] . "', `img` = '" . $presents['present.' . $i]['img'] . "', `variate` = '" . $presents['present.' . $i]['variate'] . "'";
                            $this->model->updateReviewer('presents', $pres_values, $old_presents[$i]['id']);
                        }
                        $dif = count($old_presents) - count($presents);
                        for ($i = count($old_presents) - 1; $i >= (count($old_presents) - $dif); $i--) {
                            $this->model->deleteProd('presents', $old_presents[$i]['id']);
                        }
                    }
                    //Вариации товаров
                    if (isset($products_variations)) {
                        if (count($old_prodvars) > count($products_variations)) {
                            for ($i = 0; $i < count($products_variations); $i++) {
                                $values = "`asin` = '" . $products_variations['product_var.' . $i]['ASIN'] . "', `img`= '" . $products_variations['product_var.' . $i]['img'] . "', `color` = '" . $products_variations['product_var.' . $i]['color'] . "', `weight`= '" . $products_variations['product_var.' . $i]['weight'] . "', `name` = '" . $products_variations['product_var.' . $i]['name'] . "', `size` = '" . $products_variations['product_var.' . $i]['size'] . "', `parent_ASIN` = '" . $products_variations['product_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('products_variations', $values, $old_prodvars[$i]['id']);
                            }
                            $dif = count($old_prodvars) - count($products_variations);
                            for ($i = count($old_prodvars) - 1; $i >= (count($old_prodvars) - $dif); $i--) {
                                $this->model->deleteProd('products_variations', $old_prodvars[$i]['id']);
                            }
                        }
                    } else {
                        for ($i = count($old_prodvars); $i >= 0; $i--) {
                            $this->model->deleteProd('products_variations', $old_prodvars[$i]['id']);
                        }
                    }
                    //Вариации подарков
                    if (isset($presents_variations)) {
                        if (count($old_presvars) > count($presents_variations)) {
                            for ($i = 0; $i < count($presents_variations); $i++) {
                                $values = "`asin` = '" . $presents_variations['present_var.' . $i]['ASIN'] . "', `img`= '" . $presents_variations['present_var.' . $i]['img'] . "', `color` = '" . $presents_variations['present_var.' . $i]['color'] . "', `weight`= '" . $presents_variations['present_var.' . $i]['weight'] . "', `name` = '" . $presents_variations['present_var.' . $i]['name'] . "', `size` = '" . $presents_variations['present_var.' . $i]['size'] . "', `parent_ASIN` = '" . $presents_variations['present_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('presents_variations', $values, $old_presvars[$i]['id']);
                            }
                            $dif = count($old_presvars) - count($presents_variations);
                            for ($i = count($old_presvars) - 1; $i >= (count($old_presvars) - $dif); $i--) {
                                $this->model->deleteProd('presents_variations', $old_presvars[$i]['id']);
                            }
                        }
                    } else {
                        for ($i = count($old_presvars); $i >= 0; $i--) {
                            $this->model->deleteProd('presents_variations', $old_presvars[$i]['id']);
                        }
                    }
                    //Добавление новых товаров если старых меньше
                    //Товары
                    if (count($old_products) < count($products)) {
                        for ($i = 0; $i < count($old_products); $i++) {
                            $values = "`name` = '" . $products['product.' . $i]['name'] . "', `asin` = '" . $products['product.' . $i]['ASIN'] . "', `img` = '" . $products['product.' . $i]['img'] . "', `variate` = '" . $products['product.' . $i]['variate'] . "'";
                            $this->model->updateReviewer('products', $values, $old_products[$i]['id']);
                        }
                        $dif = count($products) - count($old_products);
                        for ($i = count($products) - 1; $i >= (count($products) - $dif); $i--) {
                            $keys = "`id_review`, `name`, `asin`, `img`, `variate`";
                            $values = "'" . $id_reviewer . "', '" . $products['product.' . $i]['name'] . "', '" . $products['product.' . $i]['ASIN'] . "', '" . $products['product.' . $i]['img'] . "', '" . $products['product.' . $i]['variate'] . "'";
                            $id_products[] = $this->model->insertProd('products', $keys, $values);
                        }
                        foreach ($id_products as $id) {
                            $this->model->createLangs('products', 'product', $id, $id_reviewer);
                        }
                    }
                    //Подарки
                    if (count($old_presents) < count($presents)) {
                        for ($i = 0; $i < count($old_presents); $i++) {
                            $values = "`name` = '" . $presents['present.' . $i]['name'] . "', `asin` = '" . $presents['present.' . $i]['ASIN'] . "', `img` = '" . $presents['present.' . $i]['img'] . "', `variate` = '" . $presents['present.' . $i]['variate'] . "'";
                            $this->model->updateReviewer('products', $values, $old_presents[$i]['id']);
                        }
                        $dif = count($presents) - count($old_presents);
                        for ($i = count($presents) - 1; $i >= (count($presents) - $dif); $i--) {
                            $keys = "`id_review`, `name`, `asin`, `img`, `variate`";
                            $values = "'" . $id_reviewer . "', '" . $presents['present.' . $i]['name'] . "', '" . $presents['present.' . $i]['ASIN'] . "', '" . $presents['present.' . $i]['img'] . "', '" . $presents['present.' . $i]['variate'] . "'";
                            $id_presents[] = $this->model->insertProd('presents', $keys, $values);
                        }
                        foreach ($id_presents as $id) {
                            $this->model->createLangs('presents', 'present', $id, $id_reviewer);
                        }
                    }
                    //Вариации товаров
                    if (isset($products_variations)) {
                        if (count($old_prodvars) < count($products_variations)) {
                            for ($i = 0; $i < count($old_prodvars); $i++) {
                                $values = "`asin` = '" . $products_variations['product_var.' . $i]['ASIN'] . "', `img`= '" . $products_variations['product_var.' . $i]['img'] . "', `color` = '" . $products_variations['product_var.' . $i]['color'] . "', `weight`= '" . $products_variations['product_var.' . $i]['weight'] . "', `name` = '" . $products_variations['product_var.' . $i]['name'] . "', `size` = '" . $products_variations['product_var.' . $i]['size'] . "', `parent_ASIN` = '" . $products_variations['product_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('products_variations', $values, $old_prodvars[$i]['id']);
                            }
                            $dif = count($products_variations) - count($old_prodvars);
                            for ($i = count($products_variations) - 1; $i >= (count($products_variations) - $dif); $i--) {
                                $keys = "`id_review`, `asin`, `img`, `color`, `weight`, `name`, `size`, `parent_ASIN`";
                                $values = "'" . $id_reviewer . "', '" . $products_variations['product_var.' . $i]['ASIN'] . "', '" . $products_variations['product_var.' . $i]['img'] . "', '" . $products_variations['product_var.' . $i]['color'] . "', '" . $products_variations['product_var.' . $i]['weight'] . "', '" . $products_variations['product_var.' . $i]['name'] . "', '" . $products_variations['product_var.' . $i]['size'] . "', '" . $products_variations['product_var.' . $i]['parent_ASIN'] . "'";
                                $id_prodvars[] = $this->model->insertProd('products_variations', $keys, $values);
                            }
                            foreach ($id_prodvars as $id) {
                                $this->model->createLangs('prodvars', 'prodvar', $id, $id_reviewer);
                            }
                        }
                    }
                    //Вариации подарков
                    if (isset($presents_variations)) {
                        if (count($old_presvars) < count($presents_variations)) {
                            for ($i = 0; $i < count($old_presvars); $i++) {
                                $values = "`asin` = '" . $presents_variations['present_var.' . $i]['ASIN'] . "', `img`= '" . $presents_variations['present_var.' . $i]['img'] . "', `color` = '" . $presents_variations['present_var.' . $i]['color'] . "', `weight`= '" . $presents_variations['present_var.' . $i]['weight'] . "', `name` = '" . $presents_variations['present_var.' . $i]['name'] . "', `size` = '" . $presents_variations['present_var.' . $i]['size'] . "', `parent_ASIN` = '" . $presents_variations['present_var.' . $i]['parent_ASIN'] . "'";
                                $this->model->updateReviewer('products_variations', $values, $old_presvars[$i]['id']);
                            }
                            $dif = count($presents_variations) - count($old_presvars);
                            for ($i = count($presents_variations) - 1; $i >= (count($presents_variations) - $dif); $i--) {
                                $keys = "`id_review`, `asin`, `img`, `color`, `weight`, `name`, `size`, `parent_ASIN`";
                                $values = "'" . $id_reviewer . "', '" . $presents_variations['present_var.' . $i]['ASIN'] . "', '" . $presents_variations['present_var.' . $i]['img'] . "', '" . $presents_variations['present_var.' . $i]['color'] . "', '" . $presents_variations['present_var.' . $i]['weight'] . "', '" . $presents_variations['present_var.' . $i]['name'] . "', '" . $presents_variations['present_var.' . $i]['size'] . "', '" . $presents_variations['present_var.' . $i]['parent_ASIN'] . "'";
                                $id_presvars[] = $this->model->insertProd('presents_variations', $keys, $values);
                            }
                            foreach ($id_presvars as $id) {
                                $this->model->createLangs('presvars', 'presvar', $id, $id_reviewer);
                            }
                        }
                    }

                    // Обновление данных отзовника
                    $id_domain = $this->model->getId('domains', 'd_name', $domain);
                    $id_marketplace = $this->model->getId('marcetplace', 'marcetplace_cut', $marcetplace);
                    $id_design = $this->model->getId('design', 'name_design', $design);
                    $id_input = $this->model->getId('design', 'name_design', $input);
                    $reviewer_val = "`user_mail`='" . $email . "', `id_design`='" . $id_design . "', `email`='" . $post_email . "', `id_domain`='" . $id_domain . "', `review_link`='" . $review_link . "',`opinion`='" . $opinion . "', `id_marketplace`='" . $id_marketplace . "', `id_status`='" . $id_status . "', `id_input`=".$id_input."'";
                    $this->model->updateReviewer('reviewer', $reviewer_val, $id_reviewer);
                } else {
                    $id_domain = $this->model->getId('domains', 'd_name', $domain);
                    $id_marketplace = $this->model->getId('marcetplace', 'marcetplace_cut', $marcetplace);
                    $id_design = $this->model->getId('design', 'name_design', $design);
                    $values = [
                        'email' => $email,
                        'id_design' => $id_design,
                        'post_email' => $post_email,
                        'id_domain' => $id_domain,
                        'review_link' => $review_link,
                        'opinion' => $opinion,
                        'id_marketplace' => $id_marketplace,
                        'id_status' => $id_status
                    ];
                    $id_reviewer = $this->model->createReviewer($values);


                    $id_products = $this->model->sendReq($products, 'products', $id_reviewer);
                    $id_presents = $this->model->sendReq($presents, 'presents', $id_reviewer);


                    if (isset($products_variations)) {
                        $id_product_vars = $this->model->sendReq($products_variations, 'products_variations', $id_reviewer);
                    }
                    if (isset($presents_variations)) {
                        $id_present_vars = $this->model->sendReq($presents_variations, 'presents_variations', $id_reviewer);
                    }


                    foreach ($id_presents as $id) {
                        $this->model->createLangs('presents', 'present', $id, $id_reviewer);
                    }
                    foreach ($id_products as $id) {
                        $this->model->createLangs('products', 'product', $id, $id_reviewer);
                    }
                    if (isset($id_present_vars)) {
                        foreach ($id_present_vars as $id) {
                            $this->model->createLangs('presvars', 'presvar', $id, $id_reviewer);
                        }
                    }
                    if (isset($id_product_vars)) {
                        foreach ($id_product_vars as $id) {
                            $this->model->createLangs('prodvars', 'prodvar', $id, $id_reviewer);
                        }
                    }
                }

                if ($checked) {
                    $this->view->location('admin/step1_langs');
                } else {
                    $this->view->location('admin');
                }
            }
        }
        $designes = $this->model->getDesignes();
        $reviewer = $this->model->getReviewer($_SESSION['opinion']);
        if (!empty($reviewer)) {
            $reviewer = $reviewer[0];
        }
        $vars = [
            'designes' => $designes,
            'session' => $this->session,
            'reviewer' => $reviewer,
            // 'products' =>  $products,
            // 'presents' =>  $presents,
            // 'opinion' =>  $opinion,
        ];
        $this->view->render('step4', $vars);
    }

    public function step1_langsAction()
    {


        if (!empty($_POST)) {

            if (isset($_POST['name1'], $_POST['lang'])) {
                if (isset($_POST['lang'])) {
                    $langs = $_POST['lang'];
                }
                $main_lang =  $_POST['name1'];

                $products = $_SESSION['products'];
                $presents = $_SESSION['presents'];
                $products_variations = $_SESSION['product_variations'];
                $presents_variations = $_SESSION['present_variations'];


                $opinion = $_SESSION['opinion'];

                $reviewer = $this->model->getReviewer($opinion)[0];
                $this->model->updateLangReveiwer($reviewer['id'], $main_lang);


                foreach ($products as $product) {
                    $products_query[] = $this->model->getProductsForLang($product['ASIN'], $reviewer['id']);
                }
                foreach ($presents as $present) {
                    $presents_query[] = $this->model->getPresentsForLang($present['ASIN'], $reviewer['id']);
                }
                foreach ($products_variations as $prodvar) {
                    $prodvars_query[] = $this->model->getProdvarsForLang($prodvar['ASIN'], $reviewer['id']);
                }
                foreach ($presents_variations as $presvar) {
                    $presvars_query[] = $this->model->getPresvarsForLang($presvar['ASIN'], $reviewer['id']);
                }
                foreach ($products_query as $product) {
                    $this->model->updateMainLang('langs_products', 'product', $main_lang, $product['name'], $product['id']);
                }
                foreach ($presents_query as $present) {
                    $this->model->updateMainLang('langs_presents', 'present', $main_lang, $present['name'], $present['id']);
                }
                if (isset($presvars_query)) {
                    foreach ($presvars_query as $presvar) {
                        $this->model->updateVarsLang('langs_presvars', 'presvar', $main_lang, $presvar['weight'], $presvar['name'], $presvar['size'], $presvar['id']);
                    }
                }
                if (isset($prodvars_query)) {
                    foreach ($prodvars_query as $prodvar) {
                        $this->model->updateVarsLang('langs_prodvars', 'prodvar', $main_lang, $prodvar['weight'], $prodvar['name'], $prodvar['size'], $prodvar['id']);
                    }
                }


                if (!in_array($main_lang, $langs)) {
                    $langs[] = $main_lang;
                }

                foreach ($langs as $lang) {
                    switch ($lang) {
                        case 'ru':
                            $lang_names[] = 'Русский';
                            break;
                        case 'en':
                            $lang_names[] = 'Английский';
                            break;
                        case 'es':
                            $lang_names[] = 'Испанский';
                            break;
                        case 'de':
                            $lang_names[] = 'Немецкий';
                            break;
                        case 'it':
                            $lang_names[] = 'Итальянский';
                            break;
                        case 'fr':
                            $lang_names[] = 'Французский';
                            break;
                    }
                }

                for ($i = 0; $i < count($langs); $i++) {
                    $langs_arr[$i] = array(
                        'lang_name' => $lang_names[$i],
                        'lang_cut' => $langs[$i]
                    );
                    $langs_cut[$i] = $langs[$i];
                }
                $_SESSION['langs_cut'] = $langs_cut;
                $_SESSION['langs_arr'] = $langs_arr;
                $_SESSION['main_lang'] = $main_lang;
                $this->view->location('admin/step2_langs');
            } else {
                $this->view->message('Ошибка', 'Язык не выбран');
            }
        }

        $opinion = $_SESSION['opinion'];

        $reviewer = $this->model->getReviewer($opinion)[0];
        $id_domain = $reviewer['id_domain'];
        $domain = $this->model->getDomain($id_domain)[0];
        $langs = $this->model->getProdLangsReviewer($reviewer['id'])[0];
        foreach (array_keys($langs, "") as $key) {
            unset($langs[$key]);
        }

        for ($i = 3; $i < count($langs); $i++) {
            $langs_cut[explode("_", array_keys($langs,)[$i])[1]] = explode("_", array_keys($langs,)[$i])[1];
        }
        if(!empty($reviewer['lang'])){
            $default_lang = $reviewer['lang'];
        }
        if(isset($_SESSION['langs_cut'])){
            $langs_cut = array_flip($_SESSION['langs_cut']);
        }
        if(isset($_SESSION['default_lang'])){
            $default_lang = $_SESSION['default_lang'];
        }

        $vars = [
            'session' => $this->session,
            'domain' => $domain,
            'reviewer' => $reviewer,
            'langs_cut' => $langs_cut,
            'default_lang' => $default_lang
        ];

        $this->view->render('step1_langs', $vars);
    }


    public function step2_langsAction()
    {

        if (!empty($_POST)) {
            if ($_POST['selected_lang'] != "") {
                $opinion = $_SESSION['opinion'];
                $lang = $_POST['selected_lang'];

                $reviewer = $this->model->getReviewer($opinion)[0];
                $id_presents = $this->model->getId('langs_presents', 'id_reviewer', $reviewer['id']);
                $id_products = $this->model->getId('langs_products', 'id_reviewer', $reviewer['id']);
                $id_presvars = $this->model->getId('langs_presvars', 'id_reviewer', $reviewer['id']);
                $id_prodvars = $this->model->getId('langs_prodvars', 'id_reviewer', $reviewer['id']);

                if(isset($_POST['prod_id'])){
                    $k=0;
                    foreach($_POST['prod_id'] as $key=>$var){
                        for($j=0;$j<count($_POST['prod_id'][$key]);$j++){
                            $products[$k]=array(
                                "id" => $this->model->getProp2('prod_id', $key, $j),
                                "name" => $this->model->getProp2('prod_name', $key, $j),
                            );
                            $k++;
                        }
                    }
                }
                if(isset($_POST['present_id'])){
                    $k=0;
                    foreach($_POST['present_id'] as $key=>$var){
                        for($j=0;$j<count($_POST['present_id'][$key]);$j++){
                            $presents[$k]=array(
                                "id" => $this->model->getProp2('present_id', $key, $j),
                                "name" => $this->model->getProp2('present_name', $key, $j),
                            );
                            $k++;
                        }
                    }
                }


                if(isset($_POST['prodvar_id'])){
                    $k=0;
                    foreach($_POST['prodvar_id'] as $key=>$var){
                        for($j=0;$j<count($_POST['prodvar_id'][$key]);$j++){
                            $prodvars[$k]=array(
                                "id" => $this->model->getProp2('prodvar_id', $key, $j),
                                "color" => $this->model->getProp2('prodvar_color', $key, $j),
                                "weight" => $this->model->getProp2('prodvar_weight', $key, $j),
                                "name" => $this->model->getProp2('prodvar_name', $key, $j),
                                "size" => $this->model->getProp2('prodvar_size', $key, $j),
                            );
                            $k++;
                        }
                    }
                }
                if(isset($_POST['presvar_id'])){
                    $k=0;
                    foreach($_POST['presvar_id'] as $key=>$var){
                        for($j=0;$j<count($_POST['presvar_id'][$key]);$j++){
                            $presvars[$k]=array(
                                "id" => $this->model->getProp2('presvar_id', $key, $j),
                                "color" => $this->model->getProp2('presvar_color', $key, $j),
                                "weight" => $this->model->getProp2('presvar_weight', $key, $j),
                                "name" => $this->model->getProp2('presvar_name', $key, $j),
                                "size" => $this->model->getProp2('presvar_size', $key, $j),
                            );
                            $k++;
                        }
                    }
                }

                foreach ($products as $product) {
                    $this->model->updateMainLang('langs_products', 'product', $lang, $product['name'], $product['id']);
                }
                foreach ($presents as $present) {
                    $this->model->updateMainLang('langs_presents', 'present', $lang, $present['name'], $present['id']);
                }
                if (isset($presvars)) {
                    foreach ($presvars as $presvar) {
                        $this->model->updateVarsLang('langs_presvars', 'presvar', $lang, $presvar['weight'], $presvar['name'], $presvar['size'], $presvar['id']);
                    }
                }
                if (isset($prodvars)) {
                    foreach ($prodvars as $prodvar) {
                        $this->model->updateVarsLang('langs_prodvars', 'prodvar', $lang, $prodvar['weight'], $prodvar['name'], $prodvar['size'], $prodvar['id']);
                    }
                }


                if($lang==$_SESSION['main_lang']){
                    foreach ($products as $product) {
                        $this->model->UpdateMain('products', $product['name'], $product['id']);
                    }
                    foreach ($presents as $present) {
                        $this->model->UpdateMain('presents', $present['name'], $present['id']);
                    }
                    if (isset($presvars)) {
                        foreach ($presvars as $presvar) {
                            $this->model->updateVars('presents_variations', $presvar['weight'], $presvar['name'], $presvar['size'], $presvar['id']);
                        }
                    }
                    if (isset($prodvars)) {
                        foreach ($prodvars as $prodvar) {
                            $this->model->updateVars('products_variations', $prodvar['weight'], $prodvar['name'], $prodvar['size'], $prodvar['id']);
                        }
                    }
                }





                if ($_POST['role'] == 'save') {
                    header('Location: /admin/step2_langs');
                } elseif ($_POST['role'] == 'save_next') {
                    header('Location: /admin');
                }
            }
        }

        if(isset($_SESSION['langs_arr'])){
            $langs_arr = $_SESSION['langs_arr'];
        }
        $opinion = $_SESSION['opinion'];
        $reviewer = $this->model->getReviewer($opinion)[0];
        $id_domain = $reviewer['id_domain'];
        $domain = $this->model->get('domains', 'id', $id_domain);

        $products = $this->model->getProducts($reviewer['id']);
        $presents = $this->model->getPresents($reviewer['id']);
        $product_variations = $this->model->getProdvars($reviewer['id']);
        $present_variations = $this->model->getPresvars($reviewer['id']);

        $products_langs = $this->model->getLangsProd($reviewer['id']);
        $prodvars_langs = $this->model->getLangsProdvars($reviewer['id']);
        $presents_langs = $this->model->getLangsPresents($reviewer['id']);
        $presvars_langs = $this->model->getLangsPresvars($reviewer['id']);


        $link = $domain['d_name'] . '/' . $opinion;

        $vars = [
            'session' => $this->session,
            'products' => $products,
            'presents' => $presents,
            'product_variations' => $product_variations,
            'present_variations' => $present_variations,
            'products_langs' => $products_langs,
            'prodvars_langs' => $prodvars_langs,
            'presents_langs' => $presents_langs,
            'presvars_langs' => $presvars_langs,
            'link' => $link,
            'langs_arr' => $langs_arr,
        ];
        $this->view->render('step2_langs', $vars);
    }

    public function domainAction(){

        if(!empty($_POST)){
            $domain = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
            $to = "support@eurodo.es";
            $sub = 'Запрос на прикрепление домена';
            $message = "Имя домена: $domain \nПочта: $mail";
            $from = "EURODO";

            mail($to, $sub, $message, "From: $from");

            $this->view->location('admin/done');
        }

        $vars = [
            'session' =>  $this->session,
        ];
        $this->view->render('domain', $vars);
    }
    public function doneAction(){

        $vars = [
            'session' =>  $this->session,
        ];
        $this->view->render('domain', $vars);
    }


    public function archiveAction(){

        $opinion = $this->route['opinion'];
        $reviewer = $this->model->getReviewer($opinion)[0];
        
        $reviews = $this->model->getReviews($reviewer['id']); 
        $forms = $this->model->getForms($reviewer['id']);

        $form_query = array();

        foreach($forms as $form){
            $i = count($reviews);
            foreach($reviews as $review){
                if($review['id_form'] == $form['id'] ){
                        $query = [
                            'form' => $form,
                            'archive' => $review['archive'],
                            // 'img' => $review['img'],
                            'review_id' => $review['id'],
                            'asin' => $review['asin'],
                            'link' => $review['link'],
                            'star' => $review['star'],
                            'review' => $review['review'],
                            'created_at' => $review['created_at'],
                        ];
                        array_push($form_query, $query);
                }else{
                    $i--;
                }
            }
            if($i==0){
                $query = [
                    'form' => $form,
                    'asin' => $review['asin'],
                    'archive' => $form['archive'],
                    'star' => 'Нет оценки',
                    'review' => 'Нет отзыва',
                    'created_at' => $form['created_at']
                ];  
                array_push($form_query, $query);
            }
        }

        $in = 0;
        $out = 0;
        foreach($form_query as $form){
            if($form['archive']==1){
                $in++;
            }else{
                $out++;
            }
        }

        $vars = [

            'session' =>  $this->session,
            'reviewer' => $reviewer,
            'form_query' => $form_query,
            'in' => $in,
            'out' => $out,
            'forms' => $forms

        ];
        $this->view->render('domain', $vars);
    }
    public function tableAction(){

        $opinion = $this->route['opinion'];
        $reviewer = $this->model->getReviewer($opinion)[0];
        
        $reviews = $this->model->getReviews($reviewer['id']); 
        $forms = $this->model->getForms($reviewer['id']);

        $form_query = array();

        

        foreach($forms as $form){
            $i = count($reviews);
            foreach($reviews as $review){
                if($review['id_form'] == $form['id'] ){
                        $query = [
                            'form' => $form,
                            'archive' => $review['archive'],
                            'img' => $review['img'],
                            'review_id' => $review['id'],
                            'asin' => $review['asin'],
                            'link' => $review['link'],
                            'star' => $review['star'],
                            'review' => $review['review'],
                            'created_at' => $review['created_at'],
                        ];
                        array_push($form_query, $query);
                }else{
                    $i--;
                }
            }
            if($i==0){
                $query = [
                    'form' => $form,
                    'asin' => $review['asin'],
                    'archive' => $form['archive'],
                    'star' => 'Нет оценки',
                    'review' => 'Нет отзыва',
                    'created_at' => $form['created_at']
                ];  
                array_push($form_query, $query);
            }
        }

        $in = 0;
        $out = 0;
        foreach($form_query as $form){
            if($form['archive']==1){
                $in++;
            }else{
                $out++;
            }
        }

        $vars = [

            'session' =>  $this->session,
            'reviewer' => $reviewer,
            'form_query' => $form_query,
            'in' => $in,
            'out' => $out,
            'forms' => $forms

        ];
        $this->view->render('domain', $vars);
    }
    public function fetch_imageAction(){

        $id = $this->route['id'];
        $review = $this->model->getReviewsOnId($id)[0];

        $vars = [

            'session' =>  $this->session,
            'review' => $review,

        ];
        $this->view->render('fetch_image', $vars, '', 'application/views/layouts/empty.php');
    }
    public function to_archiveAction(){

        $key = $this->route['key'];
        $id = $this->route['id'];
        if($key == 'review'){
            $this->model->reviewToArchive($id);
        }elseif($key == 'form'){
            $this->model->formToArchive($id);
        }
        $opinion =  $this->route['opinion'];
        $this->view->redirect("/admin/table/$opinion");
    }
}
