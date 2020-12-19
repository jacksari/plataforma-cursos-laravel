<template>
    <article class="bg-white shadow-lg rounded-lg overflow-hidden col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
        <p class="absolute bg-red-500 px-2 py-0 mt-3 ml-3 rounded-xl text-sm text-white font-light">{{this.course.category}}</p>
        <img class="h-36 w-full object-cover" :src="this.url" :alt="course.title">
        <div class="px-6 py-4">
            <h1 class="text-xl text-gray-700 mb-2 leading-6">{{this.course.title.slice(0,40) + (this.course.title.length > 40 ? "..." : "")}}</h1>
            <p class="text-gray-500 mb-2">Prof: {{this.course.teacher}}</p>
            <div class="flex">
                <ul class="flex text-sm">
                    <li class="mr-1"><i class="fas fa-star luna" :class="{'estrella': this.course.rating >= 1}"></i></li>
                    <li class="mr-1"><i class="fas fa-star luna" :class="{'estrella': this.course.rating >= 2}"></i></li>
                    <li class="mr-1"><i class="fas fa-star luna" :class="{'estrella': this.course.rating >= 3}"></i></li>
                    <li class="mr-1"><i class="fas fa-star luna" :class="{'estrella': this.course.rating >= 4}"></i></li>
                    <li class="mr-1"><i class="fas fa-star luna" :class="{'estrella': this.course.rating >= 5}"></i></li>
                </ul>
                <p class="text-sm text-gray-500 ml-auto">
                    <i class="fas fa-users"></i>
                    ({{this.course.students_count}})
                </p>
            </div>

            <inertia-link :href="route('cursos.show', this.course.slug)" class="w-full text-sm mt-5 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500">
                Más información
            </inertia-link>
        </div>
    </article>
</template>

<script>

export default {
    props:{
        course:null
    },
    data() {
        return {
            url: null
        }
    },
    computed:{

    },
    async mounted() {
        this.url = `/storage/${this.course.url}`;
        //console.log(this.course)
    }
}
</script>

<style>
.estrella{
    color: #facf5a !important;
}
.luna{
    color: #a0aec0;
}
</style>
