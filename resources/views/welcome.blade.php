<!DOCTYPE html>
<html lang="en">

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Welcome') }}
            </h2>
        </x-slot>
        <section class="mt-20">
            @auth
                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <img class="object-cover w-full h-56"
                        src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="avatar">
    
                    <div class="py-5 text-center">
                        <h1>{{Auth::user()->name}} {{Auth::user()->firstname}}</h1>
                        <p class="text-sm text-gray-700 dark:text-gray-200">Age: {{Auth::user()->age}}</p>
                        <p class="text-sm text-gray-700 dark:text-gray-200">Adress: {{Auth::user()->adress}}</p>
                        <p class="text-sm text-gray-700 dark:text-gray-200">Mail: {{Auth::user()->email }}</p>
                        <p class="text-sm text-gray-700 dark:text-gray-200">Role: {{Auth::user()->roles->rank}}</p>
                    </div>
                </div>
            @endauth
        </section>
    </x-app-layout>

</body>

</html>
