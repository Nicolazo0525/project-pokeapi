<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $informationPokemon = [];
        $pokemon = [];

        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://pokeapi.co/api/v2/pokemon?offset=300&limit=12');
        $datas = json_decode($response->getBody()->getContents(), true);

        foreach ($datas['results'] as $pokemon) {
            $url = $pokemon['url'];
            $apiTwo = new \GuzzleHttp\Client();
            $response = $apiTwo->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);
            $pokemon = [
                'name' => $pokemon['name'],
                'url' => $pokemon['url'],
                'imageOne' => $data['sprites']['other']['home']['front_default'],
                'imageTwo' => $data['sprites']['front_default'],
                'imageThree' => $data['sprites']['front_shiny'],
                'type' => $data['types']['0']['type']['name'],
            ];

            $newComplete = new stdClass();
            $newComplete->pokemon = $pokemon;

            if (!is_null($pokemon) && !($pokemon=='[]')) {
                dd($pokemon);
                $newComplete->information = $pokemon[0];
                dump($newComplete->information);
            }else{
                $newComplete->information = null;
            }
            array_push($informationPokemon, $newComplete);
        }

        return Inertia::render('Auth/IndexPokemon', ['informationPokemons' => $informationPokemon]); */
        return Inertia::render('Auth/IndexPokemon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
