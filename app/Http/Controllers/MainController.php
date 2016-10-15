<?php namespace App\Http\Controllers;
use vendor\fzaninotto\faker\src;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
class MainController extends BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
public function index()
{

	return \View::make('home');
}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function paragraphs(Request $request)
	{
		//if the number field is empty, assign 0 to avoid error
      $number = $request->input('num');
		  $generator = new \Badcow\LoremIpsum\Generator();
			$message = "form-group has-success has-feedback";
			$feedback = "glyphicon glyphicon-ok form-control-feedback";
			#$fieldValue = $_GET['num'];
			$paragraphs = $generator->getParagraphs($number + 1);



		return \View::make('p_generator', compact('paragraphs','number','message','feedback','fieldValue'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function user_gen()
	{

		/*
		  validate number is not empty, is a number and greater than 1
		*/
		if (isset($_GET['num']) AND !empty($_GET['num']) AND is_numeric($_GET['num']) AND $_GET['num'] > 0 AND $_GET['num'] <= 99){
				$number = $_GET['num'];
				$message = "form-group has-success has-feedback";
				$feedback = "glyphicon glyphicon-ok form-control-feedback";
				$fieldValue = $_GET['num'];
		}elseif (empty($_GET['num'])) {
				$fieldValue = "";
				$number = 0;
				$message = "form-group has-error has-feedback";
				$feedback = "glyphicon glyphicon-remove form-control-feedback";
			}

		else {
				$fieldValue = $_GET['num'];
				$number = 0;
				$message = "form-group has-error has-feedback";
				$feedback = "glyphicon glyphicon-remove form-control-feedback";
			}
		// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

		// use the factory to create a Faker\Generator instance
		$faker = \Faker\Factory::create();
		return \View::make('u_generator', compact('faker','number','message','feedback','fieldValue'));
	}


}
