<template>
<section>
    <h2>Lista de usuarios</h2>
    <router-link class="nav-link"
        data-toggle="collapse"
        :to="{ name: 'createUser' }"
        >
        Adicionar
    </router-link>
    <div  v-if="paginator">
        <ul class="list-group list-group-flush">
            <li class="list-group-item" v-for="(user, i) in paginator.data" :key="i">
                <router-link
                    class="nav-link"
                    data-toggle="collapse"
                    :to="{ name: 'showUser', params: { id : user.id } }"
                    >
                    {{ user.name }}
                </router-link>
            </li>
        </ul>
        <nav aria-label="Page navigation" style="margin-top:20px;">
            <ul class="pagination" v-if="paginator">
                <li class="page-item" v-for="(link, i) in paginator.links" :key="i" :class="{'active': link.active }">
                    <a v-if="link.url" class="page-link"
                        v-html="link.label"
                        @click.prevent="goTo(link.url)"></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
</template>

<script>

export default {
    name: "ListUsers",
    data() {
        return {
            users: [],
            paginator: {}
        }
    },
    created() {
        this.getUsers()
    },
    methods: {
        async getUsers(){
            const { data } = await axios.get('/api/users');
            this.paginator = data
            console.log(data);
        },
        async goTo(url){
            console.log(url)
            let {data} = await axios.get(url);
            this.paginator = data;
        }

    },
}
</script>

<style>

</style>
