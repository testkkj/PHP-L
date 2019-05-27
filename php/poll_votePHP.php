
<?php
$vote = $_REQUEST['vote'];

// 파일의 내용을 읽어옴
$filename = "poll_result.txt";
$content = file($filename);

// 배열에 내용을 넣음
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
    $yes = $yes + 1;
}
if ($vote == 1) {
    $no = $no + 1;
}

// 값을 텍스트 파일에 입력
$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
    <tr>
        <td>Yes:</td>
        <td>
            <img src="poll.gif"
                 width='<?php echo(100 * round($yes / ($no + $yes), 2)); ?>'
                 height='20'>
            <?php echo(100 * round($yes / ($no + $yes), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>No:</td>
        <td>
            <img src="poll.gif"
                 width='<?php echo(100 * round($no / ($no + $yes), 2)); ?>'
                 height='20'>
            <?php echo(100 * round($no / ($no + $yes), 2)); ?>%
        </td>
    </tr>
</table> 