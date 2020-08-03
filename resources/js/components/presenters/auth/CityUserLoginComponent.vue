<template>
    <form class="col-md-12 p-t-10" role="form" method="POST" :action="loginAction">
        <input type="hidden" name="_token" :value="csrf">

        <div class="form-group" :class="usernameError">
            <label class="control-label">Username</label>

            <div>
                <input type="text" class="form-control" name="username">

                <span class="help-block" v-if="usernameError !== ''">
                    <strong>Username Error</strong>
                </span>

            </div>
        </div>

        <div class="form-group" :class="passwordError">
            <label class="control-label">Password</label>

            <div>
                <input type="password" class="form-control" name="password">

                <span class="help-block" v-if="passwordError !== ''">
                    <strong>Password Error</strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
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
        name: "CityUserLoginComponent",
        props: ['csrf', 'loginAction', 'usernameError', 'passwordError']
    }
</script>

<style scoped>

</style>
