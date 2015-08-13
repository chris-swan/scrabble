<?php
    class Scrabble
    {
        function scoreWord($input_word)
        {
            $lc_word = strtolower($input_word);
            $split = str_split($lc_word);

            $one_points = array('a','e','i','o','u','l','n','r','s','t');
            $two_points = array('d','g');
            $three_points = array('b','c','m','p');
            $four_points = array('f','h','v','w','y');
            $five_points = array('k');
            $eight_points = array('j','x');
            $ten_points = array('q','z');

            $numbers_now = array();

            foreach($split as $letter) {
                if (in_array($letter, $one_points)) {
                    $letter = 1;
                } elseif (in_array($letter, $two_points)) {
                    $letter = 2;
                } elseif (in_array($letter, $three_points)) {
                    $letter = 3;
                } elseif (in_array($letter, $four_points)) {
                    $letter = 4;
                } elseif (in_array($letter, $five_points)) {
                    $letter = 5;
                } elseif (in_array($letter, $eight_points)) {
                    $letter = 8;
                } elseif (in_array($letter, $ten_points)) {
                    $letter = 10;
                } else {
                    $letter = 0;
                }
              array_push($numbers_now, $letter);
            }

            $output = array_sum($numbers_now);

            return $output;




        }

    }
 ?>
