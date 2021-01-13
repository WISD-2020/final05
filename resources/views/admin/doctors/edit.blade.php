<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('醫師狀態') }}
        </h2>
    </x-slot>

    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" role="form">
        @method('PATCH')
        @csrf

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
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            名字
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            狀態
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <input name="name" class="form-control" placeholder="請輸入姓名"
                                                               value="{{ old('name', $doctor->name) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                @if($doctor->status==1)
                                                    <input type="radio" name="status" value="1" checked>
                                                    在職&emsp;
                                                    <input type="radio" name="status" value="2">
                                                    停職
                                                @else
                                                    <input type="radio" name="status" value="1">
                                                    在職&emsp;
                                                    <input type="radio" name="status" value="2" checked>
                                                    停職
                                                @endif
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex items-center justify-end mt-4 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button onclick="history.back()" class="text-indigo-600 hover:text-indigo-900 ">返回</button>
                                                &emsp; | &emsp;
                                                <button type="submit" class="text-indigo-600 hover:text-indigo-900 ">更新</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- More rows... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
