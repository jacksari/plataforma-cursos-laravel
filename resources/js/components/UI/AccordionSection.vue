<template>
    <div class="bg-white">
        <h1 class="px-4 py-2 text-lg text-gray-600 font-bold border-b-2 border-gray-600">Contenido del curso</h1>
        <div class="mb-2 px-4" v-for="(section, index) in this.sections" :key="index">
            <h2 class="text-sm text-gray-800 my-2">{{section.name}}</h2>
            <ul>
                <li :class="{'bg-red-400': true}" class="text-xs text-gray-500 mb-2" v-for="(lesson, index) in section.lessons" :key="index">
                    <i v-if="lesson.completed" class="far fa-check-circle mr-2 text-blue-500"></i>
                    <i v-else class="far fa-circle mr-2 text-blue-500"></i>{{lesson.name}}

                </li>
            </ul>
        </div>
        <h1>{{this.setles}}</h1>
    </div>
</template>

<script>
import debounce from "lodash/debounce";

export default {
    props:{
        sections: null,
        current: null
    },
    data() {
        return {
            accordion: false,
            lesson: 1
        }
    },
    computed:{
        setles: function (){
            return true;
        }
    },
    watch: {
        current: {
            handler: debounce(function() {
                this.lesson = this.current
                console.log(this.lesson)
                console.log(this.setles)
            }, 100),
            deep: true,
        },

    },
    async mounted() {
        //console.log(this.sections)
        console.log(this.setles)
        console.log('current',this.current)
        console.log('sections', this.sections)
    }

}
</script>

<style>

</style>
