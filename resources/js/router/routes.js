const Settings = () => import('../Views/Settings.vue');
const Settings2 = () => import('../Views/Settings2.vue');
const Profile = () => import('../Views/Profile.vue');
const Password = () => import('../Views/Password.vue');
const Login = () => import('../Views/Login.vue');
const ForgotPassword = () => import('../Views/ForgotPassword.vue');
const ResetPassword = () => import('../Views/ResetPassword.vue');
const VerifyEmail = () => import('../Views/VerifyEmail.vue');
const Register = () => import('../Views/Register.vue');
const Home = () => import('../Views/Home.vue');
const Welcome = () => import('../Views/Welcome.vue')
// ===============================================================================
const cs = () => import('../Views/cs.vue')

const uploadexcel = () => import('../Views/upload-excel.vue')
const excel1 = () => import('../Views/excel1.vue')
// ========mix=======================================================================
// ========forqan=======================================================================
// resources\js\Views\forqan\teacher\teacherhome.vue
const teacherhome = () => import('../Views/forqan/teacher/teacherhome.vue')
// ========forqan=======================================================================
// ========mix=======================================================================
const menu = () => import('../Views/scschool/mix/menu.vue')
const drag = () => import('../Views/scschool/mix/drag.vue')
const addclass = () => import('../Views/scschool/firstdata/addclass.vue')
const addteacher = () => import('../Views/scschool/firstdata/addteacher.vue')
const addstudent = () => import('../Views/scschool/firstdata/addstudent.vue')
const classteachersubject = () => import('../Views/scschool/firstdata/classteachersubject.vue')
const test = () => import('../Views/scschool/firstdata/test.vue')
const markmain = () => import('../Views/scschool/marks/scschooltermmarkmain.vue')
const roles = () => import('../Views/start/siteadmin/roles.vue')
const permissions = () => import('../Views/start/siteadmin/permissions.vue')
const permission_role = () => import('../Views/start/siteadmin/permission_role.vue')
// teacher---------------------------------------------------------------------------------------
const teachermain = () => import('../Views/start/teacher/teachermain.vue')
const quizcreate = () => import('../Views/start/teacher/quiz/quizcreate.vue')
const weeklyclassrecord_teacher = () => import('../Views/start/teacher/weeklyclassrecord_teacher.vue')
const loadingpg = () => import('../Views/start/teacher/loadingpg.vue')
const Typing = () => import('../Views/start/teacher/Typing.vue')
const todo = () => import('../Views/start/teacher/todo.vue')
const scheduletest = () => import('../components/startcom/teacher/schedule/test.vue')
const schoolmarks = () => import('../Views/start/teacher/schoolmarksout/main.vue')
const controlmarks_main = () => import('../Views/start/teacher/controlmarks/controlmarks_main.vue')
const savecode = () => import('../Views/savecode/savecode.vue')
// controlmarks_main
    // resources\js\Views\start\teacher\controlmarks\controlmarks_main.vue

