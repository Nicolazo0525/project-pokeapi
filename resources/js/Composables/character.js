/* import { ref } from 'vue';
import axios from "axios";

export default function usePokemons(){

    const pokemons = ref([]);

    const getPokemons = async () => {
        let response = await axios.get('https://rickandmortyapi.com/api/character/'+character)
        pokemons.value = response.data.results;
    }

    return {
        pokemons,
        getPokemons
    }
}

 */
