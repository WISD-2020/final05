<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>門診表</title>
</head>
<body>



<?php
$a = "上午";
$b = "下午";
$c = "晚上";
$count = 0;
?>




<form action="" align="center">
    <p>門診表</p>

    <table border="1" align="center" height="500" width="800">
        <tr>
            <td>時段</td>
            <td>星期一</td>
            <td>星期二</td>
            <td>星期三</td>
            <td>星期四</td>
            <td>星期五</td>
            <td>星期六</td>
            <td>星期日</td>
        </tr>
        <tr>
            <td>上午</td>
            @for($i=0; $i<21; $i++)
                @if($i<7)

                    <td>{{ $tests[$i]->name }}</td>

                    @if($i==6)
                        </tr><tr>
                            <td>下午</td>
                    @endif


            @elseif($i>=7 and $i<14)

                <td>{{ $tests[$i]->name }}</td>
                    @if($i==13)
                        </tr><tr>
                            <td>晚上</td>
                    @endif
            @else

                <td>{{ $tests[$i]->name }}</td>
            @endif

            @endfor</tr></table>

</form>





{{--<table class="table table-striped task-table">--}}
{{--    <thead>--}}
{{--    <th>任務</th>--}}
{{--    <th>&nbsp;</th>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach ($a as $b)--}}
{{--        <tr>--}}
{{--            <td class="table-text"><div>{{ $b->date }}</div></td>--}}

{{--            <!-- 任務刪除按鈕 -->--}}
{{--            <td class="table-text"><div>{{ $b->period }}</div></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}

{{--@foreach ($aa as $aaa)--}}
{{--    {{ $aaa->name }}--}}
{{--@endforeach--}}

{{--@foreach ($bb as $bbb)--}}
{{--    {{ $bbb->date }}--}}
{{--@endforeach--}}



</body>
</html>
