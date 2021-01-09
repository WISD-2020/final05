<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>門診表</title>
</head>
<body>


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


<form action="" align="center">
    <p>門診表</p>

    <table border="1" align="center" height="500" width="800">
        <tr>

            <td>時段</td>
            <td>上午</td>
            <td>下午</td>
            <td>晚上</td>

        </tr>
        <tr>
            <td>{{$date[0]}}(星期一)</td>

            @for($i=0; $i<21; $i++)

                @if($i<3)

                    <td>
                        {{ $tests[$i]->name }}
                    </td>

                    @if($i==2)
        </tr><tr>
            <td>{{$date[1]}}(星期二)</td>
            @endif


            @elseif($i>=3 and $i<6)

                <td>
                    {{ $tests[$i]->name }}
                </td>

                @if($i==5)
        </tr><tr>
            <td>{{$date[2]}}(星期三)</td>
            @endif
            @elseif($i>=6 and $i<9)

                <td>
                    {{ $tests[$i]->name }}
                </td>

                @if($i==8)
        </tr><tr>
            <td>{{$date[3]}}(星期四)</td>
            @endif
            @elseif($i>=9 and $i<12)

                <td>
                    {{ $tests[$i]->name }}
                </td>

                @if($i==11)
        </tr><tr>
            <td>{{$date[4]}}(星期五)</td>
            @endif
            @elseif($i>=12 and $i<15)

                <td>
                    {{ $tests[$i]->name }}
                </td>

                @if($i==14)
        </tr><tr>
            <td>{{$date[5]}}(星期六)</td>
            @endif
            @elseif($i>=15 and $i<18)

                <td>
                    {{ $tests[$i]->name }}
                </td>

                @if($i==17)
        </tr><tr>
            <td>{{$date[6]}}(星期日)</td>
            @endif
            @else

                <td>
                    {{ $tests[$i]->name }}
                </td>
            @endif

            @endfor</tr></table>










</form>


</body>
</html>
