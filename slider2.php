<?php $result = $news->getTinNoiBat(4, 6, $lang); ?>
<ul class="blog medium">
	<?php while ($row = $result->fetch_assoc()) { ?>
		<li class="post">
			<a href="#" title="<?= $row['TieuDe'] ?>">
				<span class="icon gallery"></span>
				<img class="hinh_tinnoibat" src='<?= $row['urlHinh'] ?>' alt='img' onerror="this.src='/news/defaultImg.jpg'">
			</a>
			<h5 class="title_tinnoibat">
				<a href="#" title="<?= $row['TieuDe'] ?>"><?= $row['TieuDe'] ?></a>
			</h5>
			<ul class="post_details simple">
				<li class="category"><a href="#" title="<?= $row['TenLT'] ?>"><?= $row['TenLT'] ?></a></li>
				<li class="date">
					<?= date('d/m/Y', strtotime($row['Ngay'])) ?>
				</li>
			</ul>
		</li>
	<?php } ?>
</ul>