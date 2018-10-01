<template>
    <div>
        <div id="toolbar">
            <router-link :to="{ name: 'home' }">
                <img class="icon" src="/images/logo.png">
                <h1>VueBnB</h1>
            </router-link>
        </div>
        <router-view></router-view>
    </div>
</template>

<style>
    #toolbar {
        border-bottom: 1px solid #e4e4e4;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    #toolbar a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }
</style>