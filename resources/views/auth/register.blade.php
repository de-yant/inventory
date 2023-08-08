<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Invetory</title>

      <!-- Favicon -->
      <link rel="stylesheet" href="{{ url('/build/assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ url('/build/assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ url('/build/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ url('/build/assets/vendor/remixicon/fonts/remixicon.css') }}">

      <link rel="stylesheet" href="{{ url('/build/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
      <link rel="stylesheet" href="{{ url('/build/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
      <link rel="stylesheet" href="{{ url('/build/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">
    </head>
  <body class=" ">
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-6">
                  <div class="card auth-card bg-primary">
                     <div class="card-body py-0">
                        <div class="d-flex align-items-center auth-content">
                              <div class="p-3">
                                 <h2 class="mb-2 text-white">Daftar</h2>
                                 <p>Buat Akun Website Inventory</p>
                                 <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input id="name" class="floating-input form-control" type="text" placeholder=" " name="name" :value="old('name')" required autofocus autocomplete="name" />
                                             <label>Nama Lengkap</label>
                                             <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input id="email" class="floating-input form-control" type="email" placeholder=" "name="email" :value="old('email')" required autocomplete="username" />
                                             <label>Surel</label>
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input id="password" class="floating-input form-control" type="password" placeholder=" "name="password"
                                             required autocomplete="new-password" />
                                             <label>Kata Sandi</label>
                                             <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input id="password_confirmation" class="floating-input form-control" type="password" placeholder=" "name="password_confirmation" required autocomplete="new-password" />
                                             <label>Ulangi Kata Sandi</label>
                                             <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label text-white" for="customCheck1">Saya setuju dengan ketentuan penggunaan</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-white">Daftar</button>
                                    <p class="mt-3">
                                       Sudah memiliki Akun? <a href="login" class="text-white text-underline">Masuk</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

<!-- Backend Bundle JavaScript -->
<script src="{{ url('/build/assets/js/backend-bundle.min.js') }}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{ url('/build/assets/js/table-treeview.js') }}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{ url('/build/assets/js/customizer.js') }}"></script>

<!-- Chart Custom JavaScript -->
<script async src="{{ url('/build/assets/js/chart-custom.js') }}"></script>
<!-- Chart Custom JavaScript -->
<script async src="{{ url('/build/assets/js/slider.js') }}"></script>

<!-- app JavaScript -->
<script src="{{ url('/build/assets/js/app.js') }}"></script>

<script src="{{ url('/build/assets/vendor/moment.min.js') }}"></script>
</body>
</html>
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
