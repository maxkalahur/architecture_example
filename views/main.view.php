
	<?php foreach( $data['categories'] as $category ) { ?>
		<a href="/catalog/<?=$category['id']?>"><?=$category['title'] ?></a><br/>
	<?php } ?>	