<?php

namespace Yarmolich\Calculator\Api;

interface CalculatorInterface
{
    CONST DEFAULT_PRECISION = 2;

    /**
     * Returns total result
     *
     * @param float|int $left
     * @param float|int $right
     * @param string $operator
     * @param int|null $precision
     * @return array result
     */
    public function calculator($left, $right, $operator, $precision = null);

    /**
     * Set operator for calculation
     * @param string $operator
     * @return string $operator
     */
    public function setOperator($operator);

    /**
     * @param int $precision
     * @return \Yarmolich\Calculator\Model\Calculator
     */
    public function setPrecision($precision);

    /**
     * @return int $precision
     */
    public function getPrecision();
}