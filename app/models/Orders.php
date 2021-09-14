<?php
    namespace App\Models;
    use Core\Model;
    //use App\Models\Users;

    class Orders extends Model {

        private $table = "Orders";
        public function __construct()
        {
            parent::__construct($this->table);
        }

        public function getTotalOrders()
        {
            $query = $this->_db->query("SELECT * FROM {$this->table}", []);
            if($query->num_rows() < 1){
                return 0;
            }

            $orders = count($query->results());

            return $orders;
        }


    }