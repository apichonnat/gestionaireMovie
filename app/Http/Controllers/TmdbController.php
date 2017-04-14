<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TmdbApi\TmdbApi;

class TmdbController extends Controller
{
    function search($movie){
        $infos = TmdbApi::SearchMovie($movie);
        if (count($infos) > 1){
            $diffMovie = [];
            foreach ($infos as $info){
                if ($info->getPoster() != null){
                    $array = array('poster' => $info->getPoster(), 'id' => $info->getId());
                    array_push($diffMovie, $array);
                }
            }
            return json_encode(array('status'=>'success', 'data'=>$diffMovie));
        }
        elseif (count($infos) == 1){
            return json_encode(array('status'=>'success', 'data'=>$infos->getId()));
        }
        elseif (count($infos) == 0){
            return json_encode(array('status'=>'warning', 'description'=>'No movie found : '.$movie));
        }
        else{
            return json_encode(array('status'=>'error', 'description'=>'an error has occurred'));
        }
    }

    function getMovie($id){
        $fullInfo = TmdbApi::getMovie($id);
        dd($fullInfo);
    }

    function index(){


        $series = tmdb()->searchTVShow('how i met your mother');

        dd($serie);
        return ;
    }
}
