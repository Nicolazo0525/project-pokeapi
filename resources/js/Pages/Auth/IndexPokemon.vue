
<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    import usePokemons from "../../Composables/pokemons";

    import { onMounted,ref } from "vue";

    const { pokemons, getPokemons } = usePokemons()

    onMounted(() => {
        getPokemons()

    })



</script>

<template>
    <Head title="Index Characters" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Characters</h2>
        </template>

        <div class="grid grid-cols-1 gap-5 m-10 md:grid-cols-3 lg:grid-cols-4">
            <template v-for="pokemon in pokemons" :key="pokemon.id">

                <div class="p-3 duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl hover:transform hover:scale-105 ">
                    <div class="w-full ">
                        <img :src="pokemon.image" alt="" class="items-start object-cover w-full h-48 rounded-xl">
                    </div>
                    <div class="mt-2 text-center">
                        <h2 class="text-lg font-bold text-slate-700">{{ pokemon.name }}</h2>
                    </div>
                    <div class="flex items-center justify-center gap-2 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <!-- <router-link :to="{name:'info-character', params:{id:item.id}}">
                            View
                        </router-link> -->
                        <div>
                            <Link :href="route('info-character', pokemon.id)">
                                View Description
                            </Link>
                            <modal></modal>
                        </div>

                        <!-- <link :href="route('info-character', pokemon.id)">
                            View Description
                        </link> -->

                        <!-- <router-link to="{name:'info-character', params:{id:pokemon.id}}"></router-link> -->
                    </div>

                </div>


                <!-- <img src="{{ pokemon.imageOne }}" class="w-16 h-16" alt=""> -->
            </template>
        </div>


        <!-- <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in! sadasdasdas</div>
                </div>
            </div>
        </div> -->

    </AuthenticatedLayout>

</template>
<script>
  import modal from "../../Components/ModalInformation.vue"
    export default {
    name: "large-modal",
    data() {
        return {
        showModal: false
        }
    },
    methods: {
        toggleModal: function(){
        this.showModal = !this.showModal;
        }
    },
    return: {
        modal
    }
}
</script>
