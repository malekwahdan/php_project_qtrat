<?php

require_once 'models/Model.php';
class History extends Model
{

    public function construct()
    {
        parent::__construct('orders');

    }
    public function getUserOrders($userId)
    {
      
        $sql = "
    SELECT 
        orders.id AS order_id,
        orders.purchase_date AS date,
        orders.total AS total,
        orders.order_status AS order_status
        from orders
    WHERE orders.user_id = :user_id
";


    
        $stmt = $this->db->prepare($sql);

       
        $stmt->bindParam(':user_id', $userId);

      
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}
?>