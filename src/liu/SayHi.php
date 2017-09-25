<?php
namespace composertest;

class SayHi{
    private $name;
    private $from;


    public function __construct() {
        $this->name = "liuhengsheng";
        $this->from = "hubei";
    }

    public function sayhi() {
        echo sprintf("my name is %s, I'm from %s, welcome to beijing\n", $this->name, $this->from);
    }

    public function sayGood() {
        echo "you are very good\n";
    }
}
