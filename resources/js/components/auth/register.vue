<template lang="">
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="register-form" action="javascript:;" method="post">
                            <h2 class="login-title mb-3">Sign Up</h2>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Full Name...">
                                    </div>
                                </div>
                                <!-- <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                </div> -->
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password...">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password...">
                            </div>
                            <!-- <div class="form-group text-left">
                                <label class="ui-checkbox ui-checkbox-info">
                                    <input type="checkbox" name="agree">
                                    <span class="input-span"></span>I agree the terms and policy</label>
                            </div> -->
                            <div class="form-group">
                                <button class="btn btn-info btn-block" type="submit">Sign up</button>
                            </div>
                            <!-- <div class="social-auth-hr">
                                <span>Or Sign up with</span>
                            </div>
                            <div class="text-center social-auth m-b-20">
                                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
                            </div> -->
                            <div class="text-center">Already have an account?
                                <router-link to="/" class="color-blue">Login here</router-link>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>