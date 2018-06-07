<?php

/*
 * Copyright 2018 mixpl.
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

/**
 * Challenge for Backend Developer
 *
 * @author Igor Cesar
 */

namespace zater\api;

use zater\helpers as Helpers;

class api {

    private $json;

    /**
     * Set json file.
     *      
     * @param String $file json file.
     */
    public function setJson($file) {
        $this->json = $file;
    }

    /**
     * Get json file.
     * 
     * @return String json file.
     */
    public function getJson() {
        return $this->json;
    }

    /**
     * Load json file.
     * 
     * @param type $file Json file locate to load.
     */
    public function loadFile($file) {
        if (file_exists($file)) {
            $this->setJson((file_get_contents($file)));
        } else {
            Helpers\debug_to_console("file does not exist");
        }
    }

    /**
     * 
     */
    public function __construct($file = './orderbook.json') {
        $this->loadFile($file);
    }

    public function search_asks($id, $sort = 'asc') {

        $json = json_decode($this->getJson());
        foreach ($json->asks as $asks) {
            if (Helpers\like($id, $asks[0])) {
                $return[] = $asks[1];
            }
        }



        switch ($sort) {
            case 'asc':
                sort($return);
                break;

            case 'desc':
                arsort($return);
                break;

            default:
                break;
        }


        return $return;
    }

}
