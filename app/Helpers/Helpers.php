<?php


namespace App\Helpers;

use App\Model\Task;

/**
 * Class helpers
 * @package App\Helpers
 */

class helpers
{
    /**
     * @return mixed
     */
    public static function getJson()
    {
        $jsonFail = file_get_contents('categories.json');
        $items = json_decode($jsonFail);
        return $items;
    }

    /**
     * @param $data
     */
    public static function insertDb($data)
    {
        foreach ($data as $i) {

            $arr = [
                "id" => $i->id,
                "name" => $i->name,
                "alias" => $i->alias,
                "children" => serialize($i->children)
            ];

            $item = new Task($arr);
            $item->save();
        }

    }

}