<template>
    <div class="container flex justify-center my-20">
        <input v-model="check" type="checkbox" class="checkbox" id="checkbox">
        <label  for="checkbox" class="label">
            <i class="fas fa-moon text-blue-500"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
        </label>
    </div>
</template>

<script>
import debounce from "lodash/debounce";

export default {
    data(){
        return{
            check: (localStorage.getItem('theme') == 'claro') ? false: true
        }
    },
    methods: {
        dark(){
            //if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            //    document.querySelector('body').classList.add('dark')
            //} else {
            //    document.querySelector('body').classList.remove('dark')
            //}
            const bodytag = document.querySelector('body');
            if(this.check == false){
                bodytag.classList.remove('dark')
                localStorage.setItem('theme','claro');
            }else {
                bodytag.classList.add('dark')
                localStorage.setItem('theme','dark');
            }


            console.log('hola')
        }
    },
    watch: {
        check: {
            handler: debounce(function() {
                this.dark()
            }, 0),
            deep: true,
        },

    }
}
</script>

<style>
.label{
    background-color: #111;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px;
    border-radius: 50px;
    height: 26px;
    width: 50px;
    position: relative;
    cursor: pointer;
}
.fa-moon{


}
.fa-sun{
    color: #f39c12;
}
.ball{
    width: 22px;
    height: 22px;
    background-color: #fff;
    position: absolute;
    top: 2px;
    left: 2px;
    border-radius: 50%;
    transition: transform .2s linear;
    cursor: pointer;
}
.checkbox{
    opacity: 0;
    position: absolute;
    width: 70px;
    height: 26px;
}
.checkbox:checked + .label .ball{
    transform: translateX(24px);
    background-color: white;
}
</style>
