<?php
    /* 
    Courch Name : OOP PHP
    Auhor : Jagadish Chakma
    Date : 24-12-2019
    Link : www.bodhidhara.com/developer
    Version: php 6.0
    Code versio : 1.0
    */
    /* --------------- Exampale ----------*/


    // OOP php class declare
    class jagadish {// This
        public $name = "Jagadish Chakma";
        public $birth_name = "Battay Chakma";
        public $birth = "21 August 1997";
        public $age = 23;
        public $father_name = "Bijoy Chandra Chakma";
        public $mother_name = "Kalamila Chakma";
        public $city = "Rangamati";
        public $edu = "Honors third year";
    }
    $jagadish_chakma = new jagadish();
    echo $jagadish_chakma -> edu . "<br>";

    // OOP php obejct declare
    class jagadish_relation {
        public $girl_friend = "Anamika Chakma";
        public $re_birth = "24 August 2019";
    }
    $jagadish_chakma = new jagadish_relation(); // This
    echo $jagadish_chakma -> girl_friend . "<br>";

    // OOP php method declare
    class jagadish_ict {
        function ict() { // This
            echo " I am a web developer";
        }
    }
    $jagadish_chakma = new jagadish_ict();
    echo $jagadish_chakma -> ict() . "<br>";

    // OOP php method return and parameter
    class jagadish_freelancing {
        function freelancing($type, $skill, $period) {
            echo $type.$skill.$period;
        }
    }
    $jagadish_chakma = new jagadish_freelancing();
    echo $jagadish_chakma -> freelancing('We developer', '60%', '2 year') . "<br>"; // This

    // OOP php method return keyword simple
    class jagadish_goal_simple {
        function simple_goal() {
            $x = "This is simple method return";
            return $x; // This
        }
    }
    $jagadish_chakma = new jagadish_goal_simple();
    echo $jagadish_chakma -> simple_goal() . "<br>";

    // OOP php method return keyword advanced
    class jagadish_goal {
        public $goal = "This is  a advanced method return";
        function goal() {
            $x = "I am return method";
            return $this->goal; // This
        }
    }
    $jagadish_chakma = new jagadish_goal();
    echo $jagadish_chakma -> goal() . "<br>";

    // OOP php contsructor method simple
    class jagadish_change {
        function __construct()
        {
            echo "This is a simple autometically call simple __construct method" . "<br>";
        }
    }
    $jagadish_chakma = new jagadish_change();

    // OOP php constructor method advanced
    class jagadish_change_advanced {
        public $tag = "Now I will trying to change at developer is smootly" . "<br>";
        function __construct() {
            echo $this->tag;
        }
    }
    $jagadish_chakma = new jagadish_change_advanced();

    // OOP php constructor paraneter added method
    class jagadish_change_parameter {
        function __construct($p1, $p2) {
            echo $p1.$p2."<br>";
        }
    }
    $jagadish_chakma = new jagadish_change_parameter('Love you', 'Donobi chakma');

    // OOP php object destroy method
    class jagadish_destroy {
        function __construct(){
            echo "I am  construct for banabante";
        }
        function __destruct()// This
        {
            echo " I am destroy for Dhonobi chakma sex" . "<br>";
        }
        /*
        Line code aren't working. Because it's class already destroy.
        You can test it:
        function _construct(){
            echo "I am new test a function is working destroy function";
        }
        */
    }
    $jagadish_chakma = new jagadish_destroy();


    // OOP php Public modifiers use
    class jagadish_extrobert {
        public $ex_one = "meet up someone";
        public $ex_two = "For coundilor";
        public $ex_three = "For competitions";
    }
    $jagadish_chakma = new jagadish_extrobert();
    echo $jagadish_chakma->ex_two . "<br>";

    // OOP php Private modifiers use
    class jagadish_introbert {
        private $pri_one = "Relational management with Donobi Chakma";
        private $pri_two = "Talk to outside people without reasons";
        private $pri_three = "Sex with Donobi";
        function introbert() {
            return $this->pri_two;
        }
    }
    $jagadish_chakma = new jagadish_introbert();
    echo $jagadish_chakma->introbert() ."<br>";

    // OOP php protected modifiers use simple
    class jagadish_power {
        protected $power = "Introberce power";
    }
    class jagadish_power_source extends jagadish_power {
        function power() {
            return $this->power;
        }
    }
    $jagadish_chakma = new jagadish_power_source();
    echo $jagadish_chakma->power() . "<br>";


    // OOP php $this keyword use
    class jagadish_mood {
        public $mood;
        function sromon() {
            $this->mood = "Before I wish to be a sromon";
            echo $this->mood;
        }
        function study() {
            $this->mood = "Become a freelancer";
            echo $this->mood;
        }
    }
    $jagadish_chakma = new jagadish_mood();
    echo $jagadish_chakma->sromon();
    echo $jagadish_chakma->study() . "<br>";

    // OOP php inheritence use simple
    class jagadish_rooter {
        public $rooter = "Rleigion";
    }
    class jagadish_supply extends jagadish_rooter{
        function supply() {
            echo $this->rooter;
        }
    }
    $jagadish_chakma = new jagadish_supply();
    echo $jagadish_chakma->supply()."<br>";

    // OOP php inheritence use in method example
    class jagadish_mood_real {
        public $mood = "Similer";
        public function mood() {
            return $this->mood;
        }
    }
    $jagadish_chakma = new jagadish_mood_real();
    class jagadish_mood_true_false extends jagadish_mood_real{
        function mood_type() {
            return $this->mood();
        }
    }
    $jagadish_chakma = new jagadish_mood_true_false();
    echo $jagadish_chakma->mood_type()."<br>";


    // OOP php inheritence method return and parameter;
    class jagadish_english {
        public function english($size) {
            return $size;
        }
    }
    class jagadish_english_size extends jagadish_english {
        function english($size) {
            return $this->english($size);
        }
    }
    $jagadish_chakma = new jagadish_english();
    echo $jagadish_chakma->english('Intermediate Lavel')."<br>";


    // OOP php polymorpism method
    class jagadish_class {
        function bba() {
            echo "I am study bba first year";
        }
    }
    class jagadish_class_second extends jagadish_class {
        function bba() {
            echo "I am interview at 3rd year";
        }
    }
    $jagadish_chakma = new jagadish_class_second();
    echo $jagadish_chakma->bba() . "<br>";


    // OOP php encaptulation use method
    class jagadish_gf {
        private $gf;
        function gf() {
            $this->gf = "Donobi";
            return $this->gf;
        }
    }
    $jagadish_chakma = new jagadish_gf();
    echo $jagadish_chakma->gf()."<br>";
?>