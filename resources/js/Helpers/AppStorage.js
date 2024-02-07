const AppStorage = {
    storeToken(token){
        localStorage.setItem('token','bearer '+token)
    },
    storeUser(user){
        localStorage.setItem('user',user)
    },
    store(token,user){
        this.storeToken('token','bearer '+token)
        this.storeUser('user',user)
    },
    clear(token,user){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
    },
    getToken(){
        localStorage.setItem('token')
    },
    getUser(){
        localStorage.setItem('user')
    },

}
export default AppStorage;