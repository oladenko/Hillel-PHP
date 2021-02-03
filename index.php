<?php

class Color
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->setColor($red, $green, $blue);
    }

    public function setColor($red, $green, $blue)
    {

        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);

    }

    private function setRed($red)
    {
        if ($red < 0 && $red > 255) {
            throw new InvalidArgumentException($red);
        }
        $this->red = $red;

    }

    public function getRed()
    {

        return $this->red;
    }

    private function setGreen($green)
    {
        if ($green < 0 && $green > 255) {
            throw new InvalidArgumentException($green);
        }
        $this->green = $green;
    }

    public function getGreen()
    {

        return $this->green;
    }

    private function setBlue($blue)
    {
        if ($blue < 0 && $blue > 255) {
            throw new InvalidArgumentException($blue);
        }
        $this->blue = $blue;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function mix(Color $color)
    {

        return new Color(
            (int)(($this->red + $color->getRed()) / 2),
            (int)(($this->green + $color->getGreen()) / 2),
            (int)(($this->blue + $color->getBlue()) / 2)
    );
    }

    public static function random($color)
    {
        return new Color ( rand(0,255), rand(0,255),rand(0,255));
    }
    public function equals(Color $color){


        return  $this->red == $color->getRed() && $this->green == $color->getGreen() && $this->blue == $color->getBlue();

    }

}

$color = new Color(200, 100, 200);
$color1 = new Color(200, 200, 200);
$color2 = $color->equals($color1);
$mixedColor = $color->mix(new Color(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150
var_dump($color2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body {
            background-color: rgb(<?= $color->getRed() ?>,<?= $color->getGreen() ?>,<?= $color->getBlue() ?>) ;
        }
    </style>
</head>
<body>

</body>
</html>
