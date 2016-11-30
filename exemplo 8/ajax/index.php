<?php
	header('Access-Control-Allow-Origin: *');

	if (isset($_POST['total'])) {
		$imgs=array("", "imageview.jpg", "15175152763510-t1200x480.jpg", "156695.281157-Google-Allo.jpg", "capa.jpg");

		echo "<figure class='col-md-6'>
					<img src='imagens/".$imgs[$_POST['total']]."' class='img-responsive' />
				</figure>
				<div class='col-md-6'>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porttitor sagittis. Mauris tincidunt magna ut massa dictum, vitae congue sem tristique. Suspendisse leo enim, ultricies id tincidunt sit amet, sodales vehicula sapien. Aliquam condimentum maximus turpis, non pulvinar est dignissim ac. Pellentesque hendrerit metus imperdiet, bibendum urna lobortis, eleifend libero. Morbi vel elit et justo blandit viverra. Nulla sed arcu congue, sodales lectus quis, tincidunt libero. Duis imperdiet arcu augue, in dapibus sem vestibulum non. Pellentesque convallis elit bibendum mauris euismod interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in diam vitae diam consectetur suscipit id a lorem. Donec vulputate vitae sem ac hendrerit.
					</p>
				</div>";

		if ($_POST['total']==4) {
			echo "<script>$('#mostrar_mais').remove();</script>";
		}
	}