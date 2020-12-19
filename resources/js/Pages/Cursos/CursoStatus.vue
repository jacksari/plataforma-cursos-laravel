<template>
    <status-layout :title="curso.title" :slug="curso.slug">

        <div class="grid grid-cols-4 mb-20">
            <section class="col-span-3 video mb-20">

                <video-course :arrayLessons="this.arrayLessons"  :current="this.current" :section_current="this.section_current"/>

                <div v-if="this.vistacourse" class=" shadow-lg p-4">
                    <div class="ml-5 flex justify-between">
                        <h2 class="font-bold text-xl">Lección {{this.lessonNum}}: <span class="font-light text-sm">{{this.title_current}}</span></h2>
                        <form @submit.prevent="activelesson(current)">
                            <button v-if="!this.active" type="submit" class="flex items-center  cursor-pointer">
                                <i class="fas fa-toggle-off text-2xl text-gray-600 mr-2"></i> Marcar como culminado
                            </button>
                            <button v-else type="submit" class="flex items-center  cursor-pointer">
                                <i class="fas fa-toggle-on text-2xl text-blue-600 mr-2"></i> Desmarcar como culminado
                            </button>
                        </form>

                    </div>
                </div>

                <div v-if="this.vistacourse" class="flex justify-between bg-white m-5 shadow-lg p-4">
                    <button v-bind:disabled="this.lessonNum == 1" v-on:click="anterior">
                        <i class="fas fa-angle-left mr-2"></i>Tema anterior
                    </button>
                    <button v-bind:disabled="this.lessonNum == this.lessonTotal" v-on:click="siguiente">
                        Siguiente tema<i class="fas fa-angle-right ml-2"></i>
                    </button>
                </div>
                <div v-if="this.completecurso" class="flex justify-center items-center bg-white m-5 shadow-lg px-4 py-8">
                    <h1 class="text-3xl">Felicidades, terminaste el curso con éxito</h1>
                </div>
                <video-questions/>
            </section>
            <section class="col-span-1 border-l-2 border-red-200 sections">
                <div class="bg-white">
                    <div class="relative pt-1">
                        <p class="text-gray-600 text-sm mt-2 mx-2">{{this.porcentaje}}% completado </p>
                        <div class="mx-2 overflow-hidden h-2 mb-4 text-xs flex rounded bg-red-200">
                            <div :style="{width: porcentaje+'%'}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500 transition-all duration-500"></div>
                        </div>
                    </div>
                    <h1 class="px-4 text-lg text-gray-600 pb-2 font-bold border-b-2 border-gray-600">Contenido del curso</h1>
                    <div class="acordion-page  my-2">
                        <div class=" my-2" v-for="(section, index) in this.arrayLessons" :key="index">
                            <h2 class="mx-3 text-sm text-gray-800 my-2 font-bold text-base">{{section.section_name}}</h2>
                            <ul class="">
                                <li v-for="(lesson, index) in section.lesson" v-on:click="clicklesson(lesson.lesson,lesson.num,lesson.complete,lesson.name)" class=" item-lesson cursor-pointer text-xs text-gray-500 mb-2">
                                    <div class="ml-3 p-3 flex items-center">
                                        <i v-if="lesson.complete" class="far fa-check-circle mr-2 text-blue-600 text-base"></i>
                                        <i v-else class="far fa-circle mr-2 text-blue-600 text-base"></i><div>{{lesson.name}}</div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </section>
        </div>


    </status-layout>
</template>

