<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{

    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('auth')->only([
            'update',
            'edit',
            'destroy' // Could add bunch of more methods too
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        $reviews_c = Review::where('confirmed', 1)->orderBy('id', 'desc')->get();
        $reviews_n = Review::where('confirmed', 0)->orderBy('id', 'desc')->get();

        return view('reviews.indexauth', compact('reviews_c','reviews_n'));
      }else{
        $reviews = Review::where('confirmed', 1)
                ->orderBy('id', 'desc')
               ->get();
        return view('reviews.index', compact('reviews'));
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validator($request->all())->validate();

      $review = new Review;

      $review->author = $request->author;
      $review->text = $request->text;
      $review->email = $request->email;
      $review->confirmed = 0;

      $review->save();

      return redirect('/reviews')
            ->with('success', 'Мы получили Ваш отзыв, спасибо Вам!');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'author' => ['required', 'string'],
            'text' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:reviews']
        ],
        [
            'author.required' => 'Напишите свое имя',
            'author.string' => 'Поле Телефон должно быть строчного типа',
            'text.required' => 'Заполните свой отзыв',
            'email.required' => 'Поле Email должно быть заполнено',
            'email.string' => 'Поле Email должно быть строчного типа',
            'email.unique' => 'Отзыв с таким email уже есть',
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findorFail($id);


        return view('reviews.edit', compact('review'));
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
      $review = Review::findorFail($id);
      $review->author = $request->author;
      $review->text = $request->text;
      $review->email = $request->email;
      $review->confirmed = 1;

      $review->save();

      return redirect('/reviews')
            ->with('success', 'Отзыв изменен и утвержден');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findorFail($id);
        $review->delete();

        return redirect('/reviews')
              ->with('success', 'Запись успешно удалена');
    }
}
