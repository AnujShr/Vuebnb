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
    export default {
        props: ['images'],
        data() {
            return {
                index: 0
            }
        },
        computed() {
            return this.images[index];
        },
        methods: {
            changeImage(val) {
                let newVal = this.index + parseInt(val);
                if (newVal < 0) {
                    this.index = this.images.length - 1;
                } else if (newVal === this.images.length) {
                    this.index = 0;
                } else {
                    this.index = newVal;
                }
            }
        },
        components: {
            'carousel-control': {
                props: ['dir'],
                template: '<i :class="classes" @click="clicked"></i>',
                computed: {
                    classes() {
                        return "carousel-control fa fa-2x fa-chevron-" + this.dir;

                    }
                },
                methods: {
                    clicked() {
                        this.$emit('change-image', this.dir === 'left' ? -1 : 1);
                    }
                }
            }
        }
    }
</script>