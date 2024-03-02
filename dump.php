<!--TopBar-->
<section class="bg-primary" x-data="{ barOpen: true }">
    <div x-bind:class="!barOpen ? 'hidden' : ''" class="max-w-7xl mx-auto py-1 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-md">
                        <svg class="h-6 w-6 text-secondary rtl:flip" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </span>
                <p class="ltr:ml-3 rtl:mr-3 font-medium text-white truncate text-sm">
                    <span class="md:hidden">
                            site is under construction.
                        </span>
                    <span class="hidden md:inline">
                            site is under construction.
                        </span>
                </p>
            </div>
            <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                <a href="#" target="_blank" class="flex items-center justify-center px-3 py-1 border border-transparent rounded-sm shadow-sm text-sm font-medium text-white bg-secondary hover:opacity-90">
                        ok!
                    </a>
            </div>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ltr:ml-3 sm:rtl:mr-3">
                <button type="button" x-on:click="barOpen = !barOpen" class="ltr:-mr-1 rtl:-ml-1 flex p-2 rounded-sm hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white sm:ltr:-mr-2 sm:rtl:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
            </div>
        </div>
    </div>
</section>
<!--NavBar-->
<div class="bg-white dark:bg-gray-900 overflow-auto">
    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
        <!-- Mobile menu -->
        <div x-show="open" class="fixed inset-0 flex z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25" @click="open = false" aria-hidden="true"></div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 pt-5 pb-2 flex">
                    <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                </div>

                <!-- Links -->
                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="https://qwiktest-demo.nearchip.com/#explore" class="-m-2 p-2 block font-medium text-gray-900">Explore</a>
                    </div>
                    <div class="flow-root">
                        <a href="https://qwiktest-demo.nearchip.com/learn-practice" class="-m-2 p-2 block font-medium text-gray-900">Learn &amp; Practice</a>
                    </div>
                    <div class="flow-root">
                        <a href="https://qwiktest-demo.nearchip.com/quizzes" class="-m-2 p-2 block font-medium text-gray-900">Quizzes</a>
                    </div>
                    <div class="flow-root">
                        <a href="https://qwiktest-demo.nearchip.com/pricing#explore" class="-m-2 p-2 block font-medium text-gray-900">Pricing</a>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="https://qwiktest-demo.nearchip.com/login" class="-m-2 p-2 block font-medium text-gray-900">Login</a>
                    </div>
                </div>
            </div>

        </div>

        <header class="relative bg-white dark:bg-gray-900 dark:border-gray-800 border-b border-gray-100 shadow-lg">
            <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="">
                    <div class="h-16 sm:h-20 flex items-center">
                        <button type="button" x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state." class="bg-white p-2 rounded-md text-gray-400 lg:hidden" @click="open = true">
                                <span class="sr-only">Open menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>

                        <!-- Logo -->
                        <div class="ltr:mr-4 rtl:ml-4 flex ltr:lg:ml-0 rtl:lg:ml-0">
                            <a href="https://qwiktest-demo.nearchip.com/">
                                <span class="sr-only">Master Tester</span>
                                <img class="h-8 w-auto" src="./images/black.png" alt="Master Tester">
                            </a>
                        </div>

                        <!-- Menus -->
                        <div class="hidden lg:ltr:ml-8 lg:rtl:mr-8 lg:block lg:self-stretch">
                            <div class="h-full flex rtl:space-x-reverse space-x-8">
                                <a href="explore.html" class="flex items-center font-medium text-gray-700 hover:text-gray-800">Explore</a>
                                <!-- <a href="https://qwiktest-demo.nearchip.com/learn-practice" class="flex items-center font-medium text-gray-700 hover:text-gray-800">Learn -->
                                <!-- &amp; Practice</a> -->
                                <a href="quizzes.html" class="flex items-center font-medium text-gray-700 hover:text-gray-800">Quizzes</a>
                                <!-- <a href="https://qwiktest-demo.nearchip.com/pricing" class="flex items-center font-medium text-gray-700 hover:text-gray-800">Pricing</a> -->
                            </div>
                        </div>

                        <div class="ltr:ml-auto rtl:mr-auto flex items-center">
                            <!-- Auth -->
                            <div class="hidden ltr:lg:ml-8 rtl:lg:mr-8 lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href=# class="flex items-center justify-center px-8 py-2 border border-transparent rounded-sm shadow-sm text-sm font-medium text-white bg-primary hover:opacity-90">
                                        Login
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    </div




    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    // if (isset($_POST['username'])) {
    //     $username = stripslashes($_REQUEST['username']);    // removes backslashes
    //     $username = mysqli_real_escape_string($con, $username);
    //     $password = stripslashes($_REQUEST['password']);
    //     $password = mysqli_real_escape_string($con, $password);
    //     // Check user is exist in the database
    //     $query    = "SELECT * FROM `users` WHERE username='$username'
    //                  AND password='" . md5($password) . "'";
    //     $result = mysqli_query($con, $query) or die(mysql_error());
    //     $rows = mysqli_num_rows($result);
    //     if ($rows == 1) {
    //         $_SESSION['username'] = $username;
    //         // Redirect to user dashboard page
    //         header("Location: dashboard.php");
    //     } else {
    //         echo "<div class='form'>
    //               <h3>Incorrect Username/password.</h3><br/>
    //               <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
    //               </div>";
    //     }
    // }
    