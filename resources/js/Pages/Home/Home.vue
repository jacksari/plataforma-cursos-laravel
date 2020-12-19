<template>
    <app-layout>
        <div class="">

            <div class="">
                <Carrousel/>
            </div>

            <Search/>

            <Contenido/>

            <Slider
                title="¿No sabes qué curso llevar?"
                subtitle="Dirígete al catálogo de cursos y filtralos por categoría o nivel"
                color="#233142"
            />

            <NewCourses :courses="courses" title="ÚLTIMOS CURSOS"/>

            <Advantage/>

            <Numbers/>

            <Pricing/>

            <Company/>


        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Carrousel from "@/components/Dashboard/Carrousel";
import Search from '@/components/Dashboard/Search'
import Contenido from '@/components/Dashboard/Contenido'
import Slider from "@/components/Dashboard/Slider";
import NewCourses from '@/components/Dashboard/NewCourses'
import Advantage from '@/components/Dashboard/Advantage'
import Numbers from '@/components/Dashboard/Numbers'
import Company from '@/components/Dashboard/Company'
import Pricing from '@/components/Dashboard/Pricing'
export default {
    components: {Slider, Carrousel, AppLayout, Search, Contenido, NewCourses, Advantage, Numbers,Company, Pricing},
    props: {
        courses: null
    }
}
</script>
