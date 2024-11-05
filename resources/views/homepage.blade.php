@extends('layouts.app')
@section('title', 'Home Page')

@section('content')

  <!-- Banner Section -->
  <section class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
        <img src="{{ asset('img/bannerLaundry.jpg') }}" alt="bannerLaundry" class="w-full object-fill opacity-60">
        <div class="absolute top-0 left-0 p-6">
          <h2 class="text-2xl font-semibold">Laundry</h2>
          <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Shop Now →</a>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-6">
        <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
          <img src="{{ asset('img/Housekeeping.avif') }}" alt="HouseKeeping" class="w-full h-32 object-cover opacity-60">
          <div class="absolute top-0 left-0 p-6">
            <h2 class="text-lg font-semibold">House Keeping</h2>
            <p class="mt-2">Lorem ipsum dolor sit amet.</p>
            <a href="#" class="mt-1 inline-block bg-blue-500 text-white px-4 py-1 rounded">Shop Now →</a>
          </div>
        </div>
        <div class="bg-gray-800 text-white rounded-lg overflow-hidden relative">
          <img src="{{ asset('img/PhotographyBanner.avif') }}" alt="Photography" class="w-full h-32 object-cover opacity-50">
          <div class="absolute top-0 left-0 p-6">
            <h2 class="text-lg font-semibold">Photography</h2>
            <p class="mt-2">Lorem ipsum dolor sit amet.</p>
            <a href="#" class="mt-1 inline-block bg-blue-500 text-white px-4 py-1 rounded">Shop Now →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Services</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

      @forelse ($data as $item)
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('img/Housekeeping.jpg') }}" alt="{{ $item->alt }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-gray-800">{{ $item->nama_layanan }}</h3>
          <p class="text-gray-600">{{ $item->user->name }}</p>
        </div>
      </div>
      @empty
      <h3 class="font-semibold text-gray-800">Tidak Ada Service</h3>
      @endforelse
      
    </div>
  </section>

@endsection
