<template>
<nav aria-label="Page navigation" style="margin-top:20px;">
    <ul class="pagination" v-if="paginator">
        <li class="page-item" v-for="(link, i) in paginator.links" :key="i" >
            <a v-if="link.url" class="page-link" :class="{'active': link.active }"
                v-html="link.label"
                @click.prevent="goTo(link.url)"></a>
        </li>
    </ul>
</nav>
</template>

<script>
export default {
    name: "Paginator",
    props: ["paginator"],
    computed:{
        pag: this.paginator
    },
    methods: {
        async goTo(url){
            console.log(url)
            let {data} = await axios.get(url);
            this.pag = data;
        }
    },

}
</script>

<style>

</style>
