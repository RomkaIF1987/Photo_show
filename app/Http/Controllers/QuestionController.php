<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;
use Exception;
use Illuminate\Http\Response;

class QuestionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('questions.create', [
            'question' => new Question()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest $request
     * @return Response
     */
    public function store(QuestionRequest $request)
    {
        $params = $request->validated();

        Question::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Question $question
     * @return Response
     * @throws Exception
     */
    public function edit(Question $question)
    {
        return view('questions.edit', [
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param QuestionRequest $request
     * @param Question $question
     * @return void
     */
    public function update(QuestionRequest $request, Question $question)
    {
        $params = $request->validated();

        $question->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return Response
     * @throws Exception
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return back();
    }
}
