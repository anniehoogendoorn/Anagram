<?php
    class AnagramChecker
    {
        function checkAnagram($input_word, $comparison_word)
        {
            $input_word =  strtolower($input_word);
            $comparison_words = strtolower($comparison_words);
            $comparison_words_separated = explode(" ", $comparison_words);

            foreach ($comparison_words_separated as $word) {
                array(str_split($word)
            }

            // $comparison_word2 = strtolower($comparison_word2);

            $input_array_of_letters = str_split($input_word);
            $comparison_array_of_letters = str_split($comparison_word);
            $comparison_array_of_letters2 = str_split($comparison_word2);

            sort($input_array_of_letters);
            sort($comparison_array_of_letters);
            sort($comparison_array_of_letters2);

            $comparison_array_of_letters_combined = array($comparison_array_of_letters, $comparison_array_of_letters2);
            $results_array = array();


            // var_dump($input_array_of_letters);
            //
            //
            foreach ($comparison_array_of_letters_combined as $array){
                if ($input_array_of_letters == $array) {
                    array_push($results_array, True);
                } else {
                    array_push($results_array, False);
                }

            return $results_array;

            }
            //

        }
    }
?>
