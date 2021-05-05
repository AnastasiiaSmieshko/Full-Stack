<?php
class Review extends Controller {
        public function index() {
// добавление и вывод ссылок
            $data = [];
            if(isset($_POST['review'])) {
                $review  = $this->model('ReviewsModel');
                $review ->setData($_POST['name'], $_POST['trip'], $_POST['review']);

                $isValid = $review ->validForm();
                    if($isValid == "Верно")
                $review ->addReview();
                    else
              $data['message'] = $isValid;
            }

         $this->view('review/index', $data);

         }
    }
