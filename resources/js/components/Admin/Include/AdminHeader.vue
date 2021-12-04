<template>
    <div class="sticky top-0 z-40">
        <div class="w-full h-15 px-6 bg-white  flex items-center justify-between">
            <!-- left navbar -->
            <div class="flex">
                <div class="w-1/2 md:w-1/3 lg:w-64"></div>
                <div class="inline-block lg:hidden flex items-center mr-4">
                    <button class="hover:text-blue-500 hover:border-white focus:outline-none navbar-burger" @click="toggleSidebar()">
                        <svg class="h-5 w-5" v-bind:style="{ fill: 'black' }" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>

            </div>

            <!-- right navbar -->
            <div class="flex items-center relative p-2">
                <i class="text-4xl font-normal text-gray-500 las la-user-circle cursor-pointer" @click="dropDownOpen = !dropDownOpen"></i>
            </div>

        </div>
        <!-- dropdown menu -->
        <div :class="dropDownOpen ? '' : 'hidden'" class="absolute bg-gray-100 border border-t-0 shadow-xl text-gray-700 rounded-b-lg w-48 right-0 mr-6" >
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Account</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
            <a href="/logout" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'

export default {
    name: 'Navbar',
    computed: {
        ...mapState(['sideBarOpen','isAuth','hasRole'])
    },
    data() {
        return {
            dropDownOpen: false
        }
    },
    methods: {
        toggleSidebar() {
            this.$store.dispatch('toggleSidebar')
        }
    }
}
</script>
{"mode":"full","isActive":false}
