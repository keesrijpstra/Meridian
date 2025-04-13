<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">{{ __('Sign in') }}</h2>
      <p class="mt-2 text-center text-sm text-gray-400">{{ __('Enter your details below to sign in') }}</p>
    </div>
    
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      @if ($errors->any())
        <div class="mb-4">
          <div class="text-sm text-red-400">
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        </div>
      @endif
  
      <form class="space-y-6" wire:submit="login">
        <!-- Email Address -->
        <div>
          <label for="email" class="block text-sm/6 font-medium text-white">{{ __('Email address') }}</label>
          <div class="mt-2">
            <input 
              wire:model="email"
              type="email" 
              id="email" 
              autocomplete="email" 
              required
              placeholder="email@example.com"
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
            >
          </div>
        </div>
        
        <!-- Password -->
        <div>
          <label for="password" class="block text-sm/6 font-medium text-white">{{ __('Password') }}</label>
          <div class="mt-2">
            <input q
              wire:model="password"
              type="password" 
              id="password" 
              autocomplete="new-password" 
              required
              placeholder="{{ __('Password') }}"
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
            >
          </div>
        </div>
        <div>
          <button 
            type="submit" 
            class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
          >
            {{ __('Sign in') }}
          </button>
        </div>
      </form>
      
      <p class="mt-10 text-center text-sm/6 text-gray-400">
        {{ __(`Don't have an account?`) }}
        Not a member?
        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
      </p>
    </div>
  </div>