<template>
    <div>
        <p :class="{ contracted: contracted }">
            <slot></slot>
        </p>
        <button v-if="contracted" class="more" @click="contracted = false">+ More</button>
        <button v-else="contracted === false" class="more" @click="contracted = true">&ndash; Hide</button>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                contracted: true
            }
        }
    }
</script>