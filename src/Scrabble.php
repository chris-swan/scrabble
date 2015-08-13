<?php
    class Scrabble
    {
        function scoreWord($input_word)
        {
            $lc_word = strtolower($input_word);
            $split = str_split($lc_word);

            $one_points = array('a','e','i','o','u','l','n','r','s','t');
            $two_points = array('d','g');
            

            $numbers_now = array();

            foreach($split as $letter) {
                if (in_array($letter, $one_points)) {
                    $letter = 1;
                } elseif (in_array($letter, $two_points)) {
                    $letter = 2;
                }
              array_push($numbers_now, $letter);
            }

            $output = array_sum($numbers_now);

            return $output;




        }

    }
 ?>
