<?php

namespace Yarmolich\Calculator\Model;

use Yarmolich\Calculator\Api\CalculatorInterface;

class Calculator implements CalculatorInterface
{
    /* @var static $precision */
    public static $precision;
    /* @var $precision */
    private $_left;
    /* @var $right */
    private $_right;
    /* @var $_operator */
    private $_operator;
    /* @var \Yarmolich\Calculator\Api\CalculatorMathInterface */
    private $_calculatorMathMethods;
    /* @var $_allowedOperators */
    private $_allowedOperators = ['add', 'subtract', 'multiply', 'divide', 'power'];

    /**
     * Calculator constructor.
     * @param \Yarmolich\Calculator\Api\CalculatorMathInterface $calculatorMathMethods
     */
    public function __construct(\Yarmolich\Calculator\Api\CalculatorMathInterface $calculatorMathMethods)
    {
        $this->_calculatorMathMethods = $calculatorMathMethods;
    }

    /**
     * Returns total result
     *
     * @api
     * @param float|int $left
     * @param float|int $right
     * @param string $operator
     * @param int|null $precision
     * @return array result
     */
    public function calculator($left, $right, $operator, $precision = null)
    {
        $this->_left = $left;
        $this->_right = $right;
        $this->setOperator($operator);
        if (!is_null($precision)) {
            $this->setPrecision($precision);
        } else {
            self::$precision = CalculatorInterface::DEFAULT_PRECISION;
        }

        $result = $this->calculateData();

        return [
            [
                'status' => 'ok',
                'result' => $result
            ]
        ];
    }

    /**
     * @param string $operator
     * @throws
     * @return $this|array
     */
    public function setOperator($operator)
    {
        if (!in_array($operator, $this->_allowedOperators)) {
            throw new \Exception('Disallowed math method');
        }
        $this->_operator = $operator;

        return $this;
    }

    /**
     * @param $precision
     * @return $this
     */
    public function setPrecision($precision)
    {
        self::$precision = $precision;
        return $this;
    }

    /**
     * @return int Precision
     */
    public function getPrecision()
    {
        return self::$precision;
    }

    /**
     * Return finally result
     *
     * @return float|int|
     */
    public function calculateData()
    {
        $result = '';
        if (!empty($this->_operator) && $this->_operator != "") {
            switch ($this->_operator) {
                case 'add':
                    $result = $this->_calculatorMathMethods->add($this->_left, $this->_right);
                    break;
                case 'subtract':
                    $result = $this->_calculatorMathMethods->subtract($this->_left, $this->_right);
                    break;
                case 'multiply':
                    $result = $this->_calculatorMathMethods->multiply($this->_left, $this->_right);
                    break;
                case 'divide':
                    $result = $this->_calculatorMathMethods->divide($this->_left, $this->_right);
                    break;
                case 'power':
                    $result = $this->_calculatorMathMethods->power($this->_left, $this->_right);
                    break;
            }
        }

        return $result;

    }

}