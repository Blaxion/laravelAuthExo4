<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section>
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                    required autofocus />
                            </div>

                            <!-- Firstname -->
                            <div class="mt-4">
                                <x-label for="firstname" :value="__('Firstname')" />
                                <x-input id="firstanme" class="block mt-1 w-full" type="text" name="firstname"
                                    :value="old('firstname')" required autofocus />
                            </div>

                            <!-- Age -->
                            <div class="mt-4">
                                <x-label for="age" :value="__('Age')" />
                                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')"
                                    required autofocus />
                            </div>
                            <!-- Adress -->
                            <div class="mt-4">
                                <x-label for="adress" :value="__('Adress')" />
                                <x-input id="adress" class="block mt-1 w-full" type="text" name="adress"
                                    :value="old('adress')" required autofocus />
                            </div>


                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required />
                            </div>

                            <!-- Role -->
                            <div class="flex items-center justify-end mt-4">
                                <select name="role_id">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->rank}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center justify-end mt-4" >
                                <x-button class="ml-4">
                                    {{ __('Save') }}
                                </x-button>
                            </div>

                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
