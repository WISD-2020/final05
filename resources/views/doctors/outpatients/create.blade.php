{{$date=$last->date}}
<?php
use Carbon\Carbon;

$year = substr($date, 0, 4);
$month = substr($date, 5, 2);
$day = substr($date, 8, 2);

$min = Carbon::createFromDate($year, $month, $day + 1, 'Asia/Taipei')->toDateString();
$max = Carbon::createFromDate($year, $month, $day, 'Asia/Taipei')->addDays(7)->toDateString();
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新增門診表') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('doctors.outpatients.store') }}">
            @method('POST')
            @csrf

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
                                                        日期
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                <input type="date" id="date" name="date" class="block mt-1 w-full"
                                                       rows="10" min="{{ $min }}" max="{{ $max }}">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900" hidden="ture">
                                                <input type="text" id="morning" name="morning" class="block mt-1 w-full"
                                                       value="上午" hidden>

                                                <input type="text" id="afternoon" name="afternoon"
                                                       class="block mt-1 w-full" value="下午" hidden>

                                                <input type="text" id="night" name="night" class="block mt-1 w-full"
                                                       value="晚上" hidden>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- More rows... -->
                                    </tbody>
                                </table>

                                <div class="flex items-center justify-end mt-4 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('doctors.outpatients.index') }}"><input type="button" value="返回" class="text-indigo-600 hover:text-indigo-900 text-2xl"></a>
                                    &emsp; | &emsp;
                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 text-2xl">送出</button>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
