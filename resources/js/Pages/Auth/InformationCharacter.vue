<script setup>

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import usePokemons from "../../Composables/pokemons";
    import { onMounted, defineProps } from "vue";

    const { pokemon, getPokemon } = usePokemons()



    const props = defineProps(['character'])



    onMounted(() => {

        getPokemon(props.character )

    })

</script>

<template>
    <Head title="Information Character" />
    <AuthenticatedLayout>


        <div class="flex flex-row flex-wrap w-2/3 h-screen p-3 mx-auto my-10 bg-white border border-gray-200 shadow-md rounded-xl">
            <div class="mx-auto ">
                <!-- Profile Card -->
                <div class="flex flex-row flex-wrap w-full p-3 antialiased rounded-lg shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500" style="

                ">
                    <div class="w-full md:w-1/3">
                        <img class="antialiased rounded-lg shadow-lg" :src=pokemon.image>
                    </div>
                    <div class="flex flex-row flex-wrap w-full px-3 md:w-2/3">
                        <div class="relative w-full pt-3 font-semibold text-right text-gray-700 md:pt-0">
                            <div class="text-2xl leading-tight text-white">{{ pokemon.name }}</div>
                            <div class="text-base text-gray-300 cursor-pointer hover:text-gray-200"><span class="pb-1 border-b border-gray-500 border-dashed">Species: {{  pokemon.species }} </span></div>
                            <div class="text-base text-gray-300 cursor-pointer hover:text-gray-200"><span class="pb-1 border-b border-gray-500 border-dashed">Gender: {{  pokemon.gender }} </span></div>

                            <div class="bottom-0 right-0 pt-3 text-gray-300 cursor-pointer text-md hover:text-gray-200 md:absolute md:pt-0">
                                <span>{{ pokemon.origin?.name }}</span>
                            </div>
                        </div>

                    </div>


                </div>

                <div  class="">
                    <div class="relative inline-block w-full overflow-y-auto shadow-md o-7verflow-x-auto min-h-[10em] max-h-[27em] mt-4 rounded-md shadrop-shadow-sm">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th colspan="2" class="px-3 py-3 text-xs font-semibold tracking-wider text-center text-gray-600 uppercase bg-gray-100 border-b border-r border-gray-200">
                                        Episode
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr v-for="episod in pokemon.episode" :key="episod.id">
                                    <td class="w-2/5 px-3 py-3 text-sm bg-white border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ episod }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>


    </AuthenticatedLayout>
</template>

