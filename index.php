<?php

/**
 * This method sorts arrays in increasing order using Insert Sort Loop
 *
 * @param array $arrayData passed to method for sort
 * @return array
 */
function increasingInsertSort($arrayData) { //def function for insertion sort loop
    //"for" cycle for checking all keys of an array
    for($i = 0; $i < count($arrayData); $i++) {
        //initializing a variable that will be compared to others
        $value = $arrayData[$i];
        //initializing a second variable $value will be compared with
        $j = $i - 1;
        //"while" cycle to compare keys with each other till $value finds it's place
        while($j >= 0 && $arrayData[$j] > $value) {
            $arrayData[$j + 1] = $arrayData[$j];
            $j--;
        }
        $arrayData[$j + 1] = $value; //А отут походу назначається остаточно, коли луп розбивається.
    }
    return $arrayData;
}

/**
 * This method is basically the previous, but ">" is changed to "<" in while cycle, so now it sorts in decreasing order
 *
 * @param array $arrayData passed to method for sort
 * @return array
 */
//defining function for insertion sort loop
function decreasingInsertSort($arrayData) {
    //"for" cycle for checking all keys of an array
    for($i = 0; $i < count($arrayData); $i++) {
        //initializing a variable that will be compared to others
        $value = $arrayData[$i]; //змінна, яка буде переставлятись
        //initializing a second variable $value will be compared with
        $j = $i - 1;
        //"while" cycle to compare keys with each other till $value finds it's place
        while($j >= 0 && $arrayData[$j] < $value) {
            $arrayData[$j + 1] = $arrayData[$j];
            $j--;
        }
        //Assigning $value to $arrayData when the loop is broken
        $arrayData[$j + 1] = $value;
    }
    //returning $arrayData
    return $arrayData;
}
//initializing random for 100-value array
$randomNumberArray = range(-100,100);
shuffle($randomNumberArray);
//assigning 100 random numbers from $randomNumberArray to a $testArray
$testArray = array_slice($randomNumberArray, 0, 100);

echo "Original Array :\n";
//echoing an original array
echo implode(', ', $testArray);
//assigning sorted arrays to variables and printing it
$sortedArrayIncreasingOrder = increasingInsertSort($testArray);
echo nl2br ("\nSorted Array in increasing order: ");
echo implode(', ', $sortedArrayIncreasingOrder);
$sortedArrayDecreasingOrder = decreasingInsertSort($testArray);
echo nl2br ("\nSorted Array in decreasing order: ");
echo implode(', ', $sortedArrayDecreasingOrder);

//Finding a key to a value
$key = array_search('7', $testArray);
echo nl2br ("\nKey is : $key");


/**
 * Method for searching the key of a searched word in array of sentences
 * @param array $searchedArray is array of sentences
 * @param string $word is searched word
 */
function searchKeyWordInArray($word, array $searchedArray) {
    //"for" loop for checking whole array
    for ($i= 0; $i < count($searchedArray); $i++) {
        //checking if searched word is in the current key
        if(strpos($searchedArray[$i], $word) !== false) {
            //if true - assigning current key to an array
            $array1[$i] = $i;
        }
    }
    //returning this array
    return $array1;
}

$sentenceArray = ["i like programming", "then errors in my code make me hate everything", "and later my code is running", "so in the end that will do"];
$searchedWord = "code";
$arrayTest = searchKeyWordInArray($searchedWord, $sentenceArray);
echo nl2br("\n Searched word keys in array are: ");
echo implode(', ', $arrayTest);


/**
 * Method is used to calculate factorial of a number
 * @param integer $n passed to a function
 * @return integer
 *
 */
function factorialCalculating($n) {
    $num = $n;
    $factorial = 1;
    for($i = $num; $i > 0; $i--) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}

$value = 5;
$factorialOfValue = factorialCalculating($value);
echo nl2br("\n $value factorial will be: ");
print_r($factorialOfValue);