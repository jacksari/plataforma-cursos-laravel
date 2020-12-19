<template>
    <div>
        <LazyYoutubeVideo
            v-if="this.url"
            :autoplay="false"
            :src="this.url"

        >

        </LazyYoutubeVideo>
    </div>
</template>

<script>
import debounce from 'lodash/debounce'
import LazyYoutubeVideo from 'vue-lazy-youtube-video'
import 'vue-lazy-youtube-video/dist/style.css'
export default {
    components: {LazyYoutubeVideo},
    props:{
        current: null,
        section_current: null,
        lesson_complete: null,
        arrayLessons: null
    },
    data() {
        return {
            url: null,
            iframe: null,
            platform: null,
            name: null,
            lessonNum: null,
            complete: null,
        }
    },
    methods:{
        async video(){
            let data = await fetch(`/lesson/${this.current}`);
            let lesson = await data.json();

            this.iframe = lesson[0].iframe
            this.name = lesson[0].name
            this.complete = lesson[0].completed
            this.url = `https://www.youtube.com/embed/${this.iframe}`
            //console.log(lesson)

            this.platform = lesson[0].platforms_id

        },
    },
    watch: {
        current: {
            handler: debounce(function() {
                this.video();
                this.arrayLessons.forEach(less=>{
                    less.lesson.forEach(lesson=>{

                        if(this.current == lesson.lesson){

                            this.lessonNum = lesson.num
                        }
                    })

                })
            }, 100),
            deep: true,
        },

    },
    async mounted(){

    }

}

</script>
