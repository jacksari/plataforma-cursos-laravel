<template>
    <app-layout>
        <section class="bg-blue-800 mx-auto px-4 sm:px-6 lg:px-8 py-10 text-white ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <figure>
                    <img class="rounded-lg h-80 w-full object-cover" :src='this.url' alt="">
                </figure>
                <div>
                    <h1 class="text-4xl ">{{this.curso.title}}</h1>
                    <h2 class="text-lg mb-3">{{this.curso.subtitle}}</h2>
                    <p class="mb-2"><i class="far fa-calendar-alt"></i> Última actualización: {{this.setUpdated}}</p>
                    <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{this.curso.level.name}}</p>
                    <p class="mb-2"><i class="fas fa-boxes"></i> Categoría: {{this.curso.categoria.name}}</p>
                    <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{this.curso.students_count}}</p>
                    <p class="mb-2"><i class="far fa-star"></i> Calificación: {{this.curso.rating}}</p>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <div class="">
                    <section class="bg-white shadow-lg rounded-lg mb-5 p-5">

                        <div class="grid grid-cols-2">
                            <div>
                                <h2 class="text-xl mb-3">Metas del curso</h2>
                                <ul>
                                    <li
                                        v-for="(goals, index) in this.curso.goals"
                                        :key="index"
                                        class="text-gray-700 text-sm list-inside mb-1"
                                    ><i class="fas fa-check text-sm"></i> {{goals.name}}</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="text-xl mb-3">Requisitos del curso</h2>
                                <ul>
                                    <li
                                        v-for="(requirements, index) in this.curso.requirements"
                                        :key="index"
                                        class="text-gray-700 text-sm list-inside mb-1"
                                    ><i class="fas fa-check text-sm"></i> {{requirements.name}}</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="bg-white shadow-lg rounded-lg mb-5 p-5">
                        <h2 class="text-xl mb-3">Descripción: </h2>
                        <p class="text-gray-700">{{this.curso.description}}</p>

                    </section>

                    <section class="">
                        <h1 class="font-bold text-2xl my-4 border-b-2 border-gray-400">Lo que aprenderás</h1>
                        <Accordion :sections="this.sections"/>
                    </section>
                </div>

            </div>
            <div class="col-span-1">
                <div class="bg-white shadow-lg rounded-lg mb-5 p-5">
                    <div class="grid grid-cols-4 px-5 gap-x-5">
                        <div class="col-span-1 ">
                            <img class="rounded-full overflow-hidden border-2 border-gray-200" :src="this.curso.teacher_url" alt="">
                        </div>
                        <div class="col-span-3">
                            <h2 class="text-xl">Prof. {{this.curso.teacher_name}}</h2>
                            <a class="text-sm text-blue-500 lowercase" href="/">@{{this.curso.teacher_name}}</a>
                        </div>
                    </div>
                    <div v-if="!$page.user">
                        <inertia-link :href="route('login')" class="w-full text-sm mt-5 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-400 hover:bg-red-500">
                            <i class="fas fa-plus-circle mr-2"></i> Llevar curso
                        </inertia-link>
                    </div>
                    <form v-else-if="!this.can" @submit.prevent="enrolled">
                        <button type="submit" class="w-full text-sm mt-5 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-400 hover:bg-red-500">
                            <i class="fas fa-plus-circle mr-2"></i> Llevar curso
                        </button>
                    </form>
                    <div v-else>
                        <inertia-link :href="route('cursos.course-status', this.curso.slug)" class="w-full text-sm mt-5 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500">
                            Continuar aprendiendo
                        </inertia-link>
                    </div>

                </div>

                <div class="bg-white shadow-lg rounded-lg mb-5 p-3">
                    <h2 class="text-xl mb-3">Cursos relacionados: </h2>
                    <CardCourseMini v-for="(course, index) in this.courses" :key="index" :curso="course"/>
                </div>
            </div>
        </div>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Accordion from '@/components/UI/Accordion'
import moment from 'moment';
import CardCourseMini from "@/components/Dashboard/CardCourseMini";
export default {
    components: {CardCourseMini, AppLayout,Accordion},
    data() {
        return {
            curso: this.course[0],
            url: null,
            can: null
        }
    },
    props: {
        course:null,
        courses: null,
        sections: null
    },
    computed:{
      setUpdated(){
          moment.locale('es');
          return moment(this.curso.updated_at).format('LL');
      }
    },
    methods: {
        enrolled(){
            this.$inertia.post(this.route('cursos.enrolled', this.curso.id), {
                onSuccess: () => {
                    Inertia.visit('/home', { preserveScroll: true })
                    console.log('inscrito')
                },
                onFinish: () => {
                    console.log('fin')
                },
            })
        }
    },
    async mounted() {
        console.log(this.curso)
        this.url = `/storage/${this.curso.url}`
        this.can = this.curso.inscrito.can
    }
}
</script>

