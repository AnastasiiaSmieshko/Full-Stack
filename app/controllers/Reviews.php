<?php
    class Reviews extends Controller {
        public function index($page = 1) {
                $per_page = 4; 
                $page = $page == 1 ? 0 : ($page - 1) * $per_page;
     
                $limit = $page.','.$per_page;
    
                $review = $this->model('ReviewsModel');
    
             
                $pagesForPagination = ceil($review->countReviews() / $per_page);
    
                $data = [
                    
                    'reviews' => $review->getReviewsLimited('id', $limit),
                    'title' => 'Отзывы наших клиентов',
                    'pages' => $pagesForPagination 
                ];
               

                $this->view('reviews/index', $data);
            }
        }



    