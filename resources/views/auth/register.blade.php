@extends('layout', ['title' => 'Registreren'])

@section('section')
<div class="flex flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Inloggen</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium leading-6 text-gray-900"/>
            <div class="mt-2">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-700 sm:text-sm sm:leading-6"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium leading-6 text-gray-900"/>
            </div>
            <div class="mt-2">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-700 sm:text-sm sm:leading-6"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <!-- Confirm Password -->
        <div>
            <div class="flex items-center justify-between">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium leading-6 text-gray-900"/>
        </div>
        <div class="mt-2">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <p class="mt-10 text-center text-sm text-gray-500">
                Heeft u al een account?
                <a href="{{route('login')}}" class="font-semibold leading-6 text-cyan-700 hover:text-cyan-700">Log in</a>
            </p>
            {{-- <a class=class="mt-10 text-center text-sm text-gray-500" href="{{ route('login') }}">
                {{ __('Heeft u al een account?') }}
            </a> --}}

            
            <x-primary-button class="flex w-full justify-center rounded-md bg-cyan-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-cyan-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-700">
                {{ __('Registreer') }}
            </x-primary-button>
            {{-- <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-cyan-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-cyan-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-700">Registreer</button>
            </div> --}}
        </div>
    </form>
</div>
@endsection