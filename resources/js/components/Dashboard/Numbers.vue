<template>
    <div class="mt-24" :style="{backgroundColor: '#233142'}">
        <div class="grid grid grid-cols-2 gap-x-6 gap-y-8  ">
            <div class="numbers-image col-span-2 md:col-span-1">
            </div>
            <div class="col-span-2 md:col-span-1 rounded-lg p-10 text-center text-gray-500 shadow-xl">
                <div class=" border-b-2 pb-4 border-red-500">
                    <i class="fas fa-laptop-code text-info d-block text-center mb-2 text-red-500" style="font-size:32px"></i>
                    <h2 class="text-white text-3xl">Contenido nuevo todos los días</h2>
                    <p class="text-white">La formación online es el presente</p>
                </div>
                <div class=" grid grid grid-cols-3 gap-x-6 gap-y-8 pt-8">
                    <div class="col-span-3 sm:col-span-1 border-2 border-white px-5 py-2 text-white">
                        <h2 class="text-3xl">9</h2>
                        <p class="text-light">Cursos subidos</p>
                    </div>
                    <div class="col-span-3 sm:col-span-1 border-2 border-white px-5 py-2 text-white">
                        <h2 class="text-3xl">1</h2>
                        <p class="text-light">Manual</p>
                    </div>
                    <div class="col-span-3 sm:col-span-1 border-2 border-white px-5 py-2 text-white">
                        <h2 class="text-3xl">13</h2>
                        <p class="text-light">Artículos</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>

<script>

</script>
<style>
.numbers-image{
    background-image: url('/img/home/slider1.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
</style>
