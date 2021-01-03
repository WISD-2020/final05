<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>門診表</title>
</head>
<body>


<form action="">
    <table>
        @for($i=1; $i<=4; $i++)
            <tr>
                @for($j=1; $j<=8; $j++)
                    <td></td>

                @endfor
            </tr>
        @endfor



    </table>
</form>

</body>
</html>
