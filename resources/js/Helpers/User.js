import Token from "./Token";
import AppStorage from "./AppStorage";

const User = {
    responseAfterLogin(res){
        const access_token = res.data.access_token;
        const name = res.data.name;
        if (Token.isValid(access_token)) {
            AppStorage.store(access_token,name)
        }
    },
    hasToken(){
        const getToken = localStorage.getItem('token')
        if (getToken) {
            return Token.isValid(getToken) ? true : false
        }
        return false
    },

    loggedIn(){
        return this.hasToken();
    },
    
    logOut(){
        AppStorage.clear();
    },

    name(){
        if (this.loggedIn()) {
            return localStorage.getItem('user') 
        }
    },

    id(){
        if (this.loggedIn()) {
            const payload = Token.payload(localStorage.getItem('token'))
            return payload.sub
        }
        return false
    },
}
export default {
    install(app) {
        app.config.globalProperties.$user = User;
    }
};