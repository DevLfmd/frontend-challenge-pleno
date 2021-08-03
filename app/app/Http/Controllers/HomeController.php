<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home')->with('data', [
            "services" => [
                [
                    "id" => 1,
                    "image" => "icon-1.png",
                    "title" => "Estamos Integrados",
                    "description" => "Os títulos e descrições destes itens devem ser requisitados de uma API fictícia. Utilize o json-server para simular uma API.",
                    "bgColor" => "#0195f5",
                    "color" => "#fff",
                    "icon" => "fas fa-heart"
                ],
                [
                    "id" => 2,
                    "image" => "icon-2.png",
                    "title" => "Estamos Integrados 2",
                    "description" => "Os títulos e descrições destes itens devem ser requisitados de uma API fictícia. Utilize o json-server para simular uma API.",
                    "bgColor" => "#FFF",
                    "color" => "#000",
                    "icon" => "fas fa-sun"
                ],
                [
                    "id" => 3,
                    "image" => "icon-3.png",
                    "title" => "Estamos Integrados 3",
                    "description" => "Os títulos e descrições destes itens devem ser requisitados de uma API fictícia. Utilize o json-server para simular uma API.",
                    "bgColor" => "#0195f5",
                    "color" => "#fff",
                    "icon" => "far fa-lightbulb"
                ]
            ],
            "clients" => [
                [
                    "id" => 1,
                    "title" => "Marcopolo",
                    "image" => "wp-content/uploads/2021/01/132_Ezoom_Logos_Marcopolo.png",
                    "link" => "https://ezoom.com.br/"
                ],
                [
                    "id" => 2,
                    "title" => "Supermercados Andrezza",
                    "image" => "wp-content/uploads/2021/01/18.png",
                    "link" => "https://ezoom.com.br/"
                ],
                [
                    "id" => 3,
                    "title" => "Vivo",
                    "image" => "wp-content/uploads/2021/01/12.png",
                    "link" => "https://ezoom.com.br/"
                ],
                [
                    "id" => 3,
                    "title" => "Viaje pelo Brasil",
                    "image" => "wp-content/uploads/2021/01/132_Ezoom_Logos_Viaje-Pelo-Brasil.png",
                    "link" => "https://ezoom.com.br/"
                ]
            ]
        ]);
    }
};
