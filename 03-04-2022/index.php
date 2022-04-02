<?php

declare(strict_types=1);

class Color
{
    private int $red;

    private int $green;

    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    private function setRed(int $red): void
    {
        if ($red < 0 || $red > 255){
            throw new Exception('out of range');
        }
        $this->red = $red;
    }

    private function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255){
            throw new Exception('out of range');
        }
        $this->green = $green;
    }

    private function setBlue(int $blue): void
    {
        if ($blue < 0 || $blue > 255){
            throw new Exception('out of range');
        }
        $this->blue = $blue;
    }

    public function equals(Color $color): bool
    {
        if ($this->red === $color->getRed() && $this->green === $color->getGreen() && $this->blue === $color->getBlue()) {
            return true;
        }
        return false;
    }

    public function mix(Color $color): Color
    {
        return new Color(
            (int) (($this->red + $color->getRed())/2),
            (int) (($this->green + $color->getGreen())/2),
            (int) (($this->blue + $color->getBlue())/2)
        );
    }
}

$color1 = new Color(100, 100, 100);

echo $color1->getRed() . "<br>";
echo $color1->getGreen() . "<br>";
echo $color1->getBlue() . "<br>";

$color2 = new Color(100, 100, 100);

if ($color1->equals($color2)) {
    echo "Цвета равны<br>";
} else {
    echo "Цвета не равны<br>";
}

$color3 = $color1->mix($color2);

echo $color1->getRed() . "<br>";
echo $color1->getGreen() . "<br>";
echo $color3->getBlue() . "<br>";


