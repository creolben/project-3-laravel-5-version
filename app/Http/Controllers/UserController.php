<?php namespace App\Http\Controllers;
use vendor\fzaninotto\faker\src;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller {
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
		$number = "";
		//validate the input
    $validator = Validator::make($request->all(), [
            'number' => 'sometimes|required|integer|between:1,99',

        ]);

    if ($validator->fails()) {
        return redirect('paragraphs')
                    ->withErrors($validator)
                    ->withInput();
    }
		//create generator object
    $generator = new \Badcow\LoremIpsum\Generator();
		//assign input value to variable number
		$number = $request->input('number');
		$paragraphs = $generator->getParagraphs($number);
		//go to p generator page with paragraphs and number variables embeded
		return \View::make('p_generator', compact('paragraphs','number'));
}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function generate_user(Request $request)
	{
		$number = 1;
		//validate the input
    $validator = Validator::make($request->all(), [
            'number' => 'sometimes|required|integer|between:1,99',

        ]);

    if ($validator->fails()) {
        return redirect('user')
                    ->withErrors($validator)
                    ->withInput();
    }

		/*
		  validate number is not empty, is a number and greater than 1
		*/
		$number = $request->input('number');
		// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

		// use the factory to create a Faker\Generator instance
		$faker = \Faker\Factory::create();
		return \View::make('generate_user', compact('faker','number'));
	}


}
