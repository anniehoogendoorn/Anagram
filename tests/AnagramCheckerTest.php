<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_checkAnagram_oneLetter()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "a";
            $comparison = "a";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input, $comparison);

            //Assert
            $this->assertEquals(True, $result);
        }

        // function test_checkAnagram_twoLetters()
        // {
        //     //Arrange
        //     $test_AnagramChecker = new AnagramChecker;
        //     $input = "ab";
        //
        //     //Act
        //     $result = $test_AnagramChecker->checkAnagram($input);
        //
        //     //Assert
        //     $this->assertEquals(True, $result);
        // }
        //
        // function test_chekAnagram_multipleLetters()
        // {
        //     //Arange
        //     $test_AnagramChecker = new AnagramChecker;
        //     $input = "ab";
        //
        //     //Act
        //     $result = $test_AnagramChecker->checkAnagram($input);
        //
        //     //Assert
        //     $this->assertEquals(True, $result);
        // }
    }

?>
