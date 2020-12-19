<template>
    <auth-layout>
        <div class="animation-area bg-transparent flex justify-center">
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
                <div class="flex justify-center px-6 pt-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 shadow-lg flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                            <form @submit.prevent="register" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label for="name" class="block mb-2 text-sm font-bold text-gray-700">
                                            First Name
                                        </label>
                                        <input
                                            v-model="form.name"
                                            id="name"
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"

                                            type="text"
                                            placeholder="First Name"
                                        />
                                        <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                            Last Name
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="lastName"
                                            type="text"
                                            placeholder="Last Name"
                                        />
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">
                                        Email
                                    </label>
                                    <input
                                        v-model="form.email"
                                        id="email"
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        type="email"
                                        placeholder="Email"
                                    />
                                    <div v-if="errors.email" class="text-red-500">{{ errors.email }}</div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label for="password" class="block mb-2 text-sm font-bold text-gray-700">
                                            Password
                                        </label>
                                        <input
                                            v-model="form.password"
                                            type="password"
                                            id="password"
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            placeholder="******************"
                                        />
                                        <div v-if="errors.password" class="text-red-500">{{ errors.password }}</div>
                                        <p class="text-xs italic text-red-500">Please choose a password.</p>
                                    </div>
                                    <div class="md:ml-2">
                                        <label for="password_confirmation" class="block mb-2 text-sm font-bold text-gray-700">
                                            Confirm Password
                                        </label>
                                        <input
                                            v-model="form.password_confirmation"
                                            type="password"
                                            id="password_confirmation"
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            placeholder="******************"
                                        />
                                    </div>
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
                                        type="submit"
                                    >
                                        Register Account
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <inertia-link
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        :href="route('password.request')"
                                    >
                                        Forgot Password?
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
import AuthLayout from "../../Layouts/AuthLayout";
export default {
    components: {AuthLayout},
    props: {
        errors: Object,
    },
    data() {
        return {
            processing: false,
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
            }
        }
    },
    methods: {
        register() {
            this.processing = true;
            this.$inertia.post(this.route("register"), this.form, {
                onSuccess: () => {
                    this.processing = false;
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
