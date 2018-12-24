<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class NewsController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index(){

    	$endpoint = "https://newsapi.org/v2/top-headlines?sources=bbc-sport,bbc-news&apiKey=a75923e03c3146c79a954af6202e5608";
		$client = new Client();
		$response = $client->get($endpoint);
		$statusCode = $response->getStatusCode();
		$content = json_decode($response->getBody()->getContents());

		$articles = $content->articles;
		//dd($articles);
		return view('news/index', compact('articles'));
    }


    public function filterBy(Request $request){

    	$filterBy = $request->author;
    	if(!$filterBy){
    		return redirect('/');
    	}
    	
    	$endpoint = "https://newsapi.org/v2/top-headlines?sources=".$filterBy."&apiKey=a75923e03c3146c79a954af6202e5608";
		$client = new Client();
		$response = $client->get($endpoint);
		$statusCode = $response->getStatusCode();
		$content = json_decode($response->getBody()->getContents());

		$articles = $content->articles;
		//dd($articles);
		return view('news/filter_by', compact('articles', 'filterBy'));

    }
}
