<?php
require __DIR__ . '/partials/header.php';
?>

<!-- SECCIÓN DEL POST -->
<article class="max-w-4xl mx-auto">

    <!-- Encabezado del Post -->
    <div class="border-b border-gray-200 pb-8 mb-8">

        <!-- Título del Post -->
        <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl mb-4">
            <?= $post['titulo'] ?>
        </h1>

        <!-- Información del Autor y Fecha -->
        <p class="text-base text-gray-500 font-medium">
            <?= $infoAutor ?>
        </p>

    </div>

    <!-- Contenido Principal del Post -->
    <div class="prose prose-lg mb-8">
        <p class="text-gray-700 leading-relaxed text-justify">
            <?= $post['contenido'] ?>
        </p>
    </div>

    <!-- Metadatos del Post -->
    <div class="border-t border-gray-200 pt-6 mt-8">

        <!-- Contador de Palabras -->
        <div class="mb-6">
            <p class="text-sm text-gray-600">
                <span class="font-semibold">Número de palabras:</span>
                <span class="text-indigo-600 font-bold"><?= $numeroPalabras ?></span>
            </p>
        </div>

        <!-- Etiquetas / tags -->
        <div>
            <p class="text-sm font-semibold text-gray-700 mb-3">Etiquetas:</p>
            <div class="flex flex-wrap gap-2">
                <?= $tagsHTML ?>
            </div>
        </div>

    </div>

    <!-- Botón de Regreso -->
    <div class="mt-12 pt-6 border-t border-gray-200">
        <a href="/"
           class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Volver a Posts
        </a>
    </div>

</article>

<?php
require __DIR__ . '/partials/footer.php';
?>