<script>
import StatusLayout from "@/Layouts/StatusLayout";
import AccordionSection from '@/components/UI/AccordionSection';
import VideoCourse from "@/components/Dashboard/VideoCourse";
import debounce from "lodash/debounce";
import VideoQuestions from "@/components/Dashboard/VideoQuestions";
export default {
    components: {VideoQuestions, VideoCourse, AccordionSection, StatusLayout},
    props:{
        curso: null,
        sections: null
    },
    data() {
        return {
            current: 1,
            title_current: null,
            section_current: null,
            lessonNum: 0,
            lessonTotal: 0,
            arrayLessons:[],
            contador:[],
            porcentaje: 0,
            complete:0,
            active: null,
            completecurso: false,
            vistacourse: true,
        }
    },
    methods:{
        activelesson(id){
            let contador = 0;

            this.active = !this.active

            if(this.active == false){
                this.complete = this.complete-1;
            }else{
                this.complete = this.complete+1;

            }
            for(let i=0; i < this.arrayLessons.length; i++){
                for(let j=0; j < this.arrayLessons[i].lesson.length; j++){

                    console.log(this.arrayLessons[i].lesson[j].complete)
                    if(this.arrayLessons[i].lesson[j].lesson == id){
                        //console.log(this.arrayLessons[i].lesson[j].lesson)
                        this.arrayLessons[i].lesson[j].complete = !this.arrayLessons[i].lesson[j].complete
                    }
                }
            }

            this.porcentaje = Math.round(((this.complete)/this.lessonTotal)*100)


            this.$inertia.post(this.route('lesson', id), {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => {
                    console.log('inscrito')
                },
                onFinish: () => {
                    console.log('fin')
                },
            })
            if(this.complete == this.lessonTotal){
                this.completecurso = true;
            }else {
                this.completecurso = false;
            }

        },
        activeItem(){
            let item
            for(let i=0; i< this.lessonTotal; i++){
                //console.log(this.lessonNum)
                if(this.lessonNum == i+1){
                    item = document.getElementsByClassName('item-lesson')[i];
                    item.className = 'activeitem item-lesson cursor-pointer text-xs text-gray-500 mb-2'
                }else{
                    item = document.getElementsByClassName('item-lesson')[i];
                    item.className = 'inactiveitem item-lesson cursor-pointer text-xs text-gray-500 mb-2'
                }
            }
            console.log(item);

        },
        clicklesson(id,num,complete,name){
            this.current = id;
            this.lessonNum = num+1;
            //console.log('id',id)
            this.active = complete
            this.title_current = name
            this.completecurso = false
        },
        async siguiente(){
            this.lessonNum++;
            for(let j = 0; j < this.contador.length; j++){
                //console.log(this.arrayLessons[j])
                if(this.contador[j].num == this.lessonNum-1){
                    //console.log(this.arrayLessons[j].lesson)
                    this.current = this.contador[j].lesson
                    this.active = this.contador[j].complete
                    this.title_current = this.contador[j].name
                    this.lessonNum = this.contador[j].num+1
                }
            }
            this.completecurso = false
        },
        async anterior(){
            this.lessonNum--;
            for(let j = 0; j < this.contador.length; j++){
                //console.log(this.arrayLessons[j])
                if(this.contador[j].num == this.lessonNum-1){
                    //console.log(this.arrayLessons[j].lesson)
                    this.current = this.contador[j].lesson
                    this.active = this.contador[j].complete
                    this.title_current = this.contador[j].name
                    this.lessonNum = this.contador[j].num+1
                }
            }
            this.completecurso = false
        }
    },
    watch: {
        current: {
            handler: debounce(function() {
                this.activeItem()
                let contador = 0;
                for(let i=0; i < this.arrayLessons.length; i++){
                    for(let j=0; j < this.arrayLessons[i].lesson.length; j++){
                        console.log(this.arrayLessons[i].lesson[j].complete)
                        if(this.arrayLessons[i].lesson[j].complete == true){
                            contador++;
                        }
                    }
                }
                this.complete = contador;

                this.porcentaje = Math.round(((this.complete)/this.lessonTotal)*100)

            }, 10),
            deep: true,

        },
        complete: {
            handler: debounce(function() {
                if(this.complete == this.lessonTotal){
                    this.completecurso = true
                }else{
                    this.completecurso = false;
                }

            }, 10),
            deep: true,

        }
    },
    async mounted(){
        //console.log(this.sections)
        let secciones = []
        let lecciones = []
        this.sections.forEach(section=>{

            section.lessons.forEach(lesson =>{

                let i = this.lessonTotal++
                let car = {
                    'lesson' : lesson.id,
                    'num': i,
                    'name': lesson.name,
                    'section': section.id,
                    'complete': lesson.completed
                }
                let car1 = {
                    'num': i,
                    'lesson': lesson.id,
                    'complete': lesson.completed,
                    'name': lesson.name,
                }
                this.contador.push(car1)
                lecciones.push(car)
            })

            let name = {
                'section_name': section.name,
                'lesson': lecciones,

            };

            this.arrayLessons.push(name)
            lecciones = []

        })
        let u = 0;
        this.contador.forEach(cont=>{
            if(cont.complete == true){
                u++
            }
        })
        console.log('u',u)

        if(u == this.lessonTotal){
            this.completecurso = true;
            this.porcentaje = 100;
        }else{
            this.completecurso = false;
        }
        //console.log(this.arrayLessons)
        for (let i = 0; i < this.sections.length; i++){
            for(let j = 0; j < this.sections[i].lessons.length; j++){
                this.lessonNum++
                if(this.sections[i].lessons[j].completed == false){

                    this.current = this.sections[i].lessons[j].id
                    this.section_current = this.sections[i].id
                    this.active = this.sections[i].lessons[j].completed
                    this.title_current = this.sections[i].lessons[j].name
                    break
                }
            }
            if(this.section_current != null){
                break
            }
        }
    }
}
</script>

<style>
.video{
    height: 488px;
    background-color: #5f72be;
}
.inactiveitem{
    border-bottom: 1px solid transparent;
    border-top: 1px solid transparent;
}
.activeitem{
    background-color: #29303b4d;
    color: black;
}
button:disabled{
    opacity: 0.5;
    cursor: default;
}
.acordion-page{
    max-height: 600px;
    overflow-y: scroll;
}
</style>
