<template>
    <app-layout>
        <h1 class="text-3xl font-bold text-center text-gray-600 my-8 ">Tus cursos inscritos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <card-progress-course
                v-for="(course, index) in this.courses" :key="index"
                :course="course"
            />
        </div>

    </app-layout>
</template>

<script>

import AppLayout from "@/Layouts/AppLayout"
import CardProgressCourse from '@/components/Dashboard/CardProgressCourse'
export default {
    components: {AppLayout,CardProgressCourse},
    props:{
        courses: null
    }
}
</script>

<style>
:root {
    --bg-btn: #fed7d7;
    --btn-color: #e53e3e;
}
#checkbox:checked ~ .btn-change::before {
    transition: 0.3s;
    transform: translateX(23px);
}

.btn-change {
    background-color: var(--bg-btn);
}

.btn-change::before {
    content: '';
    display: block;
    width: 17px;
    height: 17px;
    border-radius: 50%;
    background-color: var(--btn-color);
    transition: 0.3s;
    transform: translateX(0);
}
</style>
