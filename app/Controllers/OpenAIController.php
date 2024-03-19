<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OpenAIController extends BaseController
{
    public function index()
    {
        <?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\GeneratorOpenAIService;

class OpenAIController extends BaseController
{
    private $openAiService;

    public function __construct()
    {
        $this->openAiService= new GeneratorOpenAIService;
    }

    public function chatOpenAi()
    {
        $question = "How artificial intelligence is transforming the world?";

        if ($question == null) {
            return redirect("/");
        }

        $response= $this->openAiService->generateResponseOpenAi($question);

        return $this->response->setJSON([
            'question' => $question,
            'response' => $response
        ]);
    }
}
    }
}
