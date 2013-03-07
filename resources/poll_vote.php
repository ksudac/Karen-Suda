<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0)
  {
  $yes = $yes + 1;
  }
if ($vote == 1)
  {
  $no = $no + 1;
  }

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<h2>Sample Poll</h2>
<h4>Poll Results:</h4>
<table>
    <tr>
        <td>Mac:</td>
        <td>
            <img src="../images/poll.gif"
            width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
            height='20'/>
            <?php echo(100*round($yes/($no+$yes),2)); ?>%
        </td>
        <td>  </td>
        <td> Votes:</td>
        <td>
            <?php echo(round($yes)); ?>
        </td>
    </tr>
    <tr>
        <td>PC:</td>
        <td>
            <img src="../images/poll.gif"
            width='<?php echo(100*round($no/($no+$yes),2)); ?>'
            height='20' />
            <?php echo(100*round($no/($no+$yes),2)); ?>%
        </td>
        <td>  </td>
        <td> Votes:</td>
        <td>
            <?php echo(round($no)); ?>
        </td>
    </tr>
</table> 