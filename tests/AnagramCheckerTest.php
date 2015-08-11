<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_checkAnagram_oneLetter()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "a";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input);

            //Assert
            $this->assertEquals("a", $result);
        }
    }

?>
