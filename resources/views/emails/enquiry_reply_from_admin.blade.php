Hi {{ $name }},
<?php if(!empty($mobile)){ ?>
<br>
{!! $mobile !!}

<?php } ?>
<?php if(!empty($email)){ ?>
<br>
{!! $email !!}

<?php } ?>
<br>
<?php if(!empty($messages)){ ?>
<p>{!! $messages !!}</p>

<?php } ?>