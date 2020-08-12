<?php

namespace App\Controller;

use App\Helpers\helpers;
use App\Model\Task;

/**
 * Class Home
 * @package App\Controller
 */
class Home
{
    /**
     * 2.1 Возращаем  список наших обьектов ввиде json и прокидываем по view,
     * там мы передадим уже в компонент вью  где распспарсим и сформируем вид  меню категорий
     * 2.2 обрезаем  до первого уровня вложенности  делаем и прокидавыем  во вью откуда поелтит в компонент
     */
    public function getIndex()
    {
        $items = Task::all()->toJson();
        $itemsTwo = Task::all()->jsonSerialize();

        $newItems = helpers::catData($itemsTwo);
        return render('task', compact('items', 'newItems'));
    }


}
