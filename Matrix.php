<?php

class Matrix{
    private $arr;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    public function add(Matrix $matrix)
    {
        for ($i = 0; $i < count($this->arr); $i++) {
            for ($j = 0; $j < count($this->arr[$i]); $j++) {
                $this->arr[$i][$j] += $matrix->arr[$i][$j];
            }
        }
    }

    public function diff(Matrix $matrix)
    {
        for ($i = 0; $i < count($this->arr); $i++) {
            for ($j = 0; $j < count($this->arr[$i]); $j++) {
                $this->arr[$i][$j] -= $matrix->arr[$i][$j];
            }
        }
    }

    public function mult(Matrix $matrix){
        for($i = 0; $i < count($this->arr[$i]); $i++)
        {
            for($j = 0; $j < count($this->arr[$i]); $j++)
            {
                for($k = 0; $k < count($this->arr[$i]); $k++)
                {
                    $this->arr[$i][$j] += $this->arr[$i][$k] * $matrix->arr[$k][$j];
                }
            }
        }

    }

    public function toArray(){
        return $this->arr;
    }
}