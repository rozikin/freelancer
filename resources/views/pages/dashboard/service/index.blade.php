@extends('layouts.app')

@section('title', 'My Service')



@section('content')


<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    My service
                </h2>
                <p class="text-sm text-gray-400">
                  service
                </p>
            </div>
            <div class="col-span-4 text-right">
                <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
                    <a href="" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button"> tambah data</a>
                  
                </div>
            </div>
        </div>
    </div>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                {{-- <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                  
                </div> --}}








                <div class="p-6 mt-8 bg-white rounded-xl">
                    <div>
                        <h2 class="mb-1 text-xl font-semibold">
                            Latest Orders
                        </h2>
                        <p class="text-sm text-gray-400">
                            3 Total Orders On Progress
                        </p>
                    </div>






                    <table class="w-full mt-4" aria-label="Table">
                        <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">Name</th>
                                <th class="py-4" scope="">Services Name</th>
                                <th class="py-4" scope="">Deadline</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-gray-700">
                                <td class="w-1/3 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ url('https://randomuser.me/api/portraits/men/2.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">Siri Leaf</p>
                                            <p class="text-sm text-yellow-400">On Progress</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-2/4 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded"
                                                src="{{ url('https://randomuser.me/api/portraits/men/3.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">
                                                Design WordPress E-Commerce Modules
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-1 py-5 text-xs text-red-500">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                        <path
                                            d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z"
                                            stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    1 May 2021
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="w-1/3 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ url('https://randomuser.me/api/portraits/men/4.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">Miles John</p>
                                            <p class="text-sm text-yellow-400">On Progress</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-2/4 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded"
                                                src="{{ url('https://randomuser.me/api/portraits/men/5.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">
                                                Fix Any Issue on Your WordPress Website
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-1 py-5 text-xs text-red-500">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                        <path
                                            d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z"
                                            stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    1 May 2021
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="w-1/3 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ url('https://randomuser.me/api/portraits/men/6.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">Alexa Sara</p>
                                            <p class="text-sm text-yellow-400">On Progress</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-2/4 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded"
                                                src="{{ url('https://randomuser.me/api/portraits/men/7.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">
                                                Design WordPress E-Commerce Modules
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-1 py-5 text-xs text-red-500">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                        <path
                                            d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z"
                                            stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    1 May 2021
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
          
        </div>
    </section>
</main>
    
@endsection
