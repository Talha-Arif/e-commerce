

<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 footer-links">
            <h4>Questions</h4>
            <ul>
           <?php

foreach($data as $d){ ?>  
     <li><i class="bx bx-chevron-right"></i> 
			<?php echo $d->question; ?>
	 </li>  
	<?php } ?>
  
            </ul>
     
	
	</div>
	 </div>
	</div>



	
