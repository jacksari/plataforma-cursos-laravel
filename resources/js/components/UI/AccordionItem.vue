<template>
    <div class="accordion ">
        <div  class="accordion-item rounded-lg    mb-5 ">
            <div
                :class="{'active': this.accordion }"
                class="accordion-item-header cursor-pointer bg-blue-500 px-5 py-3 rounded-lg"
                v-on:click="openAccordion"
            >
                <slot name="header"></slot>

            </div>
            <div  class="accordion-item-body shadow-lg mx-5 bg-white rounded-b-lg">
                <div class="accordion-item-body-content">
                    <slot name="content"></slot>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            accordion: false
        }
    },
    methods:{
        openAccordion(){
            this.accordion = !this.accordion
                //<h2 class="text-xl text-white">What is Web Development?</h2>
        }
    }
}
</script>

<style>
.accordion-item{
    position: relative;
}
.accordion-item-header::after{
    content: '\002B';
    padding: 0;
    margin: 0;
    font-size: 2rem;
    font-weight: bold;
    position: absolute;
    right: 1rem;
    top: 0.1rem;
    color: white;
    transition: .3s all ease-in-out;
}
.accordion-item-header.active::after{
    transform: rotate(45deg);
}
.accordion-item-body{
    overflow: hidden;
    max-height: 0;
    padding: 5px;

    transition: max-height .5s ease-in-out;
}
.accordion-item-body-content{
    padding: 1rem;
    line-height: 1.5rem;

}
.accordion-item-header.active + .accordion-item-body{
    max-height: 400px;
}
</style>