// -------------------------------------------------------------------------------
// -------------------------------------------------------------------------------
const marks_setup = () => import('../Views/marks/marks_setup.vue')//marks_setup
const marks_import = () => import('../Views/marks/marks_import.vue')//marks_search
// const marks_search = () => import('../Views/marks/marks_search.vue')//marks_login
const marks_login = () => import('../Views/marks/marks_login.vue')//marks_login
const marks_register = () => import('../Views/marks/marks_register.vue')//marks_login//const Profile = () => import('../Views/Profile.vue');
const marks_Profile = () => import('../Views/marks/marks_Profile.vue')//marks_login//const Profile = () => import('../Views/Profile.vue');
// ---------student----------------------------------------------------------------------
const certificate = () => import('../Views/start/student/controlmarks/certificate.vue')//marks_login//const Profile = () => import('../Views/Profile.vue');
// ---------student----------------------------------------------------------------------
// ---- ---------------------------------------------------------------------------
const controlmarkssetups = () => import('../Views/forqan/admin/controlmarkssetups.vue')
// const classwork= () => import('../Views/start/teacher/teachermain.vue')
// const teacherhome = () => import('../Views/start/teacher/teacherhome.vue')
// student---------------------------------------------------------------------------------------
const studentHome = () => import('../Views/start/student/studentHome.vue')
// resources\js\components\startcom\teacher\schedule\test.vue
export default [
    

    // forqan--teacherhome-----------------------------------------------------------------------
    {path: '/savecode'      ,component: savecode        ,name: 'savecode'          ,meta: { auth: true, title: 'savecode' }},
    {path: '/forqan/teacher/teacherhome'      ,component: teacherhome        ,name: 'teacherhome'          ,meta: { auth: true, title: 'teacherhome' }},
    

        // forqan-------------------------------------------------------------------------

    // student-------------------------------------------------------------------------
    {path: '/student/certificate'      ,component: certificate        ,name: 'certificate'          ,meta: { auth: true, title: 'certificate' }},
  
    {path: '/student/Home'      ,component: studentHome        ,name: 'studentHome'          
    ,meta: {
        title: 'Home Page',
        guard: 'auth'
        // Title must be a string.
      },
    
    },
    // forqan_controlmarks_setups--------------------------------------------------------
    
    {path: '/forqan/controlmarkssetups'      ,component: controlmarkssetups        ,name: 'controlmarkssetups'          ,meta: { auth: true, title: 'controlmarkssetups' }},
    
    // forqan_controlmarks_setups--------------------------------------------------------
    // marks_import-------------------------------------------------------------------------
    {path: '/marks/marks_import'      ,component: marks_import        ,name: 'marks_import'          ,meta: { auth: true, title: 'marks_import' }},
    // {path: '/marks/marks_search'      ,component: marks_search        ,name: 'marks_search'          ,meta: { auth: true, title: 'marks_search' }},
    // {path: "/marks/marks_search/:id/:lng/:schoolid"      ,component: marks_search        ,name: 'marks_search'          ,meta: { auth: false, title: 'marks_search' }},
    // {path: '/marks/marks_search/:lng/:id/:school_name'      ,component: marks_search        ,name: 'marks_search'          ,meta: { auth: true, title: 'marks_search' }},
    {path: '/marks/marks_setup'      ,component: marks_setup        ,name: 'marks_setup'          ,meta: { auth: true, title: 'marks_setup' }},
    {path: '/marks/marks_login'      ,component: marks_login        ,name: 'marks_login'          ,meta: { auth: true, title: 'marks_login' }},
    {path: '/marks/marks_register'      ,component: marks_register        ,name: 'marks_register'          ,meta: { auth: true, title: 'marks_register' }},
    {path: '/marks/marks_Profile'      ,component: marks_Profile        ,name: 'marks_Profile'          ,meta: { auth: true, title: 'marks_Profile' }},
    // marks_import-------------------------------------------------------------------------
    // marks_import-------------------------------------------------------------------------
    // marks_import-------------------------------------------------------------------------


    // student-------------------------------------------------------------------------
    // teacher-------------------------------------------------------------------------
    {path: '/teacher/teachermain'      ,component: teachermain        ,name: 'teachermain'          ,meta: {guard: 'auth' }},
    {path: '/teacher/quizcreate'      ,component: quizcreate        ,name: 'quizcreate'          ,meta: {guard: 'auth' }},
    {path: '/teacher/weeklyclassrecord_teacher'      ,component: weeklyclassrecord_teacher        ,name: 'weeklyclassrecord_teacher'          ,meta: {guard: 'auth' }},
    {path: '/teacher/loadingpg'      ,component: loadingpg        ,name: 'loadingpg'          ,meta: {guard: 'auth' }},
    {path: '/teacher/schedule/test'      ,component: scheduletest        ,name: 'scheduletest'          ,meta: { auth: true, title: 'scheduletest' }},
    {path: '/teacher/Typing'      ,component: Typing        ,name: 'Typing'          ,meta: { auth: true, title: 'Typing' }},


    // resources\js\Views\start\teacher\controlmarks\controlmarks_main.vue
    {path: '/teacher/controlmarks_main'      ,component: controlmarks_main        ,name: 'controlmarks_main'          ,meta: { auth: true, title: 'controlmarks_main' }},
    {path: '/teacher/todo'      ,component: todo        ,name: 'todo'          ,meta: { auth: true, title: 'todo' }},
    {path: '/schoolmarks'      ,component: schoolmarks        ,name: 'schoolmarks'          ,meta: { auth: true, title: 'schoolmarks' }},
    // {path: '/schoolmarks/:school_id'      ,component: schoolmarks        ,name: 'schoolmarks'          ,meta: { auth: true, title: 'schoolmarks' }},
      // resources\js\components\startcom\teacher\schedule\test.vue

    ///:school_id


// teacher-------------------------------------------------------------------------
// roles-------------------------------------------------------------------------

{path: '/siteadmin/roles'      ,component: roles        ,name: 'roles'          ,meta: {guard: 'auth' }},
{path: '/siteadmin/permissions',component: permissions  ,name: 'permissions'    ,meta: {guard: 'auth' }},
{path: '/siteadmin/permission_role',component: permission_role  ,name: 'permission_role'    ,meta: {guard: 'auth' }},

// roles-------------------------------------------------------------------------

{
            path: '/markmain',component: markmain,
            name: 'markmain',
            meta: {guard: 'auth'}
        },
// markmain-------------------------------------------------------------------------
        {   path: '/test',component: test,
            name: 'test',
            meta: {guard: 'auth'}
        },
// test-------------------------------------------------------------------------
        {
            path: '/addstudent',component: addstudent,
            name: 'addstudent',
            meta: {guard: 'auth'}
        }, 
               {
            path: '/classteachersubject',component: classteachersubject,
            name: 'classteachersubject',
            meta: {guard: 'auth'}
        },
        {
            path: '/addteacher',component: addteacher,
            name: 'addteacher',
            meta: {guard: 'auth'}
        },
        {
            path: '/addclass',component: addclass,
            name: 'addclass',
            meta: {guard: 'auth'}
        }, 
// addclass-------------------------------------------------------------------------
        // ========mix=======================================================================
        {
            path: '/menu',component: menu,
            name: 'menu',
            meta: {guard: 'auth'}
        }, 
        {
            path: '/drag',component: drag,
            name: 'drag',
            meta: {guard: 'auth'}
        }, 
        // ========mix=======================================================================

     {
        path: '/excel1',component: excel1,
        name: 'excel1',
        meta: {guard: 'auth'}
    },        

    {
  
        path: '/uploadexcel',
        component: uploadexcel,
        name: 'uploadexcel',
        meta: {
            guard: 'auth'
        }

    },
    
    {
  
        path: '/cs',
        component: cs,
        name: 'cs',
        meta: {
            guard: 'auth'
        }

    },

// ===============================================================================

 {
        path: '/',
        component: Welcome,
        name: 'welcome',

    },
    {
        path: '/home',
        component: Home,
        name: 'home',
        meta: {
            guard: 'auth'
        }
    },
    {
        path: '/login',
        component: Login,
        name: 'login',
        meta : {
            guard : 'guest'
        }
    },
    {
        path: '/forgot-password',
        component: ForgotPassword,
        name: 'forgot-password',
        meta : {
            guard : 'guest'
        }
    },
    {
        path: '/reset-password/:token',
        props: route => ({
            token: route.params.token,
            email: route.query.email
        }),
        component: ResetPassword,
        name: 'reset-password',
        meta : {
            guard : 'guest'
        }
    },


    
    {
        path: '/siteadmin/register',
        component: Register,
        name: 'register',
        meta: {
            guard: 'auth'
        }
    },
    {
        path: '/verify-email/:id/:hash',
        props: route => ({
            id: route.params.id,
            hash: route.params.hash           
        }),
        component: VerifyEmail,
        name: 'verify-email',

    },

    {
        path: '/settings2',
        component: Settings2,
        // redirect: {
        //     name: 'profile2'
        // },
        name: 'settings2',
        meta: {
            guard: 'auth'
        }

    },


    {
        path: '/settings',
        component: Settings,
        redirect: {
            name: 'profile'
        },
        name: 'settings',
        meta: {
            guard: 'auth'
        },
        children: [{
                path: 'profile',
                component: Profile,
                name: 'profile',
                meta: {
                    guard: 'auth'
                },

            },
            {
                path: 'password',
                component: Password,
                name: 'password',
                meta: {
                    guard: 'auth'
                },

            },
            {
                path: 'password',
                component: Password,
                name: 'password2',
                meta: {
                    guard: 'auth'
                },

            },
        ]
    },
    {
        path: '/:pathMatch(.*)*',
        redirect: '/home',

    }
];
