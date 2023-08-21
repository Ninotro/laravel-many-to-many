<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function testApi() {
        return response() -> json([
            'message' => 'Hello World!'

        ]);
            

        }

        public function projectIndex() {
            $projects =  Project :: with('technologies') -> paginate(5);

            return response() -> json([
                'projects' => $projects

            ]);
        }
        
}

