<!DOCTYPE html>
<?php
include_once("constants.php");
// global $baseURL;

?>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="l4lyU32qa4JaBQOorqX6e7qG5I0PNlIIyiWR5FBT">

    <title>Master Tester - Home</title>
    <meta name="description" content="Master Tester is an online test examination software and assessment tool that assists educational institutions,corporate companies to create and conduct web and mobile based exams.">
    <link rel="icon" href="./images/black.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/store.css">
    <style>
        :root {
            /* Custom Theme Configuration */
            --custom-font: "Inter";
            --primary-color: #32064a;
            --secondary-color: #e56b1f;
        }
    </style>
    <style>
        .hero-gradient {
            background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(50, 6, 74, 0.03) 100%);
            background-repeat: no-repeat;
        }
    </style>
    <!-- Scripts -->
    <script src="./vendor/alpinejs/alpine.min.js" defer></script>
</head>

<body class="font-sans antialiased bg-white dark:bg-black">
    <!--TopBar-->
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> this site is under construction.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #32064a;" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/black.png" alt="Logo" width="30" height="24" class="d-inline-block"> Master Tester</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Quizzes.html">
                            Quizzes
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            actions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/create_test.html">Create a test </a></li>
                            <li><a class="dropdown-item" href="/give_test.html">Attend a test</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="/results.html">Check results</a>
                                <a class="dropdown-item" href="#">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">
                            About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_form.php">
                            Login
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn-sm" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="hero-gradient dark:bg-gray-900 border-b border-gray-100 lg:px-4 xl:px-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row">
                <div class="hidden mt-6 md:mt-0 h-96 md:h-auto md:w-1/2 relative lg:mt-0 ltr:pr-6 rtl:pl-6 sm:ltr:pl-20 sm:rtl:pl-20 sm:flex justify-end sm:block">
                    <div class="w-5/6 h-full">
                        <img class="inset-0 absolute object-contain object-bottom z-10 w-auto h-full pt-10" src="./images/hero_image.png" alt="Hero Image" role="img" />
                    </div>
                </div>
                <div class="flex flex-col items-start lg:w-6/12 md:w-6/12 px-4 lg:px-0 md:ml-8 justify-center py-12 sm:py-36">
                    <div class="mb-6 py-1.5 px-4 flex items-center justify-start bg-secondary rounded-full text-sm font-semibold text-white">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M4 6h16v2H4zm2-4h12v2H6zm14 8H4c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm0 10H4v-8h16v8zm-10-7.27v6.53L16 16z" />
                        </svg>
                        <span class="pl-2">We provide free service for all</span>
                    </div>
                    <h1 class="text-5xl sm:text-5xl md:text-4xl lg:text-5xl font-bold leading-tight dark:text-white" style="color: #32064a;">
                        Take a Test</h1>
                    <p class="text-lg text-gray-600 leading-relaxed pt-8 xl:hidden block">All Standard</p>
                    <p class="text-lg text-gray-600 leading-relaxed pt-8 xl:block hidden w-4/5">
                        All Standard
                    </p>
                    <!-- <div class="mt-12 flex flex-wrap">
                        <div class="ltr:mr-6 rtl:ml-6 mt-4 sm:mt-0 md:mt-4 lg:mt-0">
                            <a href="#pricing" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-primary bg-primary transition duration-150 ease-in-out hover:opacity-90 rounded text-white px-6 py-4 text-lg">
                                View Pricing
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!--Features-->
    <section class="border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-28 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-secondary font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl" style="color: #32064a;">
                    Better Learning. Better Results.
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    One platform for all your Exam needs
                </p>
            </div>
            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <img class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white" style="background-color: #32064a;" src="https://via.placeholder.com/48x48" alt="Top Quality Questions" role="img" />
                            <p class="ltr:ml-16 rtl:mr-16 text-lg leading-6 font-medium text-gray-900">Easy and Simple process</p>
                        </dt>
                        <dd class="mt-2 ltr:ml-16 rtl:mr-16 text-base text-gray-500">
                            All questions and solutions, can be designed by following simple steps, create, customize, save and done.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <img class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white" style="background-color: #32064a;" src="https://via.placeholder.com/48x48" alt="Detailed Analysis" role="img" />
                            <p class="ltr:ml-16 rtl:mr-16 text-lg leading-6 font-medium text-gray-900">Detailed Analysis
                            </p>
                        </dt>
                        <dd class="mt-2 ltr:ml-16 rtl:mr-16 text-base text-gray-500">
                            Know your students' weaknesses, strengths and everything else that you need to know to improve their score and rank.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <img class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white" style="background-color: #32064a;" src="https://via.placeholder.com/48x48" alt="Live Quizzes" role="img" />
                            <p class="ltr:ml-16 rtl:mr-16 text-lg leading-6 font-medium text-gray-900">Live Quizzes</p>
                        </dt>
                        <dd class="mt-2 ltr:ml-16 rtl:mr-16 text-base text-gray-500">
                            Create your Live Quiz. Rank and give the thrill of a real-exam. Groom Students' pressure handling and time management skills.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <img class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white" style="background-color: #32064a;" src="https://via.placeholder.com/48x48" alt="Learning Videos" role="img" />
                            <p class="ltr:ml-16 rtl:mr-16 text-lg leading-6 font-medium text-gray-900">Learning Scope
                            </p>
                        </dt>
                        <dd class="mt-2 ltr:ml-16 rtl:mr-16 text-base text-gray-500">
                            Become lifelong learners with best teachers, engaging video lessons and personalised learning journeys
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!--Pricing-->
    <section id="pricing" class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-28 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-secondary font-semibold tracking-wide uppercase">join us</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl" style="color: #32064a;">
                    From 10th Standard to 12th Standard, colleges, univercity, also private institutions.
                </p>
                <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-auto">
                    You create exams, We conduct them.
                </p>
            </div>
            <div class="mt-16 flex flex-wrap items-center justify-center gap-6">
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section class="border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-28 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-secondary font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl" style="color: #32064a;">
                    students and Teachers love us
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Hear it directly from our students
                </p>
            </div>
            <div class="w-full lg:flex items-center gap-6 mt-10">
                <div class="lg:w-1/2 mt-10 lg:mt-0">
                    <div class="bg-white border rounded-md border-gray-200 relative sm:p-10 p-6">
                        <div class="" style="color: #32064a;">
                            <svg class="rtl:flip" width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M24.5767 14.331H18.6157C18.7176 9.55831 19.9498 9.01654 21.4974 8.86191L22.0942 8.78063V3.53254L21.4063 3.57304C19.3854 3.69795 17.1512 4.09818 15.6605 6.11977C14.3539 7.89195 13.7778 10.7872 13.7778 15.2317V23.4674H24.5767V14.331Z" fill="currentColor" />
                                    <path d="M10.7988 23.4674V14.331H4.91744C5.01934 9.55831 6.21168 9.01654 7.75927 8.86191L8.31634 8.78063V3.53254L7.66816 3.57304C5.64729 3.69795 3.39306 4.09818 1.90245 6.11977C0.595916 7.89195 -5.72205e-06 10.7872 -5.72205e-06 15.2317V23.4674H10.7988Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24.5767" height="27" fill="white" transform="translate(24.5767 27) rotate(-180)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="text-base leading-6 text-gray-600 mt-4">Mock tests on Master Tester helped me develop my exam strategy. I was able to focus on my shortcomings and improve them!</p>
                        <div class="absolute bottom-0 -mb-4 ml-10">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" width="20" height="21" fill="white" />
                                <path d="M21.5 6L11.5 21L1 6" stroke="#E5E7EB" stroke-linecap="square" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center mt-7">
                        <div class="w-12 h-12 border rounded-full flex items-center justify-center" style="border: #32064a;">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Meyer" class="w-10 h-10 rounded-full" alt="Sarah Meyer" />
                        </div>
                        <div class="flex flex-col items-start ltr:ml-4 rtl:mr-4">
                            <p class="text-base font-semibold leading-4 text-gray-800">Sarah Meyer</p>
                            <p class="text-base leading-4 mt-2 text-center text-gray-600">10th Standard</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-10 lg:mt-0">
                    <div class="bg-white border rounded-md border-gray-200 relative sm:p-10 p-6">
                        <div class=" " style="color: #32064a;">
                            <svg class="rtl:flip" width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M24.5767 14.331H18.6157C18.7176 9.55831 19.9498 9.01654 21.4974 8.86191L22.0942 8.78063V3.53254L21.4063 3.57304C19.3854 3.69795 17.1512 4.09818 15.6605 6.11977C14.3539 7.89195 13.7778 10.7872 13.7778 15.2317V23.4674H24.5767V14.331Z" fill="currentColor" />
                                    <path d="M10.7988 23.4674V14.331H4.91744C5.01934 9.55831 6.21168 9.01654 7.75927 8.86191L8.31634 8.78063V3.53254L7.66816 3.57304C5.64729 3.69795 3.39306 4.09818 1.90245 6.11977C0.595916 7.89195 -5.72205e-06 10.7872 -5.72205e-06 15.2317V23.4674H10.7988Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24.5767" height="27" fill="white" transform="translate(24.5767 27) rotate(-180)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="text-base leading-6 text-gray-600 mt-4">Master Tester helped me get the exam from the comfort of my home thank you Master Tester!</p>
                        <div class="absolute bottom-0 -mb-4 ml-10">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" width="20" height="21" fill="white" />
                                <path d="M21.5 6L11.5 21L1 6" stroke="#E5E7EB" stroke-linecap="square" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center mt-7">
                        <div class="w-12 h-12 border rounded-full flex items-center justify-center" style="border: #32064a;">
                            <img src="https://ui-avatars.com/api/?name=Vijay+Shah" class="w-10 h-10 rounded-full" alt="Vijay Shah" />
                        </div>
                        <div class="flex flex-col items-start ltr:ml-4 rtl:mr-4">
                            <p class="text-base font-semibold leading-4 text-gray-800">Vijay Shah</p>
                            <p class="text-base leading-4 mt-2 text-center text-gray-600">Class 12 Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CTA-->
    <div class="dot-pattern-bg">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block" style="color: #32064a;">Unlock all Online Test Series</span>
                <span class="block mt-2" style="color: #32064a;">For Free!</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white hover:opacity-90" style="background-color: #32064a;">
                        join Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer class=" " style="background-color: #32064a;">
        <div tabindex="0" aria-label="footer" class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 focus:outline-none mx-auto container flex flex-col items-start sm:items-center justify-center">
            <img class="h-10" src="./images/black.png" alt="Master Tester">
            <div class="text-black flex flex-col md:items-center f-f-l pt-3">
                <h1 tabindex="0" class="focus:outline-none text-lg text-secondary">Everything You Need For Your Exam Preparation.
                </h1>
                <div class="flex items-center space-x-6 rtl:space-x-reverse mt-5 md:mt-10 text-base text-color f-f-l">
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">Youtube</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Facebook</title>
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="text-white hover:opacity-90">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>
                </div>

                <div class="my-6 text-base text-color f-f-l">
                    <ul class="md:flex md:gap-6 items-center">
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">About</a>
                        </li>
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">Features</a>
                        </li>
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">Pricing</a>
                        </li>
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">Help</a>
                        </li>
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">Disclaimer</a>
                        </li>
                        <li class="cursor-pointer pt-4 lg:py-0">
                            <a href="#" class="focus:outline-none focus:underline hover:underline text-base text-white opacity-80">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full mt-12 border-t border-white border-opacity-50 pt-8">
                <p class="text-base text-white opacity-80 xl:text-center">
                    <span>©2024 QwikTest. </span>
                    <span>All rights reserved.</span>
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from qwiktest-demo.nearchip.com/explore/10th-standard by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 03:14:35 GMT -->

</html>