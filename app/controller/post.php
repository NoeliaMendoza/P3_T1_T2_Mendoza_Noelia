<?php
$title = "Posts";

//Arreglo  asociativo con la información del post
$post = [
    //Datos del post
    'titulo' => 'Inteligencia Artificial: Transformando el Futuro de la Tecnología',
    'autor' => 'Jerson Mendoza',
    'fecha' => '2026-01-28',

    // Contenido del artículo
    'contenido' => 'La inteligencia artificial ha dejado de ser una promesa futurista
                    para convertirse en una realidad cotidiana que está revolucionando
                    múltiples industrias. Desde asistentes virtuales en nuestros teléfonos
                    hasta sistemas de diagnóstico médico avanzado, la IA está transformando
                    la manera en que vivimos y trabajamos. El machine learning, una rama
                    fundamental de la IA, permite a las máquinas aprender de datos sin ser
                    explícitamente programadas, abriendo posibilidades infinitas. Empresas
                    de todo el mundo están invirtiendo miles de millones en investigación y
                    desarrollo, reconociendo que la IA será el motor de innovación de
                    las próximas décadas. Los avances en procesamiento de lenguaje natural,
                    visión por computadora y redes neuronales profundas están creando
                    aplicaciones que antes parecían imposibles, marcando el inicio de una
                    nueva era tecnológica.',

    //Etiquetas asociadas al post
    'tags' => ['Inteligencia Artificial', 'Machine Learning', 'Tecnología', 'Innovación', 'Deep Learning'],
];

//Funciones para el post
/*Estas funciones se encargan de procesar y formatear partes
específicas del arreglo $post antes de enviarlas a la vista.*/

//Esta función genera una cadena con la información del autor y la fecha de publicación
function formatear_info_autor(array $postData): string
{
    // Concatena el texto con los valores del arreglo
    return "Publicado por " . $postData['autor'] . " el " . $postData['fecha'];
}

//Esta función genera el HTML para las etiquetas del post cada etiqueta se envuelve en un span
function renderizar_tags_html(array $tags): string
{
    //variable para almacenar el HTML generado
    $tagshtml = '';
    //Itera sobre cada etiqueta
    foreach ($tags as $tag) {
        //Construye el HTML para cada etiqueta
        $tagshtml .= "<span class='inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium mr-2 mb-2'>"
        . htmlspecialchars($tag)
            . "</span>";
    }
    //Retorna el HTML completo de las etiquetas
    return $tagshtml;
}

//Esta función cuenta el número de palabras en el contenido del post
function contar_palabras(string $contenido): int
{
    //Elimina etiquetas HTML si las hubiera
    $texto = strip_tags($contenido);
    //Elimina espacios al inicio y al final
    $texto = trim($texto);
    //Reemplaza múltiples espacios o saltos de línea por un solo espacio
    $texto = preg_replace('/\s+/', ' ', $texto);
    //Divide el texto por espacios y cuenta los elementos
    return count(explode(' ', $texto));
}

$title = "Post - " . $post['titulo'];

// Se ejecutan las funciones y se almacenan sus resultados en variables.
$infoAutor      = formatear_info_autor($post);
$tagsHTML       = renderizar_tags_html($post['tags']);
$numeroPalabras = contar_palabras($post['contenido']);

//Carga la pantilla que renderiza los datos en HTML.
require __DIR__ . '/../../resources/post.template.php';
