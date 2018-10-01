<template>
    <div>
        <hr>
        <div class="list">
            <div class="title"><strong>{{title}}</strong></div>
            <div class="content">
                <div class="content">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['title']
    }
</script>