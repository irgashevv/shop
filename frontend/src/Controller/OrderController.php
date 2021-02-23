<?php


class OrderController
{
    public function index()
    {
        include_once __DIR__ . "/../../view/order/form.php";
    }

    public function create()
    {
        $name = htmlspecialchars($_POST['name']);
        // TODO Validation Phone
        $phone = htmlspecialchars($_POST['phone']);
        // TODO Validation Email
        $email = htmlspecialchars($_POST['email']);
        $delivery = (int)$_POST['delivery'];
        $payment = (int)$_POST['payment'];
        $comment = htmlspecialchars($_POST['comment']);
        $userId = UserService::getCurrentUser() ?? 0;
        $total = 0;
        $status = OrderService::STATUS_NEW;
        $updated = date('Y-m-d H:i:s', time());


        $order = new Order(null, $userId, $payment, $delivery, $total, $comment, $status, $updated);

    }

}