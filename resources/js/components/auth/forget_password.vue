<template lang="">
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="login-form" action="javascript:;" method="post">
                            <h2 class="login-title mb-3">Forget Password</h2>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                                    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-block" type="submit">Forget Password</button>
                            </div>
                            <!-- <div class="social-auth-hr">
                                <span>Or login with</span>
                            </div> -->
                            <!-- <div class="text-center social-auth m-b-20">
                                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
                            </div> -->
                            <div class="text-center">Already have an account?
                                <router-link to="/" class="color-blue">Login</router-link>
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