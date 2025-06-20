<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">Tab 1</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">Tab
                                2</a>
                        </li>
                    {{-- 
                        Iterates over the $categories collection and generates a list item (<li>) for each category.
                        Each list item contains a link (<a>) to the category's detail page using the 'categories.show' route and the category's ID.
                        The link displays the category's name and includes styling for hover effects in both light and dark modes.
                    --}}
                       
                       
                    </ul>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>