<template>
    <div class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block text-white bg-indigo-900 border-r z-40">

        <div class="w-full h-18 flex px-4 items-center mb-8" style="height:57px;">
            <img class="admin-logo" src="/images/logo.png">
        </div>

        <div class="mb-4 px-4">
            <a href="/admin/" class="w-full flex items-center text-white-400 h-10 pl-4 rounded-lg cursor-pointer">
                <i class="h-6 w-6 text-2xl las la-home"></i>
                <span class="text-white-700 pl-3">Dashboard</span>
            </a>
        </div>
        <div class="mb-4 px-4">
            <a href="/admin/" class="w-full flex items-center text-white-400 h-10 pl-4 rounded-lg cursor-pointer">
                <i class="h-6 w-6 text-2xl las la-home"></i>
                <span class="text-white-700 pl-3">Mwnu 1</span>
            </a>
        </div>
        <div class="mb-4 px-4">
            <a href="/admin/" class="w-full flex items-center text-white-400 h-10 pl-4 rounded-lg cursor-pointer">
                <i class="h-6 w-6 text-2xl las la-home"></i>
                <span class="text-white-700 pl-3">Menu 2</span>
            </a>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'

export default {
    name: 'Sidebar',
    computed: {
    }
}
</script>
{"mode":"full","isActive":false}
