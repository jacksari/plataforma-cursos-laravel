<template>
    <div class=" flex h-screen bg-gray-200 font-roboto">
        <backend-sidebar />
        <div class="flex-1 flex flex-col overflow-hidden">
            <backend-header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

                <div class="container mx-auto px-2 py-4">
                    <flash-messages/>
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
<script>
    import BackendSidebar from "../Components/Backend/Sidebar";
    import BackendHeader from "../Components/Backend/Header";
    import FlashMessages from "@/components/UI/FlashMessages";
    export default {
        name: "BackendLayout",
        components: {FlashMessages, BackendHeader, BackendSidebar}
    }
</script>
