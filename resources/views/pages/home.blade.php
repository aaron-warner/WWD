@extends('main')

@section('title', 'Home')

@section('content')

	<header class="cd-header">
		<div id="cd-logo">
			<a href="/">
				<img src="{{ asset('images/logo.png') }}" width="200" height="130" class="img-responsive" alt="Warner Web Design logo">
			</a>
		</div>
		<nav class="cd-primary-nav">
			<ul>
				<!-- inser more links here -->
				<li><a href="/">Home</a></li>
				<li><a href="/portfolio">Portfolio</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav> <!-- cd-primary-nav -->
	</header>
	<section id="cd-intro">
		<div id="cd-intro-tagline">
			<h1>Warner Web Design</h1>
			<a href="/contact" class="cd-btn">Get In Touch</a>
		</div> <!-- #cd-intro-tagline -->
	</section> <!-- #cd-intro -->

	<div class="cd-secondary-nav">
		<a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
		<nav>
			<ul>
				<li>
					<a href="#cd-placeholder-1">
						<b>Intro</b>
						<span></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-2">
						<b>Timeline</b>
						<span></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-3">
						<b>Experience</b>
						<span></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-4">
						<b>Stats</b>
						<span></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-5">
						<b>Contact</b>
						<span></span><!-- icon -->
					</a>
				</li>
			</ul>
		</nav>
	</div> <!-- .cd-secondary-nav -->
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Intro</h2>
			</div>
			<img src="{{ asset('images/aaron.jpg') }}" width="200" height="130" class="img-responsive img-center img-circle" alt="Aaron Warner, Web Developer">
			<hr>
			<p class="text-center">
				My name is Aaron Warner. I am an experienced Web Developer based in the West Midlands with a demonstrated history of working with strong businesses and clients to attain a strong web presence. I studied towards a Bachelor of Engineering (BEng) focused in Computer Technology/Computer Systems Technology from the University of Birmingham before persuing my desire to become a well-established and respected web developer. 
			</p>
		</section> <!-- #cd-placeholder-1 -->

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Timeline</h2>
			</div>
			<div class="timeline-container">
				<div class="timeline">

  					<div class="entry">
    					<div class="title">
							<h3>2017 - Present</h3>
							<p>Made in the Midlands</p>
    					</div>
    					<div class="body">
							<p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
							<ul>
								<li>Rerum sit libero possimus amet excepturi</li>
								<li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
								<li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2016 - 2017</h3>
							<p>LearnPlay Foundation</p>
    					</div>
    					<div class="body">
							<p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
							<ul>
								<li>Rerum sit libero possimus amet excepturi</li>
								<li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
								<li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2015-2016</h3>
							<p>University of Birmingham</p>
    					</div>
    					<div class="body">
							<p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
							<ul>
								<li>Rerum sit libero possimus amet excepturi</li>
								<li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
								<li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2013-2015</h3>
							<p>Halesowen College</p>
    					</div>
    					<div class="body">
							<p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
							<ul>
								<li>Rerum sit libero possimus amet excepturi</li>
								<li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
								<li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
							</ul>
    					</div>
  					</div>

				</div>
			</div>
		</section> <!-- #cd-placeholder-2 -->

		<section id="cd-placeholder-3" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Experience</h2>
			</div>
			<p class="text-center">
				Throughout my years within web development I have built and contributed to a wide variety of different web applications, whether it had been a client of the company I worked for or even a personal referance who wanted to initialise their web presence using my services.
			</p>
			<p class="text-center">
				Developing these web applications has been a great experience for me, throughout common practises I have learnt and utilised skills in the following areas:
			</p>

			<hr>

			<div class="row">

				<div class="col-sm-6">
					<h2>Front-End</h2>
					<hr>
					<ul class="bulleted">
						<li><p>HTML</p></li>
						<li><p>CSS</p></li>
						<li><p>LESS/SASS</p></li>
						<li><p>JavaScript</p></li>
						<li><p>jQuery</p></li>
						<li><p>Angular.js</p></li>
						<li><p>Photoshop/Illustrator</p></li>
						<li><p>Blade Templating Engine</p></li>
					</ul>
				</div>

				<div class="col-sm-6">
					<h2>Back-End</h2>
					<hr>
					<ul class="bulleted">
						<li><p>PHP</p></li>
						<li><p>SQL</p></li>
						<li><p>Laravel</p></li>
						<li><p>Linux</p></li>
						<li><p>Apache</p></li>
						<li><p>NGINX</p></li>
						<li><p>JavaScript</p></li>
						<li><p>GIT</p></li>
					</ul>
				</div>

			</div>

			<hr>

			<h2 class="text-center">
				Keen to see some of my work?
			</h2>
			<div class="text-center">
				<a href="/portfolio" class="btn btn-primary"><p>View My Portfolio</p></a>
			</div>

		</section> <!-- #cd-placeholder-3 -->

		<section id="cd-placeholder-4" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Stats</h2>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, minus nisi ipsam quasi. Reprehenderit quo dolorem ratione in, porro placeat nihil asperiores, ab earum excepturi sint non. Error officiis, sint expedita dolore fuga voluptates ipsam temporibus vero suscipit porro asperiores deserunt sapiente optio. Quas vero nam nihil, id suscipit, similique facere dicta velit, quis, commodi perspiciatis. Perferendis necessitatibus, in, sequi ipsum eum voluptates quisquam voluptatem, rerum fugiat deleniti voluptatum eius odio, expedita enim libero quaerat! Veniam eos, maiores nostrum mollitia reprehenderit, obcaecati repudiandae eius perspiciatis? Quo voluptatum ipsa voluptatem sequi esse eius consectetur, quae ea accusamus porro autem ipsum, quam dignissimos, nesciunt consequuntur quaerat. Numquam iure velit veniam saepe sunt enim asperiores hic nam aperiam illo officia molestias quis dicta autem incidunt consequatur dolor, explicabo corrupti nostrum odio ea laudantium magni, nulla. Eaque officiis, distinctio, dolores eligendi facilis tempore reiciendis illum iste sed temporibus rerum aliquid culpa dolor, et voluptatibus!
			</p>
		</section> <!-- #cd-placeholder-4 -->

		<section id="cd-placeholder-5" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Contact</h2>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, neque, tempora. Accusamus similique labore harum in ut repellat. Earum iusto non ex perspiciatis sequi a, provident nam optio, vitae ea vel illum excepturi aut fugiat quos. Fugit facere a, quidem quia perferendis ipsum impedit eaque repellendus esse, tenetur repellat natus voluptatem ab possimus laborum tempora qui nam vero et omnis. Sed ipsum possimus in, dignissimos optio itaque quis, reprehenderit vero vel tempora, maiores odit totam. Doloribus voluptatem similique possimus corporis pariatur labore, nulla, minima magnam, officia rerum vel alias, molestiae soluta quisquam ea. Necessitatibus hic vitae nisi ipsum cum a voluptatibus commodi eius ad minus animi cumque nulla suscipit itaque, reiciendis placeat modi sequi eligendi voluptatum. Quasi veritatis autem omnis, voluptatum hic eos dicta, repudiandae iusto rem error facere pariatur commodi impedit reprehenderit temporibus facilis magnam asperiores. Ipsam, illum commodi laboriosam neque eligendi eaque quisquam quidem illo sint eos. Esse velit provident, veritatis dolor facilis dignissimos commodi molestias saepe impedit excepturi qui odit repudiandae cumque? Sunt omnis voluptatum, eaque repellat, pariatur iure nobis cum eos repellendus voluptate culpa totam alias autem ea earum animi optio laudantium neque nisi suscipit in adipisci enim quisquam laboriosam! Cumque, fugit saepe alias mollitia dignissimos.
			</p>
		</section> <!-- #cd-placeholder-5 -->
	</main> <!-- .cd-main-content -->

@endsection

@section('javascript')

<script>

</script>

@endsection