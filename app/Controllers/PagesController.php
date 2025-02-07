<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class PagesController extends BaseController
{
    public function index()
    {
        return $this->renderView('pages/home', ['title' => 'Home']);
    }

    public function view(string $page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        return $this->renderView('pages/' . $page, ['title' => ucfirst($page)]);
    }
}