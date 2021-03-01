<template>
    <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nome</span>
            </div>
            <input type="text" class="form-control" placeholder="Username"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</template>
<script>
export default {
    name: 'User',
    data() {
        return {
            user: {}
        }
    },
}
</script>
