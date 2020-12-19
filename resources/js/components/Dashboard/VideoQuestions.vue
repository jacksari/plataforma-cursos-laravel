<template>
    <div class="asd w-full">
        <div class="bg-white tabs w-full p-10">
            <div class="tab-header">
                <div v-on:click="tab(1)" class="" :class="{'active': this.tab1}">
                    <div class="h-6">
                        <i class="fa fa-code"></i> Descripción
                    </div>
                    <div :class="{'tab-indicator-active': this.tab1}" class="tab-indicator mt-3"></div>
                </div>
                <div v-on:click="tab(2)" class="" :class="{'active': this.tab2}">
                    <div class="h-6">
                        <i class="fas fa-edit"></i> Preguntas y Respuestas
                    </div>
                    <div :class="{'tab-indicator-active': this.tab2}" class="tab-indicator mt-3"></div>
                </div>
                <div v-on:click="tab(3)" :class="{'active': this.tab3}">
                    <div class="h-6">
                        <i class="fas fa-book-open"></i> Notas del curso
                    </div>
                    <div :class="{'tab-indicator-active': this.tab3}" class="tab-indicator mt-3"></div>
                </div>
                <div v-on:click="tab(4)" :class="{'active': this.tab4}">
                    <div class="h-6">
                        <i class="fab fa-angellist"></i> Avisos
                    </div>
                    <div :class="{'tab-indicator-active': this.tab4}" class="tab-indicator mt-3"></div>
                </div>
            </div>

            <div class="tab-body">
                <div class="" :class="{'active': this.tab1}">
                    <h2>This is description section</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eligendi ex fuga fugiat hic, incidunt, ipsam laborum maxime mollitia officia quasi quia quis rem soluta tenetur, ullam vitae! Aspernatur, inventore!</p>
                </div>
                <div class="" :class="{'active': this.tab2}">
                    <h2>This is preguntas section</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eligendi ex fuga fugiat hic, incidunt, ipsam laborum maxime mollitia officia quasi quia quis rem soluta tenetur, ullam vitae! Aspernatur, inventore!</p>
                </div>
                <div class="" :class="{'active': this.tab3}">
                    <h2>This is notas section</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eligendi ex fuga fugiat hic, incidunt, ipsam laborum maxime mollitia officia quasi quia quis rem soluta tenetur, ullam vitae! Aspernatur, inventore!</p>
                </div>
                <div class="" :class="{'active': this.tab4}">
                    <h2>This is avisos section</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eligendi ex fuga fugiat hic, incidunt, ipsam laborum maxime mollitia officia quasi quia quis rem soluta tenetur, ullam vitae! Aspernatur, inventore!</p>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            tab1: true,
            tab2: false,
            tab3: false,
            tab4: false
        }
    },
    methods:{
        tab(tab){
            let tabHeader = document.getElementsByClassName('tab-header')[0];
            let tabIndicator = document.getElementsByClassName('tab-indicator');
            console.log(tab)
            if(tab == 1){
                this.tab1 = true;
                this.tab2 = false;
                this.tab3 = false;
                this.tab4 = false;
            }else if(tab == 2){
                this.tab1 = false;
                this.tab2 = true;
                this.tab3 = false;
                this.tab4 = false;
            }else if(tab == 3){
                this.tab1 = false;
                this.tab2 = false;
                this.tab3 = true;
                this.tab4 = false;
            }else {
                this.tab1 = false;
                this.tab2 = false;
                this.tab3 = false;
                this.tab4 = true;
            }
        }
    }
}
</script>

<style>
.asd{
    background: #f5f5f5;
}
.tabs{

    height: 250px;
    background: white;
    padding: 20px 30px;
    overflow: hidden;
    border-radius: 20px;
}
.tabs .tab-header{
    height: 60px;
    display: flex;
    align-items: center;
}
.tabs .tab-header > div{
    width: calc(100%/4);
    text-align: center;
    color: #888;
    font-weight: 600;
    cursor: pointer;
    font-size: 14px;
    text-transform: uppercase;
    outline: none;
}
.tabs .tab-header > div > i{
    display: block;
    margin-bottom: 5px;
}
.tabs .tab-header > div.active{
    color: #00acee;

}
.tabs .tab-indicator{
    position: relative;
    height: 5px;
    background: transparent;
    left: 0;
    border-radius: 5px;
}
.tab-indicator-active{
    background: #00acee !important;
}
.tabs .tab-body{
    position: relative;
    height: calc(100% - 60px);
    padding: 10px 5px;
}
.tabs .tab-body > div{
    position: absolute;
    top: -200%;
    opacity: 0;
    margin-top: 5px;
    transform: scale(0.9);
    transition:  opacity 500ms ease-in-out 0ms,
        transform 500ms ease-in-out 0ms;
}
.tabs .tab-body > div.active{
    top: 0px;
    opacity: 1;
    transform: scale(1);
    margin-top: 5px ;

}
</style>
