@php
    $records = [60, 70, 80];
@endphp
@if (count($records) == 1)
    <div>I have one record! </div>
@elseif (count($records) > 1)
    <div>I have multiple records!</div>
@else
    <div>I don't have any records!</div>
@endif


<?php
$records = [60, 70, 80];
?>
<?php if (count($records) == 1) { ?>
<div>I have one record! </div>
<?php }elseif (count($records) > 1) { ?>
<div>I have multiple records!</div>
<?php }else{ ?>
<div>I don't have any records!</div>
<?php } ?>

@php
    $record1 = 'Chavalit';
    $record2 = '';
    $record3 = null;
@endphp

@isset($record1)
    $record1 is defined and is not null... <br>
@endisset

@empty($record2)
    $record2 is "empty" with empty string <br>
@endempty

@empty($record3)
    $record3 is "empty" with null <br>
@endempty

@switch($i)
    @case(1)
        //do First case...
    @break

    @case(2)
        //do Second case...
    @break

    @case('helloworld')
        //do String case...
    @break

    @default
        //Default case...
@endswitch

@switch($order_status)
    @case(1)
        <span class="badge badge-pill badge-primary" title="รอเบิกสินค้า">Y</span>
    @break

    @case(2)
        <span class="badge badge-pill badge-warning" title="รอเปิด Invoice">W</span>
    @break

    @case(3)
        <span class="badge badge-pill badge-success" title="Invoice แล้ว">IV</span>
    @break
@endswitch

@php
    // Caculation + Print
	$a = 5 + 6;
	echo $a;
@endphp


<?php
   	// Caculation + Print
	$a = 5 + 6;
	echo $a;
?>

