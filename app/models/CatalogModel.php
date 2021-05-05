<?php
require 'DB.php';

class CatalogModel {
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }
    public function countTrips() {
        $result = $this->_db->query("SELECT `id` FROM `trips`");
        return count($result->fetchAll(PDO::FETCH_ASSOC));
    }

    public function getTrips() {
        $result = $this->_db->query("SELECT * FROM `trips` ORDER BY `id` LIMIT 3");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTripsLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `trips` ORDER BY $order DESC LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTripsCounrty($part_of_the_world) {
        $result = $this->_db->query("SELECT * FROM `trips` WHERE `world_part` = '$part_of_the_world' ORDER BY `id` DESC");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneTrip($id) {
        $result = $this->_db->query("SELECT * FROM `trips` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getTripCart($items) {
        $result = $this->_db->query("SELECT * FROM `trips` WHERE `id` IN ($items)");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}