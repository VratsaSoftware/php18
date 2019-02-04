<?php
if (isset($_POST['submit'])) {
	$date = $_POST['date'];
	if (!empty($date)) {
		if (($date > 0) && ($date < 31)){
			if ($date % 2 == 0) {
			echo '	<ul>
				<li>Яке</li>
				<li>Ботуши</li>
				<li>Топла шапка</li>
				<li>Шал</li>
			</ul>';
			} else{
				echo '<ul>
				<li>Тениска</li>
				<li>Къси панталони</li>
				<li>Шапка с козирка</li>
				<li>Слънцезащитен крем</li>
			</ul>';
			};
		}else{
			echo 'Invalid date';
		};
	}
}