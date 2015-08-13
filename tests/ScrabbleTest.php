<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scoreWord_oneLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = 'i';

            //Act
            $result = $test_Scrabble->scoreWord($input);

            //Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
