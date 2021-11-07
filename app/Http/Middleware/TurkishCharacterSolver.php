<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class TurkishCharacterSolver {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$response = $next($request);

	        $response->setContent(str_replace([
	            '&ccedil;', '&uuml;', '&ouml;', '&Uuml;', '&Ouml;', '&Ccedil;',
	        ], [
	            'ç', 'ü', 'ö', 'Ü', 'Ö', 'Ç'
	        ], $response->getContent()));

	        return $response;
	}

}

?>

<?php
/*
Laravel 4:
------------
Bunu filters.php'nin içindeki gerekli yere yerleştirin.
*/
?>

<?php
App::after(function($request, $response)
{
	$output = $response->getOriginalContent();
	$output = str_replace([
	'&ccedil;', '&uuml;', '&ouml;', '&Uuml;', '&Ouml;', '&Ccedil;', '&#039;',
	], [
	'ç', 'ü', 'ö', 'Ü', 'Ö', 'Ç', "'"
	], $output);
	$response->setContent($output);
});
