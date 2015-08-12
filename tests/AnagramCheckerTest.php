<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_checkAnagram_oneLetter()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $word = "a";
            $comparison = "a";

            //Act
            $result = $test_AnagramChecker->checkAnagram($word, $comparison);

            //Assert
            $this->assertEquals("a", $result);
        }

        function test_checkAnagram_twoLetters()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $word = "ab";
            $comparison = "ab";

            //Act
            $result = $test_AnagramChecker->checkAnagram($word, $comparison);

            //Assert
            $this->assertEquals("ab", $result);
        }

        function test_checkAnagram_multipleLetters()
        {
            //Arange
            $test_AnagramChecker = new AnagramChecker;
            $word = "ab";
            $comparison = "ba";

            //Act
            $result = $test_AnagramChecker->checkAnagram($word, $comparison);

            //Assert
            $this->assertEquals("ba", $result);
        }

        function test_checkAnagram_capitolLetters()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $word = "A";
            $comparison = "a";

            //Act
            $result = $test_AnagramChecker->checkAnagram($word, $comparison);

            //Assert
            $this->assertEquals("a", $result);
        }

        // function test_checkAnagram_differentLetters()
        // {
        //     //Arrange
        //     $test_AnagramChecker = new AnagramChecker;
        //     $word = "a";
        //     $comparison = "b";
        //
        //     //Act
        //     $result = $test_AnagramChecker->checkAnagram($word, $comparison);
        //
        //     //Assert
        //     $this->assertEquals("b", $result);
        // }

        function test_checkAnagram_twoWords()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $word = "rat";
            $comparison = "art, tar";


            //Act
            $result = $test_AnagramChecker->checkAnagram($word, $comparison);

            //Assert
            $this->assertEquals("art, tar", $result);
        }






    }




?>
