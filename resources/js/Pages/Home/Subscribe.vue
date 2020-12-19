<template>
    <app-layout>

        <section class="text-white p-10" :style="{backgroundColor: '#29303b'}">
            <h1 class="text-3xl">Ya has dado un paso más</h1>
            <p class="text-xl">¡Enhorabuena! Te has inscrito. Echa un vistazp a la primera lección para aprovechar la racha.</p>
        </section>

        <section>

            <div class="bg-gray-100">

                <div class=" flex justify-center">
                    <div class="w-2/3 mx-auto">
                        <div class="flex flex-row w-full">
                            <!-- left col -->

                            <div class="w-2/5 px-2 py-5">
                                <div class="flex flex-col w-full rounded-lg shadow bg-white px-4 py-2">
                                    <div class="text-gray-600">
                                        Buscar cursos
                                    </div>
                                </div>

                            </div>
                            <!--line column-->
                            <div class="w-1/5  flex justify-center">
                                <div class="relative flex h-full w-1 bg-green-300 items-center justify-center">
                                    <div class="absolute flex flex-col justify-center h-12 w-12 rounded-full border-2 border-green-300 leading-none text-center z-10 bg-white font-thin">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <!--right column-->
                            <div class="w-2/5 px-2 py-5 ">

                            </div>
                        </div>
                        <div class="flex flex-row w-full">
                            <!-- left col -->

                            <div class="w-2/5 px-2 py-5">

                            </div>
                            <!--line column-->
                            <div class="w-1/5  flex justify-center">
                                <div class="relative flex h-full w-1 bg-green-300 items-center justify-center">
                                    <div class="absolute flex flex-col justify-center h-12 w-12 rounded-full border-2 border-green-300 leading-none text-center z-10 bg-white font-thin">
                                        <i class="far fa-address-card"></i>
                                    </div>
                                </div>
                            </div>
                            <!--right column-->
                            <div class="w-2/5 px-2 py-5 ">
                                <div class="flex flex-col w-full rounded-lg shadow bg-white px-4 py-2">
                                    <div class="text-gray-600">
                                        Inscríbete en un curso
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row w-full">
                            <!-- left col -->

                            <div class="w-2/5 px-2 py-5">
                                <div class="flex flex-col w-full rounded-lg shadow bg-white px-4 py-2 relative">


                                    <div class="text-gray-600 flex justify-center  items-center">
                                        <span class="w-1/2">Ver lección</span>
                                        <inertia-link :href="route('cursos.course-status', this.course.slug)" class=" w-1/2 text-sm inline-flex items-center justify-center px-2 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500">
                                            Continuar
                                        </inertia-link>

                                    </div>



                                </div>

                            </div>
                            <!--line column-->
                            <div class="w-1/5  flex justify-center">
                                <div class="relative flex h-full w-1 bg-green-300 items-center justify-center">
                                    <div class="absolute flex flex-col justify-center h-12 w-12 rounded-full border-2 border-green-300 leading-none text-center z-10 bg-white font-thin">
                                        <i class="fas fa-play-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <!--right column-->
                            <div class="w-2/5 px-2 py-5 ">

                            </div>
                        </div>
                        <div class="flex flex-row w-full">
                            <!-- left col -->

                            <div class="w-2/5 px-2 py-5">

                            </div>
                            <!--line column-->
                            <div class="w-1/5  flex justify-center">
                                <div class="relative flex h-full w-1 bg-green-300 items-center justify-center">
                                    <div class="absolute flex flex-col justify-center h-12 w-12 rounded-full border-2 border-green-300 leading-none text-center z-10 bg-white font-thin">
                                        <i class="far fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <!--right column-->
                            <div class="w-2/5 px-2 py-5 ">
                                <div class="flex flex-col w-full rounded-lg shadow bg-white px-4 py-2">
                                    <div class="text-gray-600">
                                        Calificar curso
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section>


        <div class="border-2 border-orange-200">







            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                <div class="mt-8 text-2xl">
                    Esto es página de Subs
                </div>

                <div class="mt-6 text-gray-500">
                    Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                    to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                    you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                    ecosystem to be a breath of fresh air. We hope you love it.
                </div>
            </div>

        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {AppLayout},
    props:{
        course: null
    }
}
</script>
