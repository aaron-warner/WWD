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
			<img src="{{ asset('images/aaron.jpg') }}" width="200" height="130" class="img-responsive img-center img-circle" alt="Aaron Warner, Web Developer">
			<hr>
			<p class="text-center">
				My name is Aaron Warner. I am an experienced Web Developer based in the West Midlands with a demonstrated history of working with strong businesses and clients to attain a strong web presence. I studied towards a Bachelor of Engineering (BEng) focused in Computer Technology/Computer Systems Technology from the University of Birmingham before persuing my desire to become a well-established and respected web developer. 
			</p>
		</section> <!-- #cd-placeholder-1 -->

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<h2>Timeline</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat omnis quia maiores, et. Aut facilis ducimus, labore culpa, nemo eum qui quae, rem libero aspernatur, inventore quos modi a ex sit. Nulla iure odio at quo corporis assumenda ea fugiat adipisci aspernatur incidunt sapiente consequatur, ullam cumque dolorem facilis laboriosam a dolore similique velit esse. Eveniet omnis voluptas, nobis dicta cupiditate odit, similique mollitia eos dignissimos provident voluptatem adipisci ullam facilis alias! Reprehenderit voluptatem provident ut veniam aliquid, labore culpa.
			</p>
		</section> <!-- #cd-placeholder-2 -->

		<section id="cd-placeholder-3" class="cd-section cd-container">
			<h2>Experience</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias sunt mollitia atque tempore ea cum exercitationem, quisquam est consectetur tempora ipsam, obcaecati voluptate a. Autem minus cumque voluptatem eaque fugit nostrum reprehenderit incidunt officia. Nesciunt reiciendis delectus officiis fugit sint at totam nisi commodi repellendus iusto dolorum molestias dignissimos natus, impedit quam atque ex voluptas ut facere assumenda iure incidunt rerum vitae accusamus? Et voluptatibus unde, fugiat tenetur sed dolore, praesentium magni illo nobis incidunt, possimus doloremque dolorem sunt. Aliquid ducimus delectus esse voluptatem officia perferendis, a voluptate omnis adipisci expedita distinctio praesentium natus veniam accusamus iure, quasi, inventore reiciendis.
			</p>
		</section> <!-- #cd-placeholder-3 -->

		<section id="cd-placeholder-4" class="cd-section cd-container">
			<h2>Stats</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, minus nisi ipsam quasi. Reprehenderit quo dolorem ratione in, porro placeat nihil asperiores, ab earum excepturi sint non. Error officiis, sint expedita dolore fuga voluptates ipsam temporibus vero suscipit porro asperiores deserunt sapiente optio. Quas vero nam nihil, id suscipit, similique facere dicta velit, quis, commodi perspiciatis. Perferendis necessitatibus, in, sequi ipsum eum voluptates quisquam voluptatem, rerum fugiat deleniti voluptatum eius odio, expedita enim libero quaerat! Veniam eos, maiores nostrum mollitia reprehenderit, obcaecati repudiandae eius perspiciatis? Quo voluptatum ipsa voluptatem sequi esse eius consectetur, quae ea accusamus porro autem ipsum, quam dignissimos, nesciunt consequuntur quaerat. Numquam iure velit veniam saepe sunt enim asperiores hic nam aperiam illo officia molestias quis dicta autem incidunt consequatur dolor, explicabo corrupti nostrum odio ea laudantium magni, nulla. Eaque officiis, distinctio, dolores eligendi facilis tempore reiciendis illum iste sed temporibus rerum aliquid culpa dolor, et voluptatibus!
			</p>
		</section> <!-- #cd-placeholder-4 -->

		<section id="cd-placeholder-5" class="cd-section cd-container">
			<h2>Contact</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab consequatur fugiat delectus sint in velit quo possimus, ullam aspernatur ipsa natus tenetur nulla distinctio doloremque totam. Earum enim sed dolorum, exercitationem temporibus quaerat eos, accusantium amet facilis facere eaque commodi optio quidem rem minima nisi laborum quae animi nostrum aut voluptates veniam. Cum neque quam fuga sapiente quidem eum necessitatibus nulla, cupiditate a, repudiandae iusto in dolor eaque commodi nostrum consequuntur dolores velit eligendi dolorem quae. Distinctio quae, cumque aliquid quos consequuntur perspiciatis voluptates, laboriosam velit qui et aut sint esse nemo voluptatibus, dolore veritatis natus facilis commodi sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, neque, tempora. Accusamus similique labore harum in ut repellat. Earum iusto non ex perspiciatis sequi a, provident nam optio, vitae ea vel illum excepturi aut fugiat quos. Fugit facere a, quidem quia perferendis ipsum impedit eaque repellendus esse, tenetur repellat natus voluptatem ab possimus laborum tempora qui nam vero et omnis. Sed ipsum possimus in, dignissimos optio itaque quis, reprehenderit vero vel tempora, maiores odit totam. Doloribus voluptatem similique possimus corporis pariatur labore, nulla, minima magnam, officia rerum vel alias, molestiae soluta quisquam ea. Necessitatibus hic vitae nisi ipsum cum a voluptatibus commodi eius ad minus animi cumque nulla suscipit itaque, reiciendis placeat modi sequi eligendi voluptatum. Quasi veritatis autem omnis, voluptatum hic eos dicta, repudiandae iusto rem error facere pariatur commodi impedit reprehenderit temporibus facilis magnam asperiores. Ipsam, illum commodi laboriosam neque eligendi eaque quisquam quidem illo sint eos. Esse velit provident, veritatis dolor facilis dignissimos commodi molestias saepe impedit excepturi qui odit repudiandae cumque? Sunt omnis voluptatum, eaque repellat, pariatur iure nobis cum eos repellendus voluptate culpa totam alias autem ea earum animi optio laudantium neque nisi suscipit in adipisci enim quisquam laboriosam! Cumque, fugit saepe alias mollitia dignissimos.
			</p>
		</section> <!-- #cd-placeholder-5 -->
	</main> <!-- .cd-main-content -->

@endsection