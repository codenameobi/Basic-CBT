<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreTestRequest;
use App\Question;
use App\Option;

class TestsController extends Controller
{
    public function index()
    {
        return view('client.test', compact('categories'));
    }
   
    public function store(StoreTestRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create(
            [
            'total_points' => $options->sum('points')
            ]
        );

        $questions = $options->mapWithKeys(
            function ($option) {
                return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
            }
        )->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }

    public function show($id)
    {
    
        $categories = Category::with(
            ['categoryQuestions' => function ($query) {
                $query->inRandomOrder()
                    ->with(
                        ['questionOptions' => function ($query) {
                            $query->inRandomOrder();
                        }]
                    );
                }])->whereHas('categoryQuestions', function ( $query ) use ( $id ){
                    $query->where('category_id', $id);
                })
                ->get();
    
            return view('client.test', compact('categories'));
    }

}
