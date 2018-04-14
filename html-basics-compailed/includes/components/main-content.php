<div class="content-area">
			<div class="right-pane" style="float: right;">
				<div class="main-content">
					<img src="images/technology-blue-circuit-board_1187x528.jpg" width="270px" height="200px" alt="technology-blue" style="float: left;">
							<p>Information technology (IT) is the application of computers to store, retrieve, transmit and manipulate data,[1] or information, often in the context of a business or other enterprise.[2] IT is considered to be a subset of information and communications technology (ICT). In 2012, Zuppo proposed an ICT hierarchy where each hierarchy level "contain[s] some degree of commonality in that they are related to technologies that facilitate the transfer of information and various types of electronically mediated communications".[3]</p>
							<p>The term is commonly used as a synonym for computers and computer networks, but it also encompasses other information distribution technologies such as television and telephones. Several industries are associated with information technology, including computer hardware, software, electronics, semiconductors, internet, telecom equipment, and e-commerce.[4] [a]</p>

							<p>Humans have been storing, retrieving, manipulating, and communicating information since the Sumerians in Mesopotamia developed writing in about 3000 BC,[6] but the term information technology in its modern sense first appeared in a 1958 article published in the Harvard Business Review; authors Harold J. Leavitt and Thomas L. Whisler commented that "the new technology does not yet have a single established name. We shall call it information technology (IT)." Their definition consists of three categories: techniques for processing, the application of statistical and mathematical methods to decision-making, and the simulation of higher-order thinking through computer programs.[7]</p>
				</div>
				<div class="sub-gallery">
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'London')">London</button>
						<button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
						<button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
					</div>
					<div id="London" class="tabcontent">
						<h3>London</h3>
						<p>London is the capital city of England.</p>
					</div>
					<div id="Paris" class="tabcontent">
						<h3>Paris</h3>
						<p>Paris is the capital of France.</p> 
					</div>
					<div id="Tokyo" class="tabcontent">
						<h3>Tokyo</h3>
						<p>Tokyo is the capital of Japan.</p>
					</div>
					<script>
						function openCity(evt, cityName) {
							var i, tabcontent, tablinks;
							tabcontent = document.getElementsByClassName("tabcontent");
								for (i = 0; i < tabcontent.length; i++) {
										        tabcontent[i].style.display = "none";
								}
							tablinks = document.getElementsByClassName("tablinks");
								for (i = 0; i < tablinks.length; i++) {
										        tablinks[i].className = tablinks[i].className.replace(" active", "");
								}
							document.getElementById(cityName).style.display = "block";
							evt.currentTarget.className += " active";
						}
					</script>
					<style >
						/* Style the tab */
						.tab {
						    overflow: hidden;
						    border: 1px solid #ccc;
						    background-color: #f1f1f1;
						}
						/* Style the buttons inside the tab */
						.tab button {
						    background-color: inherit;
						    float: left;
						    border: none;
						    outline: none;
						    cursor: pointer;
						    padding: 14px 16px;
						    transition: 0.3s;
						    font-size: 17px;
						}
						/* Change background color of buttons on hover */
						.tab button:hover {
						    background-color: #ddd;
						}
						/* Create an active/current tablink class */
						.tab button.active {
						    background-color: #ccc;
						}
						/* Style the tab content */
						.tabcontent {
						    display: none;
						    padding: 6px 12px;
						    border: 1px solid #ccc;
						    border-top: none;
						}
					</style>
					<div>
						<div class="jcarousel-wrapper">
			                <div class="jcarousel">
			                    <ul>
			                        <li><img src="images/gallery (1).jpg" alt="Image 1"></li>
			                        <li><img src="images/gallery (2).jpg" alt="Image 2"></li>
			                        <li><img src="images/gallery (3).jpg" alt="Image 3"></li>
			                        <li><img src="images/gallery (4).jpg" alt="Image 4"></li>
			                        <li><img src="images/gallery (5).jpg" alt="Image 5"></li>
			                        <li><img src="images/gallery (6).jpg" alt="Image 6"></li>
			                    </ul>
			                </div>

			                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
			                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

			                <p class="jcarousel-pagination"></p>
			            </div>
					</div>

				</div>
			</div>	
			<div class="left-pane" style="float: left;">
					<div class="latest-news">	
							<h3>Latest News</h3>
							<ul class="l-news">
								<li><img src="images/photo.png" alt="latest-news" style="float: left;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19</p></li>
								<li><img src="images/photo.png" alt="latest-news" style="float: right;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the relet has sururieso trujhp</p></li>
								
								<li><img src="images/photo.png" alt="latest-news" style="float: left;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19</p></li>
								<li><img src="images/photo.png" alt="latest-news" style="float: right;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the relet has sururieso trujhp</p></li>
								<li><img src="images/photo.png" alt="latest-news" style="float:left;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the relet has sururieso trujhp</p></li>
								<li><img src="images/photo.png" alt="latest-news" style="float: right;">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the relet has sururieso trujhp</p></li>
							</ul>
					</div>
					<div class="upcoming-events">				
							<h3>Upcoming Events</h3>
							<form>
								<label for="ue">Event Title</label>
								<input type="text" id="ue" name="up events" placeholder="2017/10/12" size="10">
								<a href="#ue"><i class="fa fa-calendar" aria-hidden="true"></i></a>
							</form>
							<ul class="up-events">
								<li>
									<img src="images/picture.png" alt="ue">
									<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the relet has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Alduase of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
								</li>
								<li>
									<img src="images/picture.png" alt="ue">
									<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the relet has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Alduase of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
								</li>
							</ul>
							<label><a target="_blank" href="#">Read More</a></label>
							<a target="_blank" href="#"><i class="fa fa-forward" aria-hidden="true"></i></a>
						
					
						
					</div>
					
				
			</div>
			<div class="feature-boxses" style="float: right;">
					<div class="feed-back">
							<h3>Feedback</h3>
							<form class="fd">
								<input checked type="radio" name="option 01">
								<label>Option 01</label> <br>
								<input type="radio" name="option 02">
								<label>Option 02</label> <br>
								<input type="radio" name="option 03">
								<label>Option 03</label> <br>
								<input disabled type="radio" name="option 04">
								<label>Option 04</label> <br>
								<input disabled checked type="radio" name="option 05">
								<label>Option 05</label> <br>
								<input type="radio" name="option 06">
								<label>Option 06</label> <br><br>
								<input type="submit" name="submit" value="SUBMIT">
								<input type="reset" name="reset" value="CANCEL">
							</form>
					</div>
					<div class="feature-box2">
						
							<h3>Mid Year Intake</h3>
							<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>

							<img class="calendar" src="images/calendar_icon.png" alt="calendar">
							<form>
								<input type="email" name="email" placeholder="Email Address Hear...">
								<input type="submit" name="apply" value="Apply">
							</form>
					</div>
					<div class="feature-box">
						
							<img src="https://maps.googleapis.com/maps/api/staticmap?center=Pace%20Institute,%20370,%20Level%203,%20High%20Level%20Rd,%20Pannipitiya%2010230&zoom=15&size=220x220&maptype=roadmap&key=AIzaSyBly9k3aNmOF4eIn58cQmh4kfvD3ojkM3o" alt="Google static map"/>
							<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they</p>
					</div>
			</div>
		</div>

		<script>
			$(function(){
				$("#ue").datepicker({
					changeMonth: true,
					changeYear: true,
					yearRange: "1980:2009",
					dateFormat:"dd-mm-yy"
				});
			})

		</script>