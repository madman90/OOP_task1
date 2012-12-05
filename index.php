<?php
abstract class pieces {
    var $density;
    var $volume;
    var $weight;

    abstract public function volume();
    function weight() {
    $this->weight = $this->density * $this->volume;
    }

}

class pyramids extends pieces {
    var $S;
    var $h;

    function __construct($S, $h, $density)
    {
        $this->S = $S;
        $this->h = $h;
        $this->density = $density;
    }

    public function volume(){
        $this->volume =  ($this->S * $this->h)/3;

    }

}

class spheres extends pieces {
    var $R;

    function __construct($R, $density)
    {
        $this->R = $R;
        $this->density = $density;
    }

    public function volume(){
        $this->volume = (4/3) * pi() * pow($this->R,3);
    }

}
class parallelepipeds extends pieces {
    var $a;
    var $b;
    var $c;

    function __construct($a, $b, $c, $density)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->density = $density;
    }

    public function volume() {
        $this->volume = $this->a * $this->b * $this->c;
    }

}

class cubes extends parallelepipeds {

    function __construct($a, $density)
    {
        $this->a = $a;
        $this->density = $density;
    }

    public function volume(){
        $this->volume = pow($this->a,3);
   }
}

$pyramid1 = new pyramids(4,3,1);
$sphere1  = new spheres(2,2);
$parallelepiped1 = new parallelepipeds(1,2,3,3);
$cube1 = new cubes(2,4);
echo "\n";
$pyramid1->volume();
$pyramid1->weight();
echo "pyramid1" . "\n";
echo "density: " . $pyramid1->density . "\n";
echo "volume: " . $pyramid1->volume . "\n";
echo "weight: " . $pyramid1->weight . "\n";

echo "\n";
$sphere1->volume();
$sphere1->weight();
echo "sphere1" . "\n";
echo "density: " . $sphere1->density . "\n";
echo "volume: " . $sphere1->volume . "\n";
echo "weight: " . $sphere1->weight . "\n";

echo "\n";
$parallelepiped1->volume();
$parallelepiped1->weight();
echo "parallelepiped1" . "\n";
echo "density: " . $parallelepiped1->density . "\n";
echo "volume: " . $parallelepiped1->volume . "\n";
echo "weight: " . $parallelepiped1->weight . "\n";

echo "\n";
$cube1->volume();
$cube1->weight();
echo "cube1" . "\n";
echo "density: " . $cube1->density . "\n";
echo "volume: " . $cube1->volume . "\n";
echo "weight: " . $cube1->weight . "\n";
echo "\n";




?>