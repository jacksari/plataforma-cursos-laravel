<template>
    <auth-layout>
        <div class="animation-area font-mono bg-transparent flex justify-center">
            <!-- Container -->
            <ul class="box-area z-0">

                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="auth container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1570215171655-49dc3fa810b2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Update your password</h3>
                                <p class="mb-4 text-sm text-gray-700">
                                    We get it, stuff happens. Just enter your email address below and we'll send you a
                                    link to reset your password!
                                </p>
                            </div>
                            <form
                                @submit.prevent="updatePassword"
                                class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                            >
                                <div class="mb-4">
                                    <label for="email" class="block mb-2 text-sm font-bold text-gray-700" >
                                        Email
                                    </label>
                                    <input
                                        v-model="form.email"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="email"
                                        type="email"
                                        placeholder="Enter Email Address..."
                                    />
                                    <div v-if="errors.email" class="text-red-500">{{this.errors.email}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">
                                        Password
                                    </label>
                                    <input
                                        v-model="form.password"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password"
                                        type="password"
                                        placeholder="Enter your new password"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label for="password_confirmation" class="block mb-2 text-sm font-bold text-gray-700">
                                        Password Confirmation
                                    </label>
                                    <input
                                        v-model="form.password_confirmation"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password_confirmation"
                                        type="password"
                                        placeholder="Enter your password confirmtion"
                                    />
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                        type="submit"
                                    >
                                        Reset Password
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="./register.html"
                                    >
                                        Create an Account!
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="./index.html"
                                    >
                                        Already have an account? Login!
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </auth-layout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";
export default {
    components: {AuthLayout},
    props: {
        errors: Object,
    },
    data(){
        return{
            form:{
                email: null,
                password: null,
                password_confirmation:null,
                token:null

            }
        }
    },
    methods:{
        updatePassword(){
            this.form.token = this.$page.request.token;
            this.$inertia.post(this.route('password.update'), this.form,{
                onSuccess: () => {
                },
            })
        }
    }
}

</script>
<style>
.animation-area{
    background: linear-gradient(to left, #8942a8, #ba382f);
    height: 100vh;
}
@media (max-width: 768px) {
    .animation-area {
        height: 110vh;
    }
}
.auth{
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
}
</style>
