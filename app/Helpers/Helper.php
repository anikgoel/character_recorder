<?php

if (!function_exists('getRandomPhrase')) {
    /**
     * Returns a randomize string from array
     *
     * @return string a string in human readable format
     *
     * */
    function getRandomPhrase()
    {
        $arr = ['Enabling reuse of trait data',
            'Making your data long lived',
            'Building the trait data infrastructure for the future'];
        return $arr[rand(0, 2)];
    }
}