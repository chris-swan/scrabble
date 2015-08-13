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
        function test_scoreWord_twoLetters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = 'in';

            //Act
            $result = $test_Scrabble->scoreWord($input);

            //Assert
            $this->assertEquals(2, $result);
        }
        function test_scoreWord_ThreeLetters_difCat()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = 'ink';

            //Act
            $result = $test_Scrabble->scoreWord($input);

            //Assert
            $this->assertEquals(7, $result);
        }
        function test_scoreWord_ignore_non_value_character()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = 'ink7';

            //Act
            $result = $test_Scrabble->scoreWord($input);

            //Assert
            $this->assertEquals(7, $result);
        }
        function test_scoreWord_ignore_nonword()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = 'ink7er';

            //Act
            $result = $test_Scrabble->scoreWord($input);

            //Assert
            $this->assertEquals("That's not a real word, cheater!", $result);
        }


    }
 ?>
