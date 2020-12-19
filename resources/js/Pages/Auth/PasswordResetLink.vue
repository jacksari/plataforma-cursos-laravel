<template>
    <auth-layout>
        <div class="animation-area font-mono bg-gray-400 flex justify-center">

            <ul class="box-area z-0">

                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <!-- Container -->
            <div class="auth container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1546514714-bbedf0abd907?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Forgot Your Password?</h3>
                                <p class="mb-4 text-sm text-gray-700">
                                    We get it, stuff happens. Just enter your email address below and we'll send you a
                                    link to reset your password!
                                </p>
                            </div>
                            <form
                                @submit.prevent="requestPasswordLink"
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
                                    <inertia-link
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        :href="route('register')"
                                    >
                                        Create an Account!
                                    </inertia-link>
                                </div>
                                <div class="text-center">
                                    <inertia-link
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        :href="route('login')"
                                    >
                                        Already have an account? Login!
                                    </inertia-link>
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
            }
        }
    },
    methods:{
        async requestPasswordLink(){
            this.$inertia.post(this.route('password.email'), this.form,{
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
