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


/** Define ABSPATH as this file's directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Define INC as this file's directory */
if (!defined('INC')) {
    define('INC', 'includes' . '/');
}

if (file_exists(ABSPATH . INC . 'helpers.php')) {
    /** The helpres file resides in INC directory */
    require_once( ABSPATH . INC . 'helpers.php' );
}

if (file_exists(ABSPATH . INC . 'api.php')) {
    /** The api file resides in INC directory */
    require_once( ABSPATH . INC . 'api.php' );
}

