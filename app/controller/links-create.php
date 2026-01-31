<?php
$title = "Proyectos";
//$posts = $db->query(sql: 'SELECT * FROM posts ORDER BY id DESC LIMIT 6')->get(); //peticion a la base de datos 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'] ?? '';
    $url = $_POST['url'] ?? '';
    $description = $_POST['description'] ?? '';
    $erros = [];
}

if( empty($title)){
    $erros[] = "El título es obligatorio";
} 

if( empty($url)){
    $erros[] = "La URL es obligatoria";
} 

if (empty($description)){
    $erros[] = "La descripción es obligatoria";
} 

// para pasar varaibles a la base de datos se utiliza ':title', ':url', ':description' con : en lugar de $
if (empty($erros)){
    $db->query('INSERT INTO links (title, url, description) VALUES (:title, :url, :description)', [
        'title' => $title,
        'url' => $url,
        'description' => $description
    ]);
    
    header('Location: /links'); //Redirige a la pagina de links

}



require __DIR__ . '/../../resources/links-create.template.php'; //Redirigue a la plantilla 

