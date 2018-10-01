<template>
    <div class="image-carousel">
        <img v-bind:src="images[index]">
        <div class="controls">
            <carousel-control dir="left" @change-image="changeImage"></carousel-control>
            <carousel-control dir="right" @change-image="changeImage"></carousel-control>
        </div>
    </div>
</template>
<script>
    import CarouselControl from '../components/CarouselControlComponent.vue';

    export default {
        props: ['images'],
        data() {
            return {
                index: 0
            }
        },
        computed: {
            classes() {
                return this.images[index];
            }
        },
        methods: {
            changeImage(val) {
                let newVal = this.index + parseInt(val);
                if (newVal < 0) {
                    /* left direction on first image*/
                    this.index = this.images.length - 1;
                } else if (newVal === this.images.length) {
                    /*right direction on last image*/
                    this.index = 0;
                } else {
                    this.index = newVal;
                }
            }
        },
        components:{
            CarouselControl
        }
    }
</script>