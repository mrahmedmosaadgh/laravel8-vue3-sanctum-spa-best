import axios from 'axios';
import { createStore } from 'vuex'
import sharedMutations from 'vuex-shared-mutations';
import swal from 'sweetalert2'
import trlang from './modules/trlang'
export default createStore({
    modules: {
        trlang
    },
    state() {
        return {
            user: null,
            loading: false,
            current_user:{},
            roles       :new Set(),
            permissions :new Set(),
            userdataww:null,
        }
    },
    getters: {
        user(state) {
            return state.user;
        },
        isuser(state) {
            if (state.user.id) {
                return true
            } else {
                return false
            }
            // return state.user !== null;
        },






        
        verified(state) {
            if (state.user) return state.user.email_verified_at
            return null
        },
        id(state) {
            if (state.user) return state.user.id
            return null
        }

    },
    mutations: {
        // async   loadmix(state){
        //     var msgin='loadmix'
        //             this.datamsg = msgin+"...";
        //             this.loading = true;
        
        //             // var datadb
        //             try{
        // // this.classSujectsArray
        //             await axios.post("/api/classSujects/loadmix" ,)
        //             .then((res) => {
        //             this.datadb = res.data.message;
        //             //  console.log(datadb);
        //             this.datamsg = "...Done:";
        //             console.log('Done');
        //             // console.log(datadb);
        // // 0 class  
        // // 1 subject
        // // 2 teacher
        // // 3 mix,
        //             this.loading = false;});
        
        //             } catch (e) {
        //             this.datamsg = msgin+"...error";
        //             console.log(e);
        //             // alert(msgin+" ... error");
        //             }
        // // ----------------------------------------------------------
        // // this.subarray_ids=[]
        // // this.teacheridsarray=[]
        // // this.generalsubjectsarray=[]
        // // this.generalsubjectsarrayid=[]
        // // this.generalteachersarray=[]
        // // this.generalteachersarrayid=[]
        // // this.generalteachersarrayidname=[]
        // // this.classnamesidsarray=[]
        // // this.teachersarrayidtodb=[]
        // this.subjects  =[]
        // this.teachers  =[]
        // this.classnames=[]
        // for (let index = 0; index < this.datadb[1].length; index++) {
        //      this.subjects.push(
        //        {value:this.datadb[1][index].id,
        //        name:this.datadb[1][index].name
        //        });
        
        //  }
        // for (let index = 0; index < this.datadb[0].length; index++) {
        
        //      this.classnames.push(
        //                             {value:this.datadb[0][index].id,
        //                               name:this.datadb[0][index].name
        //                               }
        //                         );
        //  }
        //  for (let index = 0; index < this.datadb[2].length; index++) {
        //      this.teachers.push(
        //                 {value:this.datadb[2][index].id,
        //                   name:this.datadb[2][index].namear
        //                 }
        //                         );
        //  }
        // // for (let index = 0; index < this.datadb[3].length; index++) {
        // //     // subarray_ids = this.datadb[3][index].subject_ids;
        
        // //     console.log(this.datadb[3][index].subject_ids=='null');
        
        // //     if (this.datadb[3][index].subject_ids=='null') {
        // //          this.subarray_ids.push([]);
          
        // // }  
        // // }
        // // ----------------------------------------------------------
        // //             var arrayOfWords = []; // Create the array to store words
        // // arrayOfWords = words.split(" ");
        //             // this.datamsg = datadb
        //  setTimeout(() => this.datamsg = '', 4000);
        // // this.subjectsarray=[]
        // // var array1=[]
        // // var array2=[]
        // // var array3=[]
        
        // // for(var i = 0; i < datadb.length; i++){
        // //   array1.push(datadb[i].id);
        // //   array2.push(datadb[i].name);
        // //   array3.push(datadb[i].namecut);
        // // }
        // //   this.subjectsarray.push(
        // //         array1,
        // //         array2,
        // //         array3);
        
        
        // },//loadmix
        setUser(state, payload) {
            state.user = payload;
        },
        Toastsuccess() {

            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', swal.stopTimer)
                  toast.addEventListener('mouseleave', swal.resumeTimer)
                }
              })
              
              return Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
              })
//             const Toast1 =  swal.fire({
//                 title: 'All done!',
//                 html:
//                   'Your answers: <pre>' +
//                     JSON.stringify(result) +
//                   '<pre>Answer1- ' + strAns1+
//                   '<pre>Answer2- ' + strAns2+
//                   '</pre>',
//                 confirmButtonText: 'Lovely!'
//               })

