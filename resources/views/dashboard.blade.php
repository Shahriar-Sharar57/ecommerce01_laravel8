<x-app-layout>
    <x-slot name="header">
        <a href="{{url('')}}"><h1 style="text-align: center;">go to Home Page</h1></a>
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
            @if (Auth::user()->user_role!=2)
            <a style="text-align: center;" href="{{url('../admin/user')}}"><h1 style="font-size:40px; text-decoration:underline;">Go To Admin Panel</h1></a>
        </h2>@endif
    </x-slot>
    
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
