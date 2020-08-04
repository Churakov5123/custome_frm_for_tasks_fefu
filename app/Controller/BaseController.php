<?php


namespace App\Controller;

use App\Model\Task;


class BaseController
{
    public function index()
    {
        $item = Task::all()->toArray();

        return Render('task', ['item'=>$item]);

    }
}