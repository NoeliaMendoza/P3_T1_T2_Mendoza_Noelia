<?php require __DIR__ . '/partials/header.php'; ?>

<div class="border-b border-gray-200 pb-8 mb-8">
    <h2 class="text-4xl font-semibold text-gray-900 sm:text-5xl">
        Herramientas recomendadas
    </h2>

    <p class="text-lg text-gray-600 w-full max-w-4xl mt-4">
      Bienvenido a nuestra colección de recursos y herramientas de desarrollo web. Aquí encontrarás
      materiales seleccionados para ayudarte a aprender, experimentar y mejorar tus habilidades.
    </p>

</div>

<!-- Implementación del arreglo $enlacesCategorizados -->
<!-- Bucle externo para iterar en cada categoría del arreglo bidimensional-->
<?php foreach ($enlacesCategorizados as $categoria => $enlaces): ?>

    <!-- Título de la categoría -->
    <div class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-gray-800">
            <?= $categoria ?>
        </h2>

        <!-- Lista desordenada para los enlaces de la categoría -->
        <ul class="space-y-3">

            <!-- Bucle interno para iterar sobre cada enlace dentro de la categoría -->
            <?php foreach ($enlaces as $enlace): ?>

                <!-- Elemento de lista para cada enlace -->
                <li class="flex items-start">

                    <div class="flex-1">
                        <!-- Hipervínculo con la URL -->
                        <a href="<?= $enlace['url'] ?>"
                           target="_blank"
                           class="text-indigo-600 font-medium">
                            <?= $enlace['url'] ?>
                        </a>

                        <!-- Descripción del enlace -->
                        <p class="text-sm text-gray-600 mt-1 leading-relaxed">
                            <?= $enlace['descripcion'] ?>
                        </p>
                    </div>
                </li>

            <?php endforeach; ?>
            <!-- Fin del bucle interno -->

        </ul>
        <!-- Fin de la lista -->
    </div>

<?php endforeach; ?>
<!-- Fin del bucle externo -->

<div class="my-16">
    <a href="/links/create" class="text-sm font-semibold text-gray-900">
        Registrar &rarr;
    </a>
</div>


<?php require __DIR__ . '/partials/footer.php'; ?>

