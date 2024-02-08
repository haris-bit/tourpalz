<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() 
    {
        $data = $this->apiResponse();
        return view('front-end.pages.home',compact('data'));
    }
    public function buddies() 
    {
        $data = $this->apiResponse();
        return view('front-end.pages.buddies',compact('data'));
    }
    public function buddyDetails($id) 
    {

        $data = $this->apiResponse(); // Assuming you are calling the apiResponse function to get your data.
        $buddy=null;
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                $buddy = $item; 
            }
        }

        return view('front-end.pages.buddy_details',compact('buddy'));
    }
    public function bookingDetails($id) 
    {

        $data = $this->apiResponse(); // Assuming you are calling the apiResponse function to get your data.
        $buddy=null;
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                $buddy = $item; 
            }
        }

        return view('front-end.pages.booking_details',compact('buddy'));
    }
    public function apiResponse()
    {
        $data = [
            [
                'id' => 1,
                'personName' => 'John Doe',
                'images' => [
                    'img/persons/p1.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'London, UK',
                'rating' => 4.5,
                'price' => 45,
            ],
            [
                'id' => 2,
                'personName' => 'Jane Smith',
                'images' => [
                    'img/persons/p2.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'Manchester, UK',
                'rating' => 4.0,
                'price' => 48,
            ],
            [
                'id' => 3,
                'personName' => 'Alice Johnson',
                'images' => [
                    'img/persons/p3.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'Edinburgh, UK',
                'rating' => 4.2,
                'price' => 42,
            ],
            [
                'id' => 4,
                'personName' => 'Bob Wilson',
                'images' => [
                    'img/persons/p4.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'Glasgow, UK',
                'rating' => 4.3,
                'price' => 49,
            ],
            [
                'id' => 5,
                'personName' => 'Eva Brown',
                'images' => [
                    'img/persons/p5.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'Birmingham, UK',
                'rating' => 4.7,
                'price' => 47,
            ],
            [
                'id' => 6,
                'personName' => 'David Lee',
                'images' => [
                    'img/persons/p6.jpg',
                    'img/featured-package-3.jpg',
                    'img/featured-package-2.jpg',
                    'img/featured-package-1.jpg',
                    'img/featured-package-4.jpg',
                    'img/featured-package-5.jpg',
                ],
                'location' => 'Liverpool, UK',
                'rating' => 4.1,
                'price' => 44,
            ],
        
        ];

        return $data;
    }

}
