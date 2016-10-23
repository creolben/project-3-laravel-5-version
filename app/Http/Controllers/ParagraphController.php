<?php namespace App\Http\Controllers;
use vendor\fzaninotto\faker\src;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class ParagraphController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function generate_paragraphs(Request $request)
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
			return \View::make('generate_paragraphs', compact('paragraphs','number'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


}
