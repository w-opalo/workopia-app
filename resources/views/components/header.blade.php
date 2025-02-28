<!-- Header -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">

            <x-nav-link url='/' :active="request()->is('/')">Home</x-nav-link>
           
            <x-nav-link url='/jobs' :active="request()->is('jobs')">All Jobs</x-nav-link>

            @auth
            <x-nav-link url='/jobs/saved' :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link>

            <x-nav-link url='/dashboard' :active="request()->is('dashboard')" icon='gauge'>Dashboard</x-nav-link>

            <x-button-link url="/jobs/create" icon='edit'> Create Job </x-button-link>

            <x-logout-button />

            @else

            <x-nav-link url='/login' :active="request()->is('login')">Login</x-nav-link>

            <x-nav-link url='/register' :active="request()->is('register')">Register</x-nav-link>

            @endauth
        </nav>

        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>

    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">

        <x-nav-link url='/jobs' :active="request()->is('jobs')" :mobile='true'>All Jobs</x-nav-link>

        @auth 

        <x-nav-link url='/jobs/save' :active="request()->is('jobs/save')" :mobile='true'>Saved Jobs</x-nav-link>

        <x-nav-link url='/dashboard' :active="request()->is('dashboard')" :mobile='true'>Dasboard</x-nav-link>

        <x-button-link url="/jobs/create" icon='edit' :block='true'> Create Job </x-button-link>

        <x-logout-button />

        @else    

        <x-nav-link url='/login' :active="request()->is('login')" :mobile='true'>Login</x-nav-link>

        <x-nav-link url='/register' :active="request()->is('register')" :mobile='true'>Register</x-nav-link>
        
        @endauth
    </nav>
</header>