<?php
    class AnagramChecker
    {
        function checkAnagram($word, $comparison_list)
        {
            $word =  strtolower($word);
            $comparison_list = strtolower($comparison_list);
            $comparison_list_array = explode(", ", $comparison_list);

            $word_array = str_split($word);
            $anagrams_array = array();

            sort($word_array);




            // var_dump($input_array_of_letters);
            //
            //
            foreach ($comparison_list_array as $list_word){
                $list_word_array = str_split($list_word);

                sort($list_word_array);
                if ($word_array == $list_word_array) {
                    array_push($anagrams_array, $list_word);
                    // if ($word != $list_word){
                    //     array_push($anagrams_array, $list_word);
                    // }

                }
            }

            return implode(", ", $anagrams_array);




        }
    }
?>
