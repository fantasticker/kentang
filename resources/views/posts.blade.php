<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b-2 border-gray-300">
        <a href="/posts/{{ $post['id'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
        </a>
        </h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }} | 1 Januari 2024</a>
        </div>
        <p class="mt-4 font-light">
            {{ Str::limit($post['body'], 25)}}
        </p>
        <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Selengkapnya &raquo;</a>
    </article>
    @endforeach

</x-Layout>