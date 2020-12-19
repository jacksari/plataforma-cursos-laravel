<template>
    <div class="mt-10 flex flex-wrap max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <template >
            <button
                :class="{'pointer-events-none ': page==1}"
                v-on:click="setPage(page-1)"
                class="mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white   focus:border-indigo-500 focus:text-indigo-500"
            >
                Anterior
            </button>
            <button v-for="(link, index) in this.links" :key="index"
                    v-on:click="setPage(link)"

                    class="mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white   focus:border-indigo-500 focus:text-indigo-500"
                    :class="{'bg-indigo-600 text-white hover:bg-indigo-500': link==page}"

            >
                {{ link }}
            </button>
            <button
                :class="{'pointer-events-none ': page==paginas}"
                v-on:click="setPage(page+1)"
                class="mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white   focus:border-indigo-500 focus:text-indigo-500"
            >
                Siguiente
            </button>
        </template>
    </div>
</template>

<script>

import { mapActions, mapMutations, mapState} from 'vuex';
import debounce from 'lodash/debounce'

export default {
    name: 'Pagination',
    props: {
        to: Number,
        from: Number,
        current_page: Number,
        paginas: Number
    },
    data(){
        return {
            links:[]
        }
    },
    methods:{
        ...mapMutations('course', ['setPage']),
        clickpage(page){
            console.log('pagina', page)

        }
    },
    mounted() {
        console.log(this.page)
        console.log('sd',this.links)

    },
    computed:{
        ...mapState('course',['page'])
    },
    watch: {
        paginas: {
            handler: debounce(function() {

                this.links = [];
                Array(this.paginas).fill().map((_, i) => this.links.push(i+1));
                //console.log(this.links)
            }, 1),
            deep: true,
        },

    },
}
</script>
