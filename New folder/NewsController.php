<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    function GetSportsNews() {

      header('Access-Control-Allow-Origin: *');
  		$newsapikey = $this->newsapikey;


      $newsdata = json_decode(file_get_contents('https://newsapi.org/v1/articles?source=talksport&sortBy=top&apiKey=e800a2ad92694cccb1c003522bd027f2'));
//var_dump($newsdata);
      $articles = $newsdata->articles;
      foreach ($articles as $keysa) {
      $title = $keysa->title;
      $author = $keysa->author;
      $description = $keysa->description;
      $url = $keysa->url;
      $urlToImage = $keysa->urlToImage;
      $publishedAt = $keysa->publishedAt;

      $apiresult = DB::table('sasa_news')->where('title',$title)->where('author',$author)->first();
      if($apiresult) {
        return $data_array = array('data' =>'News content/title already exists');
      }
      else {
        DB::insert('insert into sasa_news (title, author, description, url, urlToImage, publishedAt) values (?,?,?,?,?,?)', [$title, $author, $description,$url,$urlToImage,$publishedAt]);
         $data_array[] = array('title' =>$title,'description'=>$description,'urlToImage'=>$urlToImage);
      }

      }

        return $data_array;

    }


    function GetAppSportsNews() {
      header('Access-Control-Allow-Origin: *');
      $apiresult = DB::table('sasa_news')
      ->orderBy('newsid','desc')
      ->limit(10)
      ->get();
      foreach ($apiresult as $keysa) {
      $title = $keysa->title;
      $author = $keysa->author;
      $description = $keysa->description;
      $url = $keysa->url;
      $urlToImage = $keysa->urlToImage;
      $publishedAt = $keysa->publishedAt;

      $data_array[] = array('title' =>$title,'url' =>$url,'description'=>$description,'urlToImage'=>$urlToImage,'status_code'=>200);
    }

    if(empty($data_array)) {
      $data_array[] = array('title' =>'0','url' =>'0','description'=>'0','urlToImage'=>'0','status_code'=>500);
    }

      return $data_array;

    }


function GetMatchLineUps() {

}

}
