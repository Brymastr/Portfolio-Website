
<?php include 'header.php'; ?>
<!-- CONTENT -->
<div id="content">
	<div class="page">
		<div class="content-block skin">
			<h2>AUTONOMOUS ROBOT</h2>
			<table>
				<tr class="info-row">
					<td>Immediately after my first semseter at BCIT, and with all my
						shiny new Java knowledge fresh in my brain, I took a five week
						project-planning semester. During this time we were tasked with
						the challenge of building a robot using the Lego NXT Mindstorms
						technology and the <a
						href="http://lejos.sourceforge.net/p_technologies/nxt/nxj/api/">LeJOS
							NXT API</a>. This was a five man team project in which we each
						had specific roles.
					</td>
					<td><img class="info-img" src="images/robot-1-small.png" alt="robot" />
					</td>
				</tr>
			</table>
			<table>
				<tr class="info-row">
					<td><img class="info-img" src="images/robot-2-small.png" alt="robot" />
					</td>
					<td>The course was aimed at teaching project management so many of
						our assignments were to create and update a project plan. I
						learned to use Microsoft Project to build a crisp, clear project
						plan including a Gantt chart and network diagram with early start,
						late start, early finish, late finish, and float (slack) for each
						task.</td>
				</tr>
			</table>
			<table>
				<tr class="info-row">
					<td>Of the five courses I chose to take on the most difficult; of
						course I didn't know this at the time! The challenge was to pick
						up the "amulet" on one of the specified blocks (at right of
						picture) and take it to the "portal". My plan was to drive the
						robot from the base (at the left of picture) to the ramp and drive
						down it. The plan was to then drive parallel to the three amulets
						while spinning the pickup arm. This proved much too difficult and
						unreliable so I chose instead to drive straight off the base
						without the ramp and go pick up the amulets.</td>
					<td><img class="info-img" src="images/table-4-small.png" alt="table 4" />
					</td>
				</tr>
			</table>
			<table>
				<tr class="info-row">
					<td><img class="info-img" src="images/robot-5-small.png" alt="robot" />
					</td>
					<td>For all of these challenges the robot could not be touched
						until it completed the course. The first challenge was a simple
						maze that the robot had to manuever. The second challenge was a
						rectangular room. The wall of the room alternated white and black
						and the white parts of the walls were called doors. The robot was
						programmed to scan the color of the wall and push on the white
						doors to find the one that opened. The third challenged pitched
						our robot against three other robots in a sumo wrestle type
						battle. Challenge five was a continuation of challenge four in
						that the robot had tos carry the amulet from four and manuever
						another maze to place the amulet in a basket.</td>
				</tr>
			</table>
		</div>
		<div class="content-block skin">
			<div id="hiding-nav">
				<h2>Here is the code for challenge #4</h2>
				<a href="#" class="hide"><h3>Show</h3> </a> <a href="#" class="show"><h3>Hide</h3>
				</a>
				<ul id="hiding-menu" class="tran1">
					<li><pre class="prettyprint">
							<?php $file_handle = fopen("code.txt", "r");
							while (!feof($file_handle)) {
				   					$line = fgets($file_handle);
				   					echo $line;
								}
								fclose($file_handle);
								?>
						</pre></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'?>