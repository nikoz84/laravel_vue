<template>
<section>
    <h2>Perfil</h2>
    <div class="card" v-if="user">
        <div class="card-body">
            <h5 class="card-title">{{ user.name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ user.email }}</h6>
            <p class="card-text">{{ user.created_at }}</p>


            <router-link
                class="nav-link"
                :to="{ name: 'editUser', params: { id : user.id }}"
                >
                Editar
            </router-link>
        </div>
    </div>
</section>
</template>

<script>
export default {
    name: "ShowUser",
    data() {
        return {
            user: null
        }
    },
    watch: {
        '$route.params.id': function (id) {
            this.getUser(id)
        }
    },
    created() {
        this.getUser(this.$route.params.id)
    },
    methods: {
        async getUser(id){

            const { data } = await axios.get(`/api/users/${id}`);
            this.user = data
            console.log(data);
        }
    }
}
</script>

<style>

</style>
