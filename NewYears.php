<?php

abstract class PaymentProvider
{
    public function pay()
    {
        $this->saveToDB();
        $this->changeUserStatus();
    }

    private function saveToDB(): bool
    {
        return true;
    }

    abstract protected function changeUserStatus();
}
class Privat extends PaymentProvider
{

    protected function changeUserStatus()
    {
        var_dump("Privat Pay");
    }
}
class Ukrsib extends PaymentProvider
{

    protected function changeUserStatus()
    {
        var_dump("Ukrsib Pay");
    }
}

class Order
{
    public int $paid=0;
    public function getPaid()
    {
        var_dump($this->paid);
    }
}

class Client
{
    public function payForOrder(PaymentProvider $paymentProvider)
    {
        $paymentProvider->pay();
        $userPaid = new Order();
        $userPaid->paid = 1;
        $userPaid->getPaid();
    }
}