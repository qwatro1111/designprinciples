<?php
interface ButtonInterface {
    public function press();
    public function getName();
}

interface FloorButtonInterface extends ButtonInterface{
    public function getFloor();
}

abstract class AbstractSpecialButton implements ButtonInterface{
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

class StopButton extends AbstractSpecialButton {
    public function press(){
        echo 'Lift has stopped';
    }
}

class AlarmButton extends AbstractSpecialButton {
    public function press(){
        echo 'A-a-a-a-a-a-a! Help!';
    }
}

class FloorButton implements FloorButtonInterface {
    private $floor;
    private $name;

    public function __construct($name, $floor){
        $this->name = $name;
        $this->floor = (int)$floor;
    }

    public function getName() {
        return $this->name;
    }
    public function getFloor(){
        return $this->floor;
    }

    public function press(){
        echo 'Lift moves to the floor N '
            . $this->floor;
    }
}