// return Toast1
            // return state.user;
        },
        // suc(txt) {
            swalmsg(state, txt) {
                // this.$store.commit('swalmsg', {icon:'success',title:'title',text:'',timer:2000});//vue
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: txt.timer,
                timerProgressBar: txt.bar,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', swal.stopTimer)
                  toast.addEventListener('mouseleave', swal.resumeTimer)
                }
              })
              
              return Toast.fire({
                icon: txt.icon,
                title: txt.title,
                text: txt.text
              })
//             const Toast1 =  swal.fire({
//                 title: 'All done!',
//                 html:
//                   'Your answers: <pre>' +
//                     JSON.stringify(result) +
//                   '<pre>Answer1- ' + strAns1+
//                   '<pre>Answer2- ' + strAns2+
//                   '</pre>',
//                 confirmButtonText: 'Lovely!'
//               })

// return Toast1
            // return state.user;
        },



        conf(){

            swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                  swal.fire('Changes are not saved', '', 'info')
                }
              })


        },

    },

    actions: {

        async login({ dispatch }, payload) {
            try {
                await axios.get('/sanctum/csrf-cookie');

                await axios.post('/api/login', payload).then((res) => {
                    return dispatch('getUser');
                }).catch((err) => {
                    throw err.response
                });
                // const res = await axios.post('/api/login', payload);

                // if (res.status != 200) throw res;

                // if (res.data.status_code != 200) throw res.data.message;
                
                
                
            } catch (e) {
                throw e
            }
    
        },

        async register({ dispatch }, payload) {
            try {

                await axios.post('/api/register' , payload).then((res) => {
                    return dispatch('login' , { 'email' : payload.email , 'password' : payload.password})
                }).catch((err) => {
                    throw(err.response)
                })
            } catch (e) {
                throw (e)
            }
        },

        async marks_register({ dispatch }, payload) {
            try {

                await axios.post('/api/marks/marks_register' , payload).then((res) => {
                    return dispatch('login' , { 'email' : payload.email , 'password' : payload.password})
                }).catch((err) => {
                    throw(err.response)
                })
            } catch (e) {
                throw (e)
            }
        },

        
        async logout({ commit }) {
                await axios.post('/api/logout').then((res) => {
                    commit('setUser', null);
                }).catch((err) => {
                    
                })
            
        },
        async getUser({commit}) {
            await axios.get('/api/user').then((res) => {
                commit('setUser', res.data);
            }).catch((err) => {
                throw err.response
            })
        },
        async profile({commit},payload) {
            await axios.patch('/api/profile', payload).then((res) => {
                commit('setUser', res.data.user);
            }).catch((err) => {
                throw err.response
            })
        },
        async marks_profile({commit},payload) {
            await axios.post('/api/marks/marks_profile', payload).then((res) => {
                commit('setUser', res.data.user);
            }).catch((err) => {
                throw err.response
            })
        },




        
        async password({commit},payload) {
            await axios.patch('/api/password', payload).then((res) => {
                
            }).catch((err) => {
                throw err.response
            })
        },

        async verifyResend({dispatch} , payload){
            let res = await axios.post('/api/verify-resend' , payload)
            if (res.status != 200) throw res
            return res
        },
        async verifyEmail({dispatch} , payload){
            let res = await axios.post('/api/verify-email/' + payload.id + '/' + payload.hash)
            if (res.status != 200) throw res
            dispatch('getUser')
                return res
            
        },
        isLoggedIn(state) {
            return state.user !== null;
        },
        // isuser(state) {
        //     if (state.user.id) {
        //         return true
        //     } else {
        //         return false
        //     }
        //     // return state.user !== null;
        // }

//         async userdata(state) {
//             // var userdataww
//             await axios.post('/api/userdata').then((res) => {

//                 state.userdataww=res.data.message.user;
//                 // roles
//             //     userdata.roles.forEach(r => {
//             //         state.roles.add(r.name)
//             // });
//             // userdata.permissions.forEach(p => {
//             //     state.permissions.add(p.name)
//             // });
//             // commit('userdata', res.data.message.user);
//         // return  userdata;
//         }).catch((err) => {
//                  return   err.response
//             })
// }
    },
    plugins: [sharedMutations({ predicate: ['setUser'] })],


})
