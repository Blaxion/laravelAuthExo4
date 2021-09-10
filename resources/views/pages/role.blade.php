<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section>
                        <form action="role" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-label for="rank" :value="__('Rank')" />
                                <x-input id="rank" class="block mt-1 w-full" type="text" name="rank" :value="old('rank')" required autofocus />
                            </div>
                            <x-button class="ml-4">
                                {{ __('Submit') }}
                            </x-button>
                        </form>
                        
                    </section>

                    <section class="mt-20">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->rank}}</td>
                                        <td>
                                            <form action="role/{{$role->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">DELETE</button>
                                            </form>   
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
