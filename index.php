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


require_once './load.php';

use zater\api as Api;
use zater\helpers as Helpers;

$test = new Api\api();



$res = $test->search_asks(47);

Helpers\debug_print($res);




Helpers\debug_print(json_decode($test->getJson()));
