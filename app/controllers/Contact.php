<?php
    class Contact extends Controller {
        public function index() {
            $data = [];
            if(isset($_POST['name'])) {
                $mail = $this->model('ContactForm');
                $mail->setData($_POST['name'], $_POST['email'], $_POST['age'], $_POST['message']);

                $isValid = $mail->validForm();
                if($isValid == "Верно")
                    $data['message'] = $mail->send();
                else
                    $data['message'] = $isValid;
            }

            $this->view('contact/index', $data);
        }

        public function about($param = '') {
            $data = ['param' => $param];
            $this->view('contact/about', $data);
        }

        public function reviews(){
            
            $this->view('contact/reviews');
        }

        
    }