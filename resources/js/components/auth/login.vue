<template lang="">
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="login-form" @submit.prevent="login()" method="post">
                            <h2 class="login-title mb-3">Log in</h2>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                                    <input class="form-control" type="email" name="email" placeholder="Email" v-model="form.email">
                                    <HasError :form="form" field="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                    <input class="form-control" type="password" name="password" placeholder="Password" v-model="form.password">
                                    <HasError :form="form" field="password" />
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <label class="ui-checkbox ui-checkbox-info">
                                    <input type="checkbox">
                                    <span class="input-span"></span>Remember me</label>
                                <router-link to="/forget-password">Forgot password?</router-link>
                            </div>
                            <div class="form-group">
                                <!-- <button class="btn btn-info btn-block" type="submit">Login</button> -->
                                <Button :form="form" class="btn btn-info btn-block">
                                    Log In
                                </Button>
                            </div>
                            <div class="text-center">Don't have account?
                                <router-link to="/register" class="color-blue">Create account</router-link>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script>
import Form from 'vform'
import { toast } from 'vue3-toastify';
export default {
    data() {
        return {
            form: new Form({
                email: '',
                password: ''
            })
        }
    },
    methods: {
        login(){
            this.form.post('/api/auth/login')
            .then(res => {
                toast.success('Login successfully!',{
                    autoClose:3000,
                });
                // localStorage.setItem('token','bearer '+res.data.access_token)
                this.$user.responseAfterLogin(res)
                // console.log(this.$user);
            })
            .catch(error => {
                console.log(error);
                if (error.response && error.response.data.error) {
                    toast.error(error.response.data.error,{
                        autoClose:3000,
                    }); 
                }
            })
        },
        getUser(){
            
        }
    },
}
</script>
<style lang="">
    
</style>