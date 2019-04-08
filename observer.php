<?php
//At first ,Create an abstract EventGenerator
abstract class  EventGenerator{
    //define the observer
    private $observers = [];
    //create a function to add an observer
    public function add($observer){
        $this->observers[] = $observer;
    }
    // when events change,notify the observer
    public function notify(){
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}
//define the interface for Observer
interface Observer{
    public function update();
}
//Observer classes 
class Observer1 implements Observer{
    public function update($info = null){
        echo "observer1 receive the message and do smt\n";
    }
}

class Observer2 implements Observer{
    public function update($info = null){
        echo "observer2 receive the message and do smt\n";
    }
}

class Event extends EventGenerator{
    public function trigger (){
        $this->notify();
    }
}

$e = new Event();
$e->add(new Observer1());
$e->add(new Observer2());
$e->trigger();