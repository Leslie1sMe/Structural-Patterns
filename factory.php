<?php
interface Transport{
    public function move();
}
class TransportFactory{
    public function factory($transport){
        switch($transport){
            case "Bus":
            return new Bus();
            case "Car":
            return new Car();
            case "Train":
            return new Train();
            case "Bicyle":
            return new Bicyle();
        }
    }
}
class Car implements Transport{
    public function move(){
        echo "小汽车滴滴";
    }
}
class Bus implements Transport{
    public function move(){
        echo "出租车滴滴";
    }
}
class Train implements Transport{
    public function move(){
        echo "火车嗡嗡";
    }
}
class Bicycle implements Transport{
    public function move(){
        echo "自行车叮叮";
    }
}


$res = new TransportFactory();
$t = $res->factory("Train");
$t->move();