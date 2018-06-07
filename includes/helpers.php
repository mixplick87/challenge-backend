<?php

/*
 * Copyright 2018 Igor Cesar.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace zater\helpers;

function debug_to_console($data) {
    $output = $data;
    if (is_array($output)) {
        $output = implode(',', $output);
    }
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function debug_print($data = false) {
    if (true) {
        echo '<pre>';
        print_r($data);
        echo '<pre>';
    }
}

function like($needle, $haystack) {
    $regex = '/' . str_replace('%', '.*?', $needle) . '/';

    return preg_match($regex, $haystack) > 0;
}
