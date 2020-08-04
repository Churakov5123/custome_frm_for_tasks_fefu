<?php


namespace App\Controller;

use App\Model\Task;


class BaseController
{
    public function index()
    {
        $items = Task::all();
        return render('task', compact('items'));
    }
}