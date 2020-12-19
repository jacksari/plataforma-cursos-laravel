<template>
    <inertia-link :href="route('cursos.course-status', this.course.slug)" class=" leading-5 text-sm overflow-hidden">
        <div class="flex justify-center p-5 ">
            <div class="bg-white rounded w-full p-4 shadow-lg">
                <div class="flex flex-col">
                    <div class="flex justify-between items-center mb-2">

                        <span v-if="this.complete" class="text-xs bg-blue-400 rounded px-2 py-1 text-white">Completado</span>

                        <span v-else class="text-xs bg-red-400 rounded px-2 py-1 text-white text-center">Sin culminar</span>
                        <span class=" block text-xs uppercase text-blue-400">{{this.course.categoria}}</span>
                    </div>
                    <div class="w-full">
                        <h1 class="h-20 font-semibold text-lg overflow-hidden">
                            {{this.course.name_course}}
                        </h1>
                    </div>
                </div>
                <div class="py-4 text-sm h-40 overflow-hidden">
                    {{this.course.description}}
                </div>
                <div class="flex">
                    <div class="w-1/2 flex-col">
                        <span class="flex justify-center text-2xl font-semibold">{{this.lessons}}</span>
                        <span class="flex justify-center text-gray-500">Lessons</span>
                    </div>
                    <div class="w-1/2 flex-col">
                        <span class="flex justify-center text-2xl font-semibold">{{this.sections}}</span>
                        <span class="flex justify-center text-gray-500">Sections</span>
                    </div>
                </div>
                <div class="flex">
                    <span class="text-xs font-semibold py-1">Progress</span>
                    <span class="text-xs font-semibold py-1 ml-auto text-blue-600">{{this.porcentaje}}%</span>
                </div>
                <div class="relative pt-1">
                    <div class="mx-2 overflow-hidden h-2 mb-4 text-xs flex rounded bg-red-200">
                        <div :style="{width: porcentaje+'%'}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500 transition-all duration-500"></div>
                    </div>
                </div>

            </div>
        </div>
    </inertia-link>

</template>

<script>
export default {
    props:{
        course: null,
    },
    data(){
        return{
            complete:null,
            porcentaje: null,
            lessons: null,
            sections:null
        }
    },
    mounted() {
        let total=0;
        let completado=0;
        this.course.sections.forEach(section=>{
            this.sections++
            section.lessons.forEach(lesson=>{
                if(lesson.completed == true){
                    completado++
                }
                total++
                this.lessons++
            })
        })
        let percent = Math.round((completado/total)*100);
        if(percent == 100){
            this.complete = true
        }else{
            this.complete = false
        }
        this.porcentaje = percent
    }
}
</script>
