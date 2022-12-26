<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="px-4 py-5 bg-white border-b border-gray-200 sm:px-6">
        <div class="flex flex-wrap items-center justify-between -mt-2 -ml-4 sm:flex-nowrap">
            <div class="mt-2 ml-4">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Projects</h3>
            </div>
            <div class="flex-shrink-0 mt-2 ml-4">
                <a href="{{ route('project.create') }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
                    new project</a>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                    Created At</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                    Updated At</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center bg-white divide-y divide-gray-200">
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-left text-gray-900 whitespace-nowrap">{{ $project->name }}</td>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap"><span class="inline-flex items-center px-2 py-1 text-xs font-bold text-white uppercase bg-green-100 rounded-full whitespace-nowrap min-h-6 dark:bg-green-500">{{ $project->status }}</span></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $project->created_at->format('h:m:s d/m/Y') }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $project->updated_at->format('h:m:s d/m/Y') }}</td>
                                    <td class="flex justify-between px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <div class="">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
