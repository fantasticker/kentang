<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b-2 border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
        </a>
        </h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }} | {{ $post->created_at->diffForHumans() }}</a>
        </div>
        <p class="mt-4 font-light">
            {{ Str::limit($post['body'], 150) }}
            {{-- Baris 14 menggunakan method Str::limit untuk membatasi jumlah karakter dari string yang akan ditampilkan ke layar --}}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Selengkapnya &raquo;</a>
    </article>
    @endforeach

</x-Layout>