export default {
    state:{
        token : localStorage.getItem('access_token') || null,
        user: JSON.parse(localStorage.getItem('user')) || null
    },
    getters: {
        logeado(state){
          return state.token !== null;
        },
        nombreUsuario(state){
            return state.user.name;
        }

    },
    mutations:{
        setToken(state,token){
            state.token = token;
        },
        setUser(state,user){
            state.user = user
        }
    },
    actions:{
        login({commit}, credentials) {

            return new Promise((resolve, reject) => {
                axios.post('/v1/login', {
                    email: credentials.email,
                    password: credentials.password,
                    remember_me : credentials.remember_me
                })
                .then( ({data}) => {
                    const token = data.data.token;
                    const user = data.data.user;
                    localStorage.setItem('access_token', token);
                    localStorage.setItem('user', JSON.stringify(user));
                    commit('setToken', token);
                    commit('setUser', user);
                    resolve(data)
                })
                .catch(error => {
                    reject(error)
                })
            })
        },
    }
}
