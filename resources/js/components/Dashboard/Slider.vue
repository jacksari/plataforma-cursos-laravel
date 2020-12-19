<template>
    <div class="mt-24 text-white py-12 text-center" :style="{backgroundColor: this.color}">
        <h1 class=" text-3xl">{{this.title}}</h1>
        <p>{{this.subtitle}}</p>

        <inertia-link :href="route('cursos')" class="mt-5 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
            Get started
        </inertia-link>
    </div>
</template>

<script>
export default {
    props: {
        title: null,
        subtitle: null,
        color: null
    }
}
</script>
