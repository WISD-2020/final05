<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('公告') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            張貼醫師
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            標題
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            內容
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            功能
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($announcements as $announcement)
                    <tr>
                        @foreach($users as $user)
                            @if($announcement->user_id == $user->id)
                                <td>{{ $user->name }}</td>

                            @endif

                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $announcement->title }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $announcement->content }}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if ($announcement->user_id == $auth_id)
                                <a href="{{ route('doctors.announcements.edit', $announcement->id) }}"><button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" type="submit">編輯</button></a>
                                /
                                <form action="{{ route('doctors.announcements.destroy', $announcement->id) }}" method="POST" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" type="submit">刪除</button>
                                </form>
                            @else
                                <a href="{{ route('doctors.announcements.edit', $announcement->id) }}"><button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800" type="submit" disabled>編輯</button></a>
                                /
                                <form action="{{ route('doctors.announcements.destroy', $announcement->id) }}" method="POST" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800" type="submit" disabled>刪除</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    <!-- More rows... -->
                    </tbody>
                </table>
                <div class="flex items-center justify-end mt-4 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route("doctors.announcements.create") }}" class="text-indigo-600 hover:text-indigo-900 text-2xl">新增</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout>
