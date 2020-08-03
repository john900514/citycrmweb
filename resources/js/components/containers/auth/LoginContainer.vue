<template>
    <div>
        <h3 class="text-center m-b-20 access-row">
            <div class="radio-wave">
                <input type="radio" name="login-type" value="client" v-model="selectedLogin">
                <label>Client Demo Access</label>
            </div>

            <div class="radio-wave">
                <input type="radio" name="login-type" value="user" v-model="selectedLogin">
                <label>CityCRM Employee Login</label>
            </div>
        </h3>
        <div class="box">
            <div class="box-body">
                <user-login v-if="selectedLogin === 'user'"
                            :csrf="csrf"
                            :login-action="loginAction"
                            :username-error="usernameError"
                            :password-error="passwordError"
                ></user-login>

                <client-login v-else
                              :csrf="csrf"
                              :client-error="clientError"
                              ></client-login>
            </div>
        </div>
    </div>
</template>

<script>
    import UserLogin from '../../presenters/auth/CityUserLoginComponent';
    import ClientLogin from '../../presenters/auth/ClientLoginComponent';

    export default {
        name: "LoginContainer",
        components: {
            ClientLogin,
            UserLogin
        },
        props: ['csrf', 'loginAction', 'usernameError', 'passwordError', 'clientError'],
        data() {
            return {
                title: 'Employee/Client Login',
                selectedLogin: 'user'
            }
        },
        mounted() {
            let urlParams = new URLSearchParams(window.location.search);
            let myClient = urlParams.get('client');

            if(myClient === 'true') {
                this.selectedLogin = 'client';
            }
        }
    }
</script>

<style scoped>
    @media screen {

    }

    @media screen {

    }

    @media screen and (min-width: 1000px) {
        .access-row {
            display: flex;
            flex-flow: row;
            justify-content: space-between;
            margin: 0 10%;
        }
    }
</style>
