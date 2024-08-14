<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    return redirect('/');
    
};

?>
<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-dark">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a class="navbar-brand" href="/">Posify</a>
                </div>
                
        @auth
                    @if (auth()->user()->role ==2)
                        <!-- Admin Navbar -->
                        <nav>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                                <a href="http://127.0.0.1:5000" class="btn btn-register">Progress Track</a>
                                <a href="/user-data" class="btn btn-register">Users DB</a>
                            </div>
                        </nav>
                    @elseif (auth()->user()->role==1)
                        <!-- Superadmin Navbar -->
                        <nav>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                                <a href="/products" class="btn btn-register">Add Data</a>
                                <a href="http://127.0.0.1:5000" class="btn btn-register">Progress Track</a>
                                <a href="/user-data" class="btn btn-register">Users DB</a>
                            </div>
                        </nav>
                    @else
                        <!-- Default User Navbar -->
                        <nav>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                                <a href="https://www.google.com/maps/d/u/0/edit?mid=1Q6_NnBEIKeSJFGtl9vVT81iDGOXQsLM&ll=53.13187317993646%2C22.40724434374998&z=6" class="btn btn-register">Map</a>
                                <a href="/explore" class="btn btn-register">Explore</a>
                                <a href="http://127.0.0.1:5000" class="btn btn-register">Progress Track</a>
                            </div>
                        </nav>
                    @endif
                <!-- Navigation Links -->
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <!-- Dropdown Trigger Button -->
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-600 dark:text-gray-200 bg-white dark:bg-gray-700 hover:text-gray-700 dark:hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                            <!-- Profile Name -->
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <!-- Dropdown Icon -->
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <!-- Dropdown Content -->
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Logout Button -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Icon -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-900 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <!-- Responsive Navigation Links -->
            @if (auth()->user()->role ==2)
                    <!-- Admin Navbar -->
                    <a href="/user-data" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('User DB') }}</a>
                    <a href="/http://127.0.0.1:5000" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Progress Track') }}</a>
                @elseif (auth()->user()->role==1)
                    <!-- Superadmin Navbar -->
                    <a href="/products" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Add Data') }}</a>
                    <a href="/user-data" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('User DB') }}</a>
                    <a href="/http://127.0.0.1:5000" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Progress Track') }}</a>
                @else
                    <!-- Default User Navbar -->
                    <a href="https://www.google.com/maps/d/u/0/edit?mid=1Q6_NnBEIKeSJFGtl9vVT81iDGOXQsLM&ll=53.13187317993646%2C22.40724434374998&z=6" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Map') }}</a>
                    <a href="/explore" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Explore') }}</a>
                    <a href="/http://127.0.0.1:5000" class="block px-3 py-2 text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900 transition duration-150 ease-in-out">{{ __('Progress Track') }}</a>
                @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Logout Button -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link> 
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
        @else
                        <nav>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                                <a href="/explore" class="btn btn-register">Explore</a>
                                <a href="https://www.google.com/maps/d/u/0/edit?mid=1Q6_NnBEIKeSJFGtl9vVT81iDGOXQsLM&ll=38.7177041210649%2C74.7077115186929&z=3" class="btn btn-register">Map</a>                             
                            </div>
                        </nav>
        @endauth
    </div>
</nav>



