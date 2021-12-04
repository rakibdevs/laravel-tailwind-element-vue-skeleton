<template>
	<nav class="header flex  bg-white shadow z-30 fixed top-0 w-full">
  		<div class="container m-auto px-2 sm:px-4 lg:px-8">
    		<div class="flex justify-between h-14 md:h-18">
      			<div class="flex px-2 lg:px-0">
        			<div class="flex-shrink-0 flex items-center">
          				<a class="inline-flex items-center" href="/">
          					<img class="front-logo" src="/images/logo.png">
          				</a>

          			</div>
      			</div>
	        	<div class="hidden lg:ml-6 xl:ml-8 lg:flex lg:space-x-8 nav-menu">

	        	</div>


      			<div class="flex items-center justify-right ">
      				<a v-if="!authUser" href="/login" class=" px-3 py-1 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Login</a>
      				<div v-if="authUser">
      					<i class="text-4xl font-normal text-gray-500 las la-user-circle cursor-pointer"></i>
      				</div>
			    </div>
    		</div>
  		</div>

  		<div class="hidden lg:hidden" id="mobile-menu" data-controller="toggle" data-toggle-target="toggleable">
    		<div class="px-2 pt-2 pb-3">
				<a class="block px-3 py-2 rounded-xl text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/">Home</a>
				<a class="block px-3 py-2 rounded-xl text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/privacy-policy">Privacy Policy</a>
			</div>
		</div>
	</nav>
</template>

<script>
	import queryString from 'query-string';
	import { mapState, mapGetters } from 'vuex'
	export default{
		props: {
	        authUser: {
	            type: Object,
	            required: false
	        },
	    },
		data(){
			return {
				keyword:'',
				fetch: false
			}
		},
		computed: {
		    ...mapGetters([
		      'isAuth',
		      'user'
		    ])
		},
		created(){
		},
		methods:{
		}
	}

</script>
