<template>
    <inertia-link
        :href="route('cursos.show', this.curso.slug)"
        class="grid grid-cols-2 mt-4 pb-2 border-b-2 border-gray-400"
    >
        <img class="h-28 w-full object-cover" :src="this.url" :alt="this.curso.title">
        <div class="px-2 pr-2">
            <h2 class="text-sm">{{this.curso.title.slice(0,40) + (this.curso.title.length > 40 ? "..." : "")}}</h2>
            <div class="flex justify-between items-center mt-2 pr-5">
                <img class="h-8 rounded-full overflow-hidden border-2 border-gray-200" :src="this.curso.teacher_url" alt="">
                <h2 class="text-sm">Prof. {{this.curso.teacher_name}}</h2>
            </div>
            <span class="text-sm mr-5"><i class="fas fa-star mr-2 estrella"></i>{{this.curso.rating}}</span>
        </div>
    </inertia-link>
</template>

<script>
export default {
    props: {
        curso:null
    },
    data() {
        return {
            url: null,
        }
    },
    async mounted() {
        this.url = `/storage/${this.curso.url}`;
    }
}

</script>
<style>
.estrella{
    color: #facf5a !important;
}
</style>
