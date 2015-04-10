<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('api/v1/neighborhood', 'ApiController@neighborhood');


Route::get('api/v1/neighborhood/list', function()
{


    return array(
      	1=>"Senayan City,-6.227388,106.797166",
		2=>"Plaza Senayan,-6.225525,106.799186",
		3=>"FX Sudirman,-6.224572,106.803739",
		4=>"Plaza Semanggi,-6.219732,106.814473",
		5=>"Pacific Place,-6.224622,106.809824",
		6=>"Plaza Indonesia,-6.193343,106.821967",
		7=>"Grand Indonesia,-6.195167,106.820241",
		8=>"Kota Kasablanka,-6.223308,106.842717",
		9=>"Mall Ambassador,-6.223979,106.827061",
		10=>"Blok M Plaza,-6.244178,106.797494",
		11=>"Blok M Square,-6.244622,106.800645",
		12=>"Mall Lippo Kemang Village,-6.261101,106.811847",
		13=>"Pejaten Village,-6.280588,106.828933",
		14=>"Cilandak Town Square,-6.291582,106.799799",
		15=>"Mall Kelapa Gading,-6.157313,106.908528",
		16=>"Mall of Indonesia,-6.157313,106.891926",
		17=>"Pluit Village Mall,-6.116414,106.789561",
		18=>"Central Park Mall,-6.17742,106.790779",
		19=>"Mall Ciputra,-6.168244,106.78657",
		20=>"Mall Daan Mogot,-6.153456,106.713863",
		21=>"Mall Puri Indah,-6.188406,106.73398",
		22=>"Mall Taman Anggrek,-6.17895,106.792173",
		23=>"Roxy Square,-6.166653,106.799488",
		24=>"Plaza Slipi Jaya,-6.189085,106.796356",
		25=>"Seasons City,-6.153718,106.796293",
		26=>"Lippo Mall Puri,-6.190463,106.738844",
		27=>"Gajah Mada Plaza,-6.160312,106.818925",
		28=>"ITC Cempaka Mas,-6.164465,106.87767",
		29=>"Citywalk Sudirman,-6.209265,106.818208",
		30=>"Plaza Atrium,-6.177253,106.841441",
		31=>"Thamrin City,-6.194814,106.815848",
		32=>"ITC Roxy Mas,-6.166674,106.803058",
		33=>"Plaza Kalibata,-6.257051,106.855972",
		34=>"Gandaria City,-6.244208,106.78333",
		35=>"Kuningan City,-6.224514,106.829113",
		36=>"ITC Fatmawati,-6.264283,106.798718",
		37=>"ITC Kuningan,-6.223513,106.826207",
		38=>"Lotte Avenue,-6.217725,106.818758",
		39=>"Pondok Indah Mall 1,-6.265305,106.784459",
		40=>"Pondok Indah Mall 2,-6.265313,106.782764",
		41=>"Setiabudi One,-6.215208,106.830218",
		42=>"Cibubur Junction,-6.369783,106.894078",
		43=>"Buaran Plaza,-6.218311,106.923909",
		44=>"Lippo Plaza Kramat Jati,-6.270868,106.867677",
		45=>"Pulogadung Trade Center,-6.183564,106.915669",
		46=>"Tamini Square,-6.291035,106.881423",
		47=>"Citra Gran Cibubur,-6.381822,106.924335",
		48=>"Mall Cipinang Indah,-6.238698,106.894341",
		49=>"La Piazza,-6.16036,106.906",
		50=>"Mall Artha Gading,-6.145822,106.892012",
		51=>"Emporium Pluit Mall,-6.127655,106.790666",
		52=>"Baywalk Pluit,-6.108485,106.778457",
		53=>"WTC Mangga Dua,-6.134656,106.829969",
		54=>"Mangga Dua Square,-6.138645,106.831478",
		56=>"Tangerang City,-6.195339,106.633193",
		57=>"Summarecon Mall Serpong,-6.240823,106.628336",
		58=>"Mall Alam Sutera,-6.22255,106.653642",
		59=>"Supermal Karawaci,-6.226987,106.607088",
		60=>"BSD Junction,-6.283034,106.665031",
		61=>"ITC BSD,-6.287088,106.665234",
		62=>"Bintaro Exchange,-6.285512,106.727816",
		63=>"Bintaro Plaza,-6.272595,106.741705",
		64=>"WTC Matahari,-6.265841,106.654778",
		65=>"Lotte Mall,-6.274537,106.723734",
		66=>"Teraskota,-6.29573,106.667542",
    );

});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



wget -O forge.sh https://forge.laravel.com/servers/29350/vps?forge_token=ZvZbkZ2qoFschdqbK8ctDEQyV5BhmaS2webN42Hl; bash forge.sh