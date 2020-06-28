<?php
								if(!isset($_SESSION['name']))
								{
									echo "<li><b>Welcome</b></li>";
								}else
								{
									echo "<li><b>Welcome " . $_SESSION['name'] . "!</b></li>";
								}
							?>