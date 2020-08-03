<template>
    <form class="col-md-12 p-t-10" role="form" method="POST" action="/client-login">
        <input type="hidden" name="_token" :value="csrf">

        <div class="form-group" :class="clientError">
            <label class="control-label">Access Code</label>

            <div>
                <input type="text" class="form-control" name="access-token">

                <span class="help-block" v-if="clientError !== ''">
                    <strong>Invalid Access Error</strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-block btn-primary">Login</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "ClientLoginComponent",
        props: ['csrf', 'clientError']

    }
</script>

<style scoped>

</style>
