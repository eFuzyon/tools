<?php
    /*****
     * This class is used to help you benchmark your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: efuzyon
     * @class: Benchmark
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace eFuzyon;

    class Benchmark {

        /*****
        * This variables are used to calculate how long the code took to be
        * executed.
        *
        * @static
        * @private microtime $start, $finish
        *****/

        private static $start;
        private static $finish;

        /*****
        * This method sets the start time.
        *
        * @static
        * @public
        * Start - Start()
        * @return true
        *****/

        static public function Start(){

            self::$start = microtime(TRUE);
            return true;

        }

        /*****
        * This method sets the finish time.
        *
        * @static
        * @public
        * Finish - Finish()
        * @return true
        *****/
        static public function Finish(){

            self::$finish = microtime(TRUE);
            return true;

        }

        /*****
        * This method returns the time difference between $start and $finish.
        *
        * @static
        * @public
        * Result - Result()
        * @return float
        *****/
        static public function Result(){

            return (self::$finish - self::$start);

        }

    }