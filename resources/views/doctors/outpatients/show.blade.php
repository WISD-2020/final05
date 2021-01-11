<?php
use Carbon\Carbon;

$a = "上午";
$b = "下午";
$c = "晚上";
$count = 0;
$date = array();

for($i=0; $i<7; $i++){
    $date[$i] = Carbon::createFromDate(2021, 01, 04, 'Asia/Taipei')->addDay($i)->toDateString();
}

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('門診表') }}
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
                                        時段
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        上午
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        下午
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        晚上
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[0]}}(星期一)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @for($i=0; $i<21; $i++)

                                        @if($i<3)

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                            </td>
                                            @if($i==2)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[1]}}(星期二)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif


                                    @elseif($i>=3 and $i<6)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                        @if($i==5)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[2]}}(星期三)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif
                                    @elseif($i>=6 and $i<9)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                        @if($i==8)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[3]}}(星期四)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif
                                    @elseif($i>=9 and $i<12)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                        @if($i==11)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[4]}}(星期五)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif
                                    @elseif($i>=12 and $i<15)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                        @if($i==14)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[5]}}(星期六)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif
                                    @elseif($i>=15 and $i<18)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                        @if($i==17)

                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$date[6]}}(星期日)
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @endif
                                    @else

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $tests[$i]->name }}</div>

                                        </td>
                                    @endif
                                    @endfor
                                </tr>

                                <!-- More rows... -->
                                </tbody>
                            </table>

                            <div class="flex items-center justify-end mt-4 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route("doctors.outpatients.create") }}" class="text-indigo-600 hover:text-indigo-900 text-2xl">新增</a>
                                &emsp; | &emsp;
                                <a href="{{ route("doctors.outpatients.edit") }}" class="text-indigo-600 hover:text-indigo-900 text-2xl">編輯</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
