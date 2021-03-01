<template>
    <div>
        Lista de usuarios
        <ul>
            <li v-for="(user, i) in users" :key="i" @click="getUser(user.id)">
                {{  user.name  }}
            </li>

            <div v-if="show">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ showUser.name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ showUser.email }}</h6>
                        <p class="card-text">{{ showUser.created_at }}</p>


                        <router-link
                            class="nav-link"
                            :to="{ name: 'editUser', params: { id : showUser.id }}"
                            >
                            Editar
                        </router-link>
                    </div>



                </div>
            </div>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'Users',
    data() {
        return {
            users: [],
            show: false,
            showUser: {}
        }
    },
    created() {
        this.getUsers()
    },
    methods: {
        async getUsers(){
            const { data } = await axios.get('/api/users');
            this.users = data.data
            console.log(data);
        },
        async getUser(id){
            this.show = false;
            const {data} = await axios.get(`/api/users/${id}`);
            this.showUser = data;
            this.show = true
            console.log(data)
        }
    },
}
</script>
