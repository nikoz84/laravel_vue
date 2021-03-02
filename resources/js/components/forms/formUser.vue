<template>
    <div>
        <form action=""></form>
        <div class="form-group mb-3">
            <label for="username">Nome:</label>
            <input type="text" name="name" id="username" class="form-control" placeholder="Nome"
                aria-label="Username" v-model="user.name">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="seuemail@example.com"
                aria-label="email" v-model="user.email">
        </div>
        <div class="form-group mb-3" v-if="$route.params.id">
            <label for="created_at">Criado em:</label>
            <input type="text" id="created_at" class="form-control" disabled
                aria-label="created" v-model="user.created_at">
        </div>
        <div class="form-group mb-3">
            <a class="btn btn-primary" @click.prevent="save()">Salvar</a>
        </div>
    </div>
</template>
<script>
export default {
    name: 'formUser',
    data() {
        return {
            user: {}
        }
    },
    created() {
        if(this.$route.params.id){
            this.getUser(this.$route.params.id)
        }
    },
    methods: {
        async getUser(id){
            const { data } = await axios.get(`/api/users/${id}`);
            this.user = data
        },
        async save(){
            let id = '';
            if(this.$route.params.id){
                id = '/' + this.$route.params.id;
            }

            const { data }= await axios.post("/api/users" + id, this.user);
            if(data.id){
                this.$router.push('/users/show/' + data.id);
            }
        }
    },
}
</script>
