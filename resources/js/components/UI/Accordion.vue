<template>
    <div class="accordion ">
        <accordion-item v-for="(section, index) in this.sections" :key="index">
            <template #header>
                <h2 class="text-xl text-white">{{section.name}}</h2>
            </template>
            <template #content>
                <ul>
                    <li v-for="(lesson, index) in section.lessons" :key="index">
                        <i class="far fa-check-circle mr-2 text-blue-500"></i> {{lesson.name}}
                    </li>
                </ul>
            </template>
        </accordion-item>

    </div>
</template>

<script>
import AccordionItem from "@/components/UI/AccordionItem";
export default {
    components:{AccordionItem},
    props:['sections'],
    data() {
        return {
            accordion: false
        }
    },
    mounted() {
        //console.log(this.sections)
    }

}
</script>

<style>

</style>
