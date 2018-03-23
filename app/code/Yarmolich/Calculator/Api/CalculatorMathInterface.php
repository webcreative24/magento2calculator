<?php

namespace Yarmolich\Calculator\Api;


interface CalculatorMathInterface
{
    /**
     * Add numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function add($left, $right);

    /**
     * Subtract numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function subtract($left, $right);

    /**
     * Multiply numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function multiply($left, $right);

    /**
     * Divide numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function divide($left, $right);

    /**
     * Power numbers
     *
     * @param float|int $left
     * @param float|int $right
     * @return float|int result
     */
    public function power($left, $right);
}