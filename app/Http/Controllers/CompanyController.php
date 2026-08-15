<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
       $services = [
        [
            'icon_image' => 'images/web-development.png',
            'title' => 'Web Development',
            'description' => 'Modern, responsive websites and business platforms designed around real user needs.'
        ],
        [
            'icon_image' => 'images/mobile-development.png',
            'title' => 'Mobile Development',
            'description' => 'Cross-platform mobile experiences that help organizations serve customers anywhere.'
        ],
        [
            'icon_image' => 'images/ui-ux-design.png',
            'title' => 'UI/UX Design',
            'description' => 'Clean interfaces and thoughtful user journeys that make digital products easier to use.'
        ],
        [
            'icon_image' => 'images/cloud-solutions.png',
            'title' => 'Cloud Solutions',
            'description' => 'Scalable cloud-ready solutions for storage, deployment, and collaboration.'
        ],
        [
            'icon_image' => 'images/cybersecurity.png',
            'title' => 'Cybersecurity',
            'description' => 'Practical security solutions that help protect applications, data, and users.'
        ],
        [
            'icon_image' => 'images/it-consultation.png',
            'title' => 'IT Consulting',
            'description' => 'Technology guidance that helps businesses choose suitable tools and improve workflows.'
        ],
    ];

    return view('pages.services', compact('services'));
    
    }

    public function contact()
    {
        return view('pages.contact');
    }
}