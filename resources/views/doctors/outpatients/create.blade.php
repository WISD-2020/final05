{{--<?php--}}
{{--use Carbon\Carbon;--}}
{{--$min = Carbon::now('Asia/Taipei')->toDateString();--}}
{{--$max = Carbon::now('Asia/Taipei')->addDays(7)->toDateString();--}}
{{--?>--}}

{{--<form action="{{ route('doctors.outpatients.store') }}" method="POST" role="form">--}}
{{--    @method('POST')--}}
{{--    @csrf--}}

{{--    <input type="date" id="date" name="date" class="form-control" rows="10" min="{{ $min }}" max="{{ $max }}">--}}


{{--    <div class="form-group">--}}
{{--        <label for="content">時段：</label>--}}
{{--        <select name="period">--}}
{{--            <option value="上午">上午</option>--}}
{{--            <option value="下午">下午</option>--}}
{{--            <option value="晚上">晚上</option>--}}
{{--        </select>--}}
{{--    </div>--}}


{{--    <div class="text-right">--}}
{{--        <button type="submit" class="btn btn-success">新增</button>--}}
{{--    </div>--}}

{{--    <p>&nbsp;</p>--}}
{{--    <p>&nbsp;</p>--}}
{{--    <p>&nbsp;</p>--}}

{{--</form>--}}

{{$date=$last->date}}
<?php
use Carbon\Carbon;

$year=substr($date, 0, 4);
$month=substr($date, 5, 2);
$day=substr($date, 8, 2);

$min = Carbon::createFromDate($year, $month, $day+1, 'Asia/Taipei')->toDateString();
$max = Carbon::createFromDate($year, $month, $day, 'Asia/Taipei')->addDays(7)->toDateString();
?>
{{--{{$last->date}}--}}
<form method="POST" action="{{ route('doctors.outpatients.store') }}">
    @method('POST')
    @csrf

    <div class="mt-4">
        <x-jet-label for="date" value="{{ __('日期') }}" />
        <input type="date" id="date" name="date" class="block mt-1 w-full" rows="10" min="{{ $min }}" max="{{ $max }}">
    </div>

    <div>
{{--        <x-jet-label for="period" value="{{ __('時段') }}" />--}}
{{--        <x-jet-input id="period" class="block mt-1 w-full" type="text" name="period" required />--}}
{{--        <select name="period" id="period" class="block mt-1 w-full">--}}
{{--            <option value="上午">上午</option>--}}
{{--            <option value="下午">下午</option>--}}
{{--            <option value="晚上">晚上</option>--}}
{{--        </select>--}}

        <input type="text" id="morning" name="morning" class="block mt-1 w-full" value="上午" hidden>

        <input type="text" id="afternoon" name="afternoon" class="block mt-1 w-full" value="下午" hidden>

        <input type="text" id="night" name="night" class="block mt-1 w-full" value="晚上" hidden>

    </div>



    <div class="flex items-center justify-end mt-4">
        <x-jet-button class="ml-4">
            {{ __('新增') }}
        </x-jet-button>
    </div>
</form>
