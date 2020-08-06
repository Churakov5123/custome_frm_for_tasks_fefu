<?php

namespace App\Controller;

use App\Model\Task;

/**
 * Class Home
 * @package App\Controller
 */
class Home
{
    /**
     * Возращаем  список наших обьектов ввиде json и прокидываем по view,
     * там мы передадим уже в компонент вью  где распспарсим и сформируем вид  меню категорий
     */
    public function getIndex()
    {
        $items = Task::all();
        return render('task', compact('items'));
    }


}
