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
                "children" => $i->children
            ];

            $item = new Task($arr);
            $item->save();
        }

    }

    /**
     * @param $items
     * @return false|string
     */
    public static function catData($items)
    {
        $newData = array();
        foreach ($items as $key => $item) {
            $newData[$key]['name'] = $item['name'];
            foreach ($item['children'] as $keys => $i) {
                $newData[$key]['children'][$keys]['name'] = $i['name'];
            }
        }
        return json_encode($newData);
    }

    /*
     * Cписок  name
     */
    public static function printNames($items)
    {
        $newData = array();
        foreach ($items as $item) {
            $newData[] = $item['name'];
            foreach ($item['children'] as $i) {
                $newData[] = $i['name'];
                if (isset($i['children'])) {
                    foreach ($i['children'] as $qw) {
                        $newData[] = $qw['name'];

                    }
                }
            }
        }
        return print_r($newData);
    }
}