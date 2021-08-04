<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Repository\ServiceRepositoryInterface;

class ServiceController extends Controller
{
    private $serviceRepository;
  
    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    function index() {
        $services = $this->serviceRepository->all();
        return view('price', [ 'services' => $services ]);
    }
};
