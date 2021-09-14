<?php
    namespace App\Controllers;
    use Core\Controller;
    use Core\Router;
    use Core\Session;

    
    class CartController extends Controller {
        
        public function __construct($controller, $action){
            parent::__construct($controller, $action);
            $this->view->setLayout('default');
        }

        public function index(){
            $products = Session::exists('products') ? Session::get('products') : [];
            if(count($products) < 1) Router::redirect('');
            $data['products'] = $products;
            $totalQuantity = 0;
            foreach($products as $product){
                $totalQuantity += intval($product['productQuantity']);
            }
            $data['totalQuantity'] = $totalQuantity;
            $this->view->render('cart/index', $data);
        }


    }