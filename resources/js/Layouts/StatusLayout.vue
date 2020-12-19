<template>
    <div class=" bg-gray-100">
        <nav class="" :style="{backgroundColor: '#29303b'}">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center ">
                            <inertia-link :href="route('home')">
                                <jet-application-mark class="block h-9 w-auto" />
                            </inertia-link>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">

                            <inertia-link :href="route('cursos.show', this.slug)"
                                          class="hover:text-gray-400 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white  transition duration-150 ease-in-out uppercase">
                                <i class="fas fa-angle-double-right mr-2"></i> {{this.title}}
                            </inertia-link>
                        </div>
                    </div>


                    <!-- Settings Dropdown -->
                    <div v-if="$page.user" class="hidden sm:flex sm:items-center sm:ml-6">
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


                                        <div class="border-t border-gray-100"></div>



                                    </template>
                                </jet-dropdown>
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

                    <inertia-link
                        v-for="(item, index) in routes" :key="index"
                        :href="route(item.route)"
                        :active="route().current(item.route)"
                        class="block pl-3 pr-4 py-2 text-base font-medium text-white hover:bg-white hover:text-gray-800 transition duration-150 ease-in-out"
                    >
                        {{item.name}}
                    </inertia-link>

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


                            <inertia-link :href="route('profile.show')" :active="route().current('profile.show')"
                                          class="block pl-3 pr-4 py-2 text-base font-medium text-white hover:bg-white hover:text-gray-800 transition duration-150 ease-in-out">
                                Profile
                            </inertia-link>


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

    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
    import Footer from '@/components/Dashboard/Footer'


    export default {
        components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Footer
        },
        props: {
            title:null,
            slug: null
        },
        data() {
            return {
                showingNavigationDropdown: false,
                routes: [
                    {route: 'home', name: 'Home'},
                    {route: 'cursos', name: 'Cursos'},
                ]
            }
        },

        methods: {
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
