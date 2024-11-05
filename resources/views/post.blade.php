<x-layout>
    <x-slot:title>
        <div class="px-8">
            {{ $title }}
        </div>
    </x-slot>
    {{-- <article class="px-12 py-8 max-w-screen-lg border-b border-gray-300">
        <h2 class="mb-1 text-7xl py-2 tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500 font-semibold">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">By {{ $post->author->name }}</a> | <a
                href="/categories/{{ $post->category->slug }}" class="hover:underline">in <i class="text-gray-1000">
                    {{ $post->category->category_name }}</i>
                |
                {{ $post['created_at']->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to Posts &laquo;</a>
    </article> --}}
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-sm text-blue-600 hover:underline">&laquo; Back to all
                        posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->name }}">
                            <div>
                                <div class="px-2">

                                    <a href="/posts?author={{ $post->author->username }}" rel="author"
                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->author->email }}</p>
                                </div>
                                <div class="flex justify-between w-96 my-2">

                                    <a href="/posts?category={{ $post->category->slug }}">
                                        <span
                                            class="bg-{{ $post->category->color }}-200 text-primary-800 text-xs font-medium inline-flex items-center px-1.5 py-1 rounded dark:bg-primary-200 dark:text-primary-800">
                                            {{ $post->category->category_name }}
                                        </span>
                                    </a>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                            datetime="2022-02-08"
                                            title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>{{ $post->body }}</p>
</x-layout>
