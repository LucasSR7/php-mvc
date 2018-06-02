<?php //print_r($this->view->artigos); ?>


	<?php
		echo print_r($this->view->artigos)."<hr />";
		while ($row = $this->view->artigos->fetch(PDO::FETCH_OBJ)) {
		    echo "<p>".$row->titulo."</p>";
		    echo "<p>".$row->conteudo."</p>";
		}
	
	?>
	