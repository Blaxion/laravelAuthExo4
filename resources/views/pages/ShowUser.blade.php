<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="mt-20">
                        
                            <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                <img class="object-cover w-full h-56"
                                    src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="avatar">
                
                                <div class="py-5 text-center">
                                    <h1>{{$user->name}} {{$user->firstname}}</h1>
                                    <p class="text-sm text-gray-700 dark:text-gray-200">Age: {{$user->age}}</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-200">Adress: {{$user->adress}}</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-200">Mail: {{$user->email }}</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-200">Role: {{$user->roles->rank}}</p>
                                </div>
                            </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
