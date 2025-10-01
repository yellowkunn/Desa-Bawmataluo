<nav class="bg-white w-full z-20 top-0 start-0 border-b border-gray-200">
  <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between p-4">
    
    <!-- Logo -->
    {{-- <a href="{{ route('dashboard') }}" class="flex items-center pr-7 mt-2">
      <img src="{{ URL('images/logo.png') }}" class="h-5" alt="Pesona Bukit Lawang">
    </a> --}}

    <!-- Button Hamburger -->
    <div class="flex md:order-2">
      <button data-collapse-toggle="navbar-sticky" type="button" 
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 
               rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 
               focus:ring-gray-200" 
        aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
          fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
            stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>

    <!-- Menu -->
    <div id="navbar-sticky" 
         class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
      <ul class="flex flex-col items-center p-4 mt-4 text-base font-medium 
                 border border-gray-100 rounded-lg bg-gray-50 
                 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
        <li><a href="{{ route('dashboard') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Home</a></li>
        <li><a href="{{ route('tentang.kami') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Tentang Kami</a></li>
        <li><a href="{{ route('destinasi.wisata') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Destinasi Wisata</a></li>
        <li><a href="{{ route('produk.desa') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Produk Desa</a></li>
        <li><a href="{{ route('paket.wisata') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Paket Wisata</a></li>
        <li><a href="{{ route('peta') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Peta</a></li>
        <li><a href="{{ route('kontak') }}" class="block py-2 px-2 text-black hover:text-[#485A10]">Kontak</a></li>
      </ul>
    </div>

  </div>
</nav>
