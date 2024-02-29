<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Models\RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function accept(Request $request, RequestModel $requestModel)
    {
        // Update artisan's profession
        $artisan = $requestModel->artisan;
        $artisan->professions()->sync([$request->new_profession]);

        // Update request status
        $requestModel->update(['status' => 'approved']);

        // Redirect or do whatever is necessary
    }

    public function reject(Request $request, RequestModel $requestModel)
    {
        // Update request status to rejected
        $requestModel->update(['status' => 'rejected']);

        // Redirect or do whatever is necessary
    }

}
