<?php
$this->title = 'Инфомрация о пользователях';
?>

<table class="user-table">
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Email</th>
		<th>Status</th>
		<th>Created at</th>
	</tr>
<?php foreach ($users as $user): ?>
	<tr>
		<td><?= $user->id ?></td>
		<td><?= $user->username ?></td>
		<td><?= $user->email ?></td>
		<td><?= $user->status ?></td>
		<td><?= date('d-m-Y', $user->created_at) ?></td>
	</tr>
<?php endforeach; ?>
</table>
