<?php 
if($listacategorias->num_rows>0){
	while($row=$listacategorias->fetch_assoc()){
print '<li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
		<a href="collection/'.$row["nombre"].'" class="site-nav__link">
			<div class="element-main">
				<div class="collection-icon">
					<img src="assets/images/book.png" alt="collection icon">
				</div>
				<div class="collection-area have-icons">
					<div class="collection-name">
						'.$row["nombre"].'
					</div>
				</div>
			</div>
			
		</a>
		
	</li>';
}}?>