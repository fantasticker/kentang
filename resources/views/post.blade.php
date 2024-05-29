<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
        </h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post->author->name }} | {{ $post->created_at->format('j F Y') }}</a>
        </div>
        <p class="mt-4 font-light">
            {{ $post['body'] }}
            {{-- Baris 14 menggunakan method Str::limit untuk membatasi jumlah karakter dari string yang akan ditampilkan ke layar --}}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Kembali</a>
    </article>

</x-Layout>