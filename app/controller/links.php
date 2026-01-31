<?php
$title = "Proyectos";

$enlacesCategorizados = [
    "Herramientas de Desarrollo" => [
        [
        "url" => "https://github.com/",
        "descripcion" => "Plataforma de desarrollo colaborativo para alojar y revisar código, gestionar proyectos y construir software."
        ],
        [
        "url" => "https://code.visualstudio.com/",
        "descripcion" => "Editor de código fuente desarrollado por Microsoft, ligero pero potente con soporte para debugging y Git."
        ]
    ],

    "Recursos de Aprendizaje" => [
        [
        "url" => "https://www.w3schools.com/",
        "descripcion" => "Sitio oficial de PHP con documentación completa, manuales y recursos para desarrolladores."
        ],
        [
        "url" => "https://www.php.net/",
        "descripcion" => "Plataforma de desarrollo colaborativo para alojar y revisar código, gestionar proyectos y construir software."
        ]
    ],

    "Frameworks y Librerías" => [
        [
        "url" => "https://laravel.com/",
        "descripcion" => "Framework PHP para aplicaciones web con sintaxis elegante, incluye ORM Eloquent y sistema de plantillas Blade."
        ],
        [
        "url" => "https://tailwindcss.com/",
        "descripcion" => "Framework CSS utility-first para construir diseños personalizados rápidamente sin salir del HTML."
        ]
    ]
];

require __DIR__ . '/../../resources/links.template.php';


