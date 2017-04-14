<?php
namespace App\TmdbApi;
class TmdbApi
{
    public static function SearchMovie($name){
        return tmdb()->searchMovie($name);
    }
    public static function getMovie($id){
        return tmdb()->getMovie($id);
    }
    public static function searchSerie($name){
        return tmdb()->searchTVShow($name);
    }
    public static function getSerie($idSerie){
        return tmdb()->getTVShow($idSerie);
    }
    public static function getSeason($idSerie, $numSeason){
        return tmdb()->getSeason($idSerie, $numSeason);
    }
    public static function getEpisode($idSerie, $numSeason, $numEpisode){
        return tmdb()->getEpisode($idSerie, $numSeason, $numEpisode);
    }
    public static function getCast($idPerson){
        return tmdb()->getPerson($idPerson);
    }

}