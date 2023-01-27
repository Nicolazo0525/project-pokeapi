import { ref } from 'vue';
import axios from "axios";

export default function usePokemons(){

    const pokemons = ref([]);
    const pokemon = ref([]);

    const getPokemons = async () => {
        let response = await axios.get('https://rickandmortyapi.com/api/character/?page=1')
        pokemons.value = response.data.results;
    }

    const getPokemon = async (id) => {


        let response = await axios.get('https://rickandmortyapi.com/api/character/'+id.replace(/['"]+/g, ''))
        pokemon.value = response.data;
    }

    return {
        pokemons,
        getPokemons,
        pokemon,
        getPokemon
    }
}
