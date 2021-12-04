<template>
	<div class="mt-3">
		<div class="footer-section pt-3 pb-3 text-center">
			<div class="social-media flex justify-center">
				<a class=" mx-2 curson-pointer hover:text-red-600" href=""><i class="text-2xl lab la-facebook"></i></a>
				<a class=" mx-2 curson-pointer hover:text-red-600" href=""><i class="text-2xl lab la-instagram"></i></a>
				<a class=" mx-2 curson-pointer hover:text-red-600" href=""><i class="text-2xl lab la-twitter"></i></a>
				<a class=" mx-2 curson-pointer hover:text-red-600" href=""><i class="text-2xl lab la-youtube"></i></a>
			</div>
			<p class="my-2">
				© 2021, Skeleton. All Rights Reserved.
			</p>
		</div>
	</div>
</template>
<script>
	export default{
		 data () {
	        return {
	            libCuisines: [],
	            libCategories: [],
	            libFeatures: [],
	        }
    	},
    	created () {
	        this.fetchLibrary();
	    },
	    methods: {
			fetchLibrary(){
		        // fetch cuisine
		        if(this.ignore !='cuisine'){
		            axios.get('/api/fetch/cuisines').then(({data}) => {
		                this.libCuisines = data.slice(0,5);
		            });
		        }
		        // fetch cuisine
		        if(this.ignore !='category'){
		            axios.get('/api/fetch/categories').then(({data}) => {
		                this.libCategories = data.slice(0,5);
		            });
		        }
		        // fetch cuisine
		        if(this.ignore !='feature'){
		            axios.get('/api/fetch/features').then(({data}) => {
		                this.libFeatures = data.slice(0,5);
		            });
		        }
		    },
	    }
	}
</script>
