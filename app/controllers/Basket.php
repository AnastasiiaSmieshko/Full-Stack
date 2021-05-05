<?php
    class Basket extends Controller {
        public function index() {
            if(isset($_POST['item_id_delete'])) {
               
                $cart = $this->model('BasketModel');
        
                $cart->deleteOneFromSession($_POST['item_id_delete']);
            }

            if(isset($_POST['delete_all'])) {
                
                $cart = $this->model('BasketModel');
                 $cart->deleteSession();
            }

            $data = [];
            $cart = $this->model('BasketModel');
            if(isset($_POST['item_id']))
                $cart->addToCart($_POST['item_id']);

            if(!$cart->isSetSession())
                $data['empty'] = 'Пустая корзина';
            else {
                $trips = $this->model('CatalogModel');
                $data['trips'] = $trips->getTripCart($cart->getSession());
            }

            $this->view('basket/index', $data);
        }
        
    }