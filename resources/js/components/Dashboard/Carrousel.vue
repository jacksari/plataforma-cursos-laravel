<template>
        <carousel
            :per-page="1"
            :mouse-drag="false"
            :autoplay="true"
            :loop="true"
            :autoplayHoverPause="true"
            paginationPosition="bottom-overlay"
            paginationActiveColor="#7E3AF2"
            :paginationSize="15"
        >
            <slide class="slide1">
                Slide 1 Content
            </slide>
            <slide class="slide2">
                Slide 2 Content
            </slide>
            <slide class="slide3">
                Slide 3 Content
            </slide>
            <slide class="slide4">
                Slide 4 Content
            </slide>
        </carousel>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';
    export default {
        components:{
            Carousel,
            Slide
        }
    }
    //h-52 overflow-hidden md:h-full
</script>

<style>
.slide1{
    background-image: url('/img/home/slider1.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
.slide2{
    background-image: url('/img/home/slider2.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
.slide3{
    background-image: url('/img/home/slider3.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
.slide4{
    background-image: url('/img/home/slider4.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
@media (max-width: 600px) {
    .slide1{
        height: 200px;
    }
    .slide2{
        height: 200px;
    }
    .slide3{
        height: 200px;
    }
    .slide4{
        height: 200px;
    }
}
</style>
