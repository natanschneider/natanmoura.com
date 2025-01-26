<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public static function MockedData(): array
    {
        return [
            [
                'title' => 'Portfolio',
                'link' => 'https://natansch-porfolio-devel.netlify.app/',
                'repository' => 'https://github.com/natanschneider/reactPortfolio/',
            ],
            [
                'title' => 'Pomodorish',
                'link' => 'https://pomodorish.netlify.app/',
                'repository' => 'https://github.com/natanschneider/pomodorish/',
            ],
            [
                'title' => 'Campeonato Brasileiro',
                'link' => 'https://tabelabrasileiroseriea.000webhostapp.com/',
                'repository' => 'https://github.com/natanschneider/TabelaBrasileirao/',
            ],
        ];
    }
}
