<template>
    <div class="home-container">
        <div v-for="(group,country) in listing_groups">
            <h1>Places in {{country}}</h1>
            <div class="listing-summaries">
                <listing-summary v-for="listing in group" :key="listing.id" :listing="listing"></listing-summary>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import routeMixins from '../route-mixin';
    import {groupByCountry} from "../helpers";
    import ListingSummary from './ListingSummary.vue'

    let serverData = JSON.parse(window.vuebnb_server_date);


    export default {
        mixins: [routeMixins],
        data() {
            return {
                listing_groups: []
            }
        }, components: {
            ListingSummary
        }, methods: {

            assignData({listing}) {

                this.listing_groups = groupByCountry(listing)
            }
        },
        beforeRouteEnter(to, from, next) {
            let serverData = JSON.parse(window.vuebnb_server_date);
            if (to.path === serverData.path) {
                let listing_groups = groupByCountry(serverData.listing);
                next(component => component.listing_groups = listing_groups);
            } else {
                axios.get('/api/').then(({data}) => {
                    let listing_groups = groupByCountry(data.listing);
                    next(component => component.listing_groups = listing_groups);
                });
            }
        }
    }
</script>

<style>
    .listing-summaries {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        overflow: hidden;
    }

    .listing-summaries > .listing-summary {
        margin-right: 15px;
    }

    .listing-summaries > .listing-summaries:last-child {
        margin-right: 0;
    }
</style>}