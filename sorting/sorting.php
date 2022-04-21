<?php
    class SomeFunction {
        private $array = [];

        public function addArray(array $array) {
           if(is_array($array)) {
             $this->array = $array;
           }
        }
        public static function selectSort(array $init_array) {
          // non rien de rien
        }

        /**
         * this function will perform a sort of an array input
         * @param 0 = array initial 
         *  @param 1 = the order way wich will be the output
         *  @return a bubble sorted array
         */

        public static function bubbleSort(array $init_array, $order = 'ASC') {
            if($order === 'ASC') {
                for($i = 0; $i < count($init_array); $i++) {
                    for($j = $i + 1; $j < count($init_array); $j++) {
                        if($init_array[$i] > $init_array[$j]) {
                            self::swap($init_array[$i], $init_array[$j]);
                        }
                    }
                }
            } elseif ($order === 'DSC') {
                for($i = 0; $i < count($init_array); $i++) {
                    for($j = $i + 1; $j < count($init_array); $j++) {
                        if($init_array[$i] < $init_array[$j]) {
                            self::swap($init_array[$i], $init_array[$j]);
                        }
                    }
                }
            } else {
                trigger_error('la deuxieme argument doit etre entre \'ASC\' ET \'DSC\'');
            }
           
            return self::prettyPrint($init_array, ' | ');
        }

        public static function maxInArray(array $arrayInput) {
           if(!empty($arrayInput)) {
                $max = $arrayInput[0];
                for($i = 1; $i < count($arrayInput); $i++) {
                    if($max < $arrayInput[$i]) $max = $arrayInput[$i];
                }
                return $max;
           } else {
               return 0;
           }
        }

        public static function minInArray(array $arrayInput) {
            if(!empty($arrayInput)) {
                 $min = $arrayInput[0];
                 for($i = 1; $i < count($arrayInput); $i++) {
                     if($min > $arrayInput[$i]) $min = $arrayInput[$i];
                 }
                 return $min;
            } else {
                return 0;
            }
         }

        public static function prettyPrint(array $array, $separator = ' ') {
            $array_printed = '';
            for($i = 0; $i < count($array); $i++) {
                $array_printed .= $array[$i].' <span class="sep">'.$separator.' </span>';
            }
            return $array_printed;
        }

        public static function swap(&$a , &$b) {
            $tmp = 0;
            $tmp = $a;
            $a = $b;
            $b = $tmp;
        }
    }
?>