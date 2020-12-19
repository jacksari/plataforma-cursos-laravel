<template>
    <div class="mt-16">
        <h1 class="text-center text-3xl text-gray-600">{{this.title}}</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajamos duro para seguir subiendo cursos</p>
        <div v-if="buscador" class="flex justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-gray-500">
                <p class="text-2xl">{{this.total}} resultados encontrados para {{this.buscador}}</p>
            </div>
            <div>
                <p class="text-2xl">Resultados encontrados desde {{this.from}} hasta {{this.to}}</p>
            </div>
        </div>
        <div v-if="courses"  class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-4 gap-x-6 gap-y-8 mt-10">
            <CardCourse v-for="(course, index) in courses" :key="index" :course="course"/>
        </div>
        <div v-if="courses == 0" class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8 gap-x-6 gap-y-8 mt-10 bg-white shadow mx-20 rounded-lg">
            <h1 class="text-4xl text-gray-600">Sin cursos por el momento. 😓😓😓</h1>
        </div>
    </div>
</template>

<script>
import CardCourse from "@/components/Dashboard/CardCourse";
export default {
    components: {CardCourse},
    props: {
        courses: null,
        title: null,
        total: null,
        to: null,
        from: null,
        buscador: null
    }
}
</script>
