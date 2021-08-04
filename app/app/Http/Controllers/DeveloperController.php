<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Repository\DeveloperRepositoryInterface;

class DeveloperController extends Controller
{
    private $developerRepository;
  
    public function __construct(DeveloperRepositoryInterface $developerRepository)
    {
        $this->developerRepository = $developerRepository;
    }

    function index() {
        $developers = $this->developerRepository->allWith(['developer_services.service']);
        return view('developer', [ 'developers' => $developers ]);
    }
};
