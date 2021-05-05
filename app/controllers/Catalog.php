<?php
    class Catalog extends Controller {
        public function index($page = 1) {
            $per_page = 3; 
            $page = $page == 1 ? 0 : ($page - 1) * $per_page;

           
            $limit = $page.','.$per_page;

            $trips = $this->model('CatalogModel');

         
            $pagesForPagination = ceil($trips->countTrips() / $per_page);

            $data = [
                
                'trips' => $trips->getTripsLimited('id', $limit),
                'title' => 'Все туры на сайте',
                'pages' => $pagesForPagination 
            ];
            $this->view('catalog/index', $data);
        }
    

        public function usa() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('usa'), 'title' => ' США'];
            $this->view('catalog/index', $data);
            
        }
        public function australia() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('australia'), 'title' => 'Австралия'];
            $this->view('catalog/index', $data);
        }
        
        public function africa() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('africa'), 'title' => 'Африка'];
            $this->view('catalog/index', $data);
        }
        public function ausia() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('ausia'), 'title' => 'Азия'];
            $this->view('catalog/index', $data);
        }

        public function europe() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('europe'), 'title' => 'Европа'];
            $this->view('catalog/index', $data);
        }
        
        public function canada() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('canada'), 'title' => 'Канада'];
            $this->view('catalog/index', $data);
        }
        public function america_latina() {
            $trips = $this->model('CatalogModel');
            $data = ['trips' => $trips->getTripsCounrty('america_latina'), 'title' => ' Латинская Америка'];
            $this->view('catalog/index', $data);
        }
    }
    

    