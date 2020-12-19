<template>
    <div class="min-h-screen bg-white">
        <nav class="bg-white dark:bg-gray-600 border-b border-gray-100 dark:border-gray-100 shadow-md">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <inertia-link :href="route('home')">
                                <jet-application-mark class="block h-9 w-auto" />
                            </inertia-link>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <jet-nav-link v-for="(item, index) in routes" :key="index" :href="route(item.route)" :active="route().current(item.route)">
                                {{item.name}}
                            </jet-nav-link>
                            <jet-nav-link v-if="$page.user" :href="route('my-courses')" :active="route().current('my-courses')">
                                Mis cursos
                            </jet-nav-link>

                        </div>

                    </div>


                    <!-- Settings Dropdown -->
                    <div v-if="$page.user" class="hidden sm:flex sm:items-center sm:ml-6">
                            <toggle-mode/>
                            <div class="ml-3 relative">
                                <jet-dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.user.profile_photo_path" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.user.profile_photo_path" :alt="$page.user.name" />
                                        </button>

                                        <button v-else class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div>{{ $page.user.name }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <jet-dropdown-link :href="route('profile.show')">
                                            Profile
                                        </jet-dropdown-link>

                                        <jet-dropdown-link :href="route('dashboard')">
                                            Dashboard
                                        </jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>


                                        <!-- Authentication -->

                                        <a
                                            @click="logout"
                                            class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
                                        >Cerrar sesión</a>

                                    </template>
                                </jet-dropdown>
                            </div>
                        </div>


                        <div v-if="!$page.user" class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <div align="right" width="48">

                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        <inertia-link :href="route('login')" class="bg-white-600 border-purple-600 border-2 hover:bg-purple-700 hover:text-white text-purple-600 font-bold py-1 rounded shadow-lg hover:shadow-xl transition duration-200 px-5 mx-2">
                                            Login
                                        </inertia-link>
                                        <inertia-link :href="route('register')" class="bg-purple-600 border-purple-600 border-2 hover:bg-white hover:text-purple-600 text-white font-bold py-1 rounded shadow-lg hover:shadow-xl transition duration-200 px-5 mx-2">
                                            Register
                                        </inertia-link>
                                    </div>

                                </div>
                            </div>
                        </div>


                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">

                <div class="pt-2 pb-3 space-y-1">
                    <jet-responsive-nav-link v-for="(item, index) in routes" :key="index" :href="route(item.route)" :active="route().current(item.route)">
                        {{item.name}}
                    </jet-responsive-nav-link>

                </div>
                <div v-if="$page.user">
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" :src="$page.user.profile_photo_path" :alt="$page.user.name" />
                            </div>

                            <div class="ml-3">
                                <div class="font-medium text-base text-gray-800">{{ $page.user.name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ $page.user.email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
                                Profile
                            </jet-responsive-nav-link>

                            <jet-responsive-nav-link :href="route('dashboard')">
                                Dashboard
                            </jet-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <jet-responsive-nav-link as="button">
                                    Logout
                                </jet-responsive-nav-link>
                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </nav>



        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>

        <Footer/>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
    import Footer from '@/components/Dashboard/Footer'
    import ToggleMode from "@/components/UI/ToggleMode";


    export default {
        components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Footer,
            ToggleMode
        },

        data() {
            return {
                showingNavigationDropdown: false,
                routes: [
                    {route: 'home', name: 'Home'},
                    {route: 'cursos', name: 'Cursos'},
                    {route: 'horarios', name: 'Horarios'},
                    {route: 'blog', name: 'Blog'},
                    {route: 'contacto', name: 'Contacto'},
                ]
            }
        },

        methods: {
            dark(){
                if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.querySelector('html').classList.add('dark')
                } else {
                    document.querySelector('html').classList.remove('dark')
                }
            },
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(this.route("logout"), {

                    onSuccess: () => {

                    },
                },{ preserveState: true, preserveScroll: true })
            },
        }
    }
</script>
