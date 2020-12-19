<template>
    <app-layout>
        <div class="">

            <section class="home-curso">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 text-white ">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="font-bold text-4xl">Los mejores cursos de programación ¡GRATIS! y en español.</h1>
                    <p class="text-lg mt-2">Si estás buscando potenciar tus conocimientos de programación, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en ese proceso</p>
                        <div class="w-full pt-2 relative mx-auto text-gray-600">
                            <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                   type="search" name="search" placeholder="Search">
                            <button type="submit" class="absolute right-0 top-0 mt-2 inline-flex items-center h-10 justify-center px-5  border border-transparent rounded-md text-white bg-purple-600 hover:bg-purple-700">
                                Get started
                            </button>
                        </div>
                </div>
                </div>
            </section>

            <div class="bg-gray-200 py-4">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
                    <button v-on:click="search('todo','todo')" class="text-gray-600 px-4 bg-white shadow h-12 px-4 rounded-lg text-gray-600block h-12 overflow-hidden focus:outline-none mr-4">
                        <i class="fas fa-archway text-xs mr-2"></i>
                        Todos los cursos
                    </button>

                    <!-- // Dropdown -->
                    <jet-dropdown>
                        <template #trigger>
                            <button class="mr-4 text-gray-600 px-4 bg-white shadow h-12 px-4 rounded-lg text-gray-600block h-12 overflow-hidden focus:outline-none">
                                <i class="fas fa-tags text-sm mr-2"></i>
                                Categoria
                                <i class="fas fa-angle-down text-sm ml-2"></i>
                            </button>
                        </template>
                        <template #content>
                            <div v-for="(categoria, index) in categorias" :key="index">
                                <span v-on:click="search('categoria',categoria)" href="#" class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
                                    {{categoria.name}}
                                </span>
                                <div class="py-2">
                                    <hr></hr>
                                </div>
                            </div>
                        </template>
                    </jet-dropdown>
                    <jet-dropdown>
                        <template #trigger>
                            <button class="mr-4 text-gray-600 px-4 bg-white shadow h-12 px-4 rounded-lg text-gray-600block h-12 overflow-hidden focus:outline-none">
                                <i class="fas fa-tags text-sm mr-2"></i>
                                Niveles
                                <i class="fas fa-angle-down text-sm ml-2"></i>
                            </button>
                        </template>
                        <template #content>
                            <div v-for="(nivel, index) in niveles" :key="index">
                                <span v-on:click="search('nivel',nivel)" href="#" class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
                                    {{nivel.name}}
                                </span>
                                <div class="py-2">
                                    <hr></hr>
                                </div>
                            </div>
                        </template>
                    </jet-dropdown>
                </div>
            </div>




            <NewCourses :courses="courses" title="CATÁLOGO DE  CURSOS" :total="this.total" :to="this.to" :from="this.from" :buscador="this.buscador"/>

            <Pagination  :to="this.to" :from="this.from" :current_page="this.current_page" :paginas="this.paginas"/>

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 mt-24">


                <div class="mt-8 text-2xl">
                    Esto es página de Cursos
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
import JetDropdown from '@/Jetstream/Dropdown';
import JetDropdownLink from '@/Jetstream/DropdownLink';
import Pagination from '@/components/UI/Pagination';
import debounce from 'lodash/debounce'
import pickBy from 'lodash/pickBy'

import { mapActions, mapMutations, mapState} from 'vuex';
import NewCourses from "@/components/Dashboard/NewCourses";

export default {
    components: {NewCourses, AppLayout,JetDropdown, JetDropdownLink, Pagination},
    props: {
        categorias: null,
        niveles: null,
    },
    data() {
        return {
            buscador:null,
            courses: Object,
            to: null,
            from: null,
            current_page: null,
            paginas: null,
            total:null,
            form:{
                formTodos: 'todo',
                formCategoria: null,
                formNivel: null
            }
        }
    },
    methods: {
        ...mapMutations('course', ['setPage']),
        async listarCursos(page,form){
            let url = `/cursos-listado?page=${page}`;
            if(form.formTodos){
                url = `/cursos-listado?page=${page}&todo=${form.formTodos}`
            }else if(form.formCategoria){
                url = `/cursos-listado?page=${page}&categoria=${form.formCategoria}`
            }else if(form.formNivel){
                url = `/cursos-listado?page=${page}&nivel=${form.formNivel}`
            }
            //console.log('url',url)
            let data = await fetch(url);
            let cursos = await data.json();
            //console.log(cursos)
            this.courses = cursos.courses;
            this.current_page = cursos.pagination.current_page;
            this.to = cursos.pagination.to;
            this.from = cursos.pagination.from;
            this.paginas = cursos.pagination.paginas;
            this.total = cursos.pagination.total
        },
        search(tipo, search){

            if(tipo == 'todo'){
                this.form.formTodos = search;
                this.buscador = 'Todos'
            }else if(tipo == 'categoria'){
                this.form.formCategoria = search.id
                this.form.formTodos = null;
                this.form.formNivel = null;
                this.buscador = search.name;
            } else if(tipo == 'nivel'){
                this.form.formNivel = search.id;
                this.form.formTodos = null;
                this.form.formCategoria = null;
                this.buscador = search.name;
            }
            this.setPage(1);
        }
    },
    computed:{
        ...mapState('course',['page'])
    },
    watch: {
        page: {
            handler: debounce(function() {
                this.listarCursos(this.page,this.form);
                //let query = pickBy(this.courses)
                //console.log('query hola', this.page)
                //this.$inertia.replace(this.route('projects.index', query))
            }, 500),
            deep: true,
        },
        form:{
            handler: debounce(function() {
                this.listarCursos(this.page,this.form);
                //let query = pickBy(this.courses)
                //console.log('query hola')
                //this.$inertia.replace(this.route('projects.index', query))
            }, 500),
            deep: true,
        }
    },
    mounted() {
        this.listarCursos(this.page,this.form);
        this.buscador = 'Todos'
    }
}

</script>

<style>
.home-curso{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/img/home/curso-home.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
</style>
