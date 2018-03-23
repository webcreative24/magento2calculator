<?php

namespace Yarmolich\Calculator\Model;


class CalculatorMathMethods implements \Yarmolich\Calculator\Api\CalculatorMathInterface
{

    /**
     * Add numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function add($left, $right)
    {
        return round($left + $right,\Yarmolich\Calculator\Model\Calculator::$precision);
    }

    /**
     * Subtract numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function subtract($left, $right)
    {
        return round($left - $right,\Yarmolich\Calculator\Model\Calculator::$precision);
    }

    /**
     * Multiply numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function multiply($left, $right)
    {
        return round($left * $right,\Yarmolich\Calculator\Model\Calculator::$precision);
    }

    /**
     * Divide numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function divide($left, $right)
    {
        return round($left / $right,\Yarmolich\Calculator\Model\Calculator::$precision);
    }

    /**
     * Power numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function power($left, $right)
    {
        return round(pow($left,$right),\Yarmolich\Calculator\Model\Calculator::$precision);
    }
}