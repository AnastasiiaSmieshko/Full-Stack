<?php
require 'DB.php';

class ReviewsModel {
 
    private $name;
    private $trip;
    private $review;
   
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData( $name, $trip, $review ) {
      
        $this->name = $name;
        $this->trip = $trip;
        $this->review = $review;
        
    }
        // проверка формы
    public function validForm() {
        
    
        if(strlen($this->name) < 3)
            return "Введите Имя";
        else if(strlen($this->trip) < 3)
            return "Введите название тура";
        else if(strlen($this->review)<10)
            return 'Введите Ваш отзыв';
        else
            return "Верно";
       
    }
    
        //Добавить отзыв в б/д
    public function addReview(){
       
        $sql = 'INSERT INTO reviews (name, trip, review) VALUES(:name, :trip, :review) ';
        $query = $this->_db->prepare($sql);
        $query->execute(['name' => $this->name, 'trip' => $this->trip, 'review' => $this->review]);
    }
        // вывод из б/д
    public function getReview($id) {
        $result = $this->_db->query("SELECT * FROM `reviews` ORDER BY $id DESC");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countReviews() {
        $result = $this->_db->query("SELECT `id` FROM `reviews`");
        return count($result->fetchAll(PDO::FETCH_ASSOC));
    }

    public function getReviewsLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `reviews` ORDER BY $order DESC LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
}