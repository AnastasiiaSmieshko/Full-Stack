<?php
    class Trip extends Controller {
        public function index($id) {
            $trip = $this->model('CatalogModel');
            $this->view('trip/index', $trip->getOneTrip($id));
        }
    }