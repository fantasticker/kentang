{{-- <a {{ $attributes }} class="{{ request() -> is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request() -> is('/') ? 'page' : false }}">{{ $slot }}</a> --}}

{{-- $attributes digunakan untuk mengambil segala jenis nilai atribut yang dipanggil komponennya, pada kasus ini $attributes diambil dari navbar.blade.php baris 11 --}}
{{-- Untuk membuat is('/') di isi dengan page yang di inginkan (dinamis) kita perlu melakukan Passing Data to Components sebagai berikut--}}

@props(['active' => 'false'])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

{{-- variabel $active adalah atribut yang dibuat dimana component diambil (dalam kasus ini terdapat di navbar.blade.php baris 11-14) yang berisi method request() -> is('/') namun dengan isi yang berbeda-beda --}}