<?php get_header(); ?>

<main class="home">

	<section class="hero">
		<video class="hero-video" autoplay muted loop playsinline preload="none">
			<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/videos/hero_bg.mp4' ); ?>" type="video/mp4">
		</video>
		<div class="hero-overlay"></div>
		<div class="hero-overlay-dark"></div>
		<div class="hero-content">
			<p class="hero-eyebrow">A Family Advocacy Group</p>
			<h1>Cadington &amp; Co.</h1>
			<p class="hero-tagline">Need help seeing the light at the end of the tunnel? Reach out today for housing, job assistance, and the resources you deserve.</p>
			<a class="button button--invert" href="#contact">Get Started</a>
		</div>
	</section>

	<section class="section-block is-light" id="about">
		<div class="section-inner">
			<p class="eyebrow">Who We Are</p>
			<h2 class="section-heading">About Cadington &amp; Co.</h2>
			<div class="about-row">
				<div class="about-text-box">
					<p class="about-name">Joanna Cade <span class="about-role">&mdash; CEO and Founder</span></p>
					<p class="section-lead about-lead">Cadington &amp; Co. LLC is a community-based service provider offering non-clinical support services designed to connect individuals and families with essential resources, guidance, and structured support.</p>
					<p class="about-quote">&ldquo;We serve as a Community Logistics Hub. I am a connector, an advocate, and a navigator. My business is built on the belief that no one should be left behind simply because a system is too complex to navigate.&rdquo;</p>
					<p class="about-quote-attribution">&mdash; Joanna Cade</p>
					<span class="about-accent" aria-hidden="true"></span>
				</div>
				<div class="about-media">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/joianna_cade.png' ); ?>" alt="Joanna Cade">
				</div>
			</div>
		</div>
	</section>

	<section class="section-block is-light" id="who-we-serve">
		<div class="section-inner">
			<p class="eyebrow">Two Audiences, One Mission</p>
			<h2 class="section-heading">Who We Serve</h2>
			<div class="who-we-serve-grid">
				<article class="who-card who-card--families">
					<div class="who-card-media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Who_We_Serve_A.jpg' ); ?>" alt="A family gathered together, laughing">
						<h3>Individuals &amp; Families</h3>
					</div>
					<div class="who-card-body">
						<p>Direct, one-on-one support connecting you with the resources, guidance, and structure you need.</p>
						<a class="button" href="#services">See Services</a>
					</div>
				</article>
				<article class="who-card who-card--orgs">
					<div class="who-card-media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Who_We_Serve_B.jpg' ); ?>" alt="Professionals meeting in an office setting">
						<h3>Organizations &amp; Agencies</h3>
					</div>
					<div class="who-card-body">
						<p>Contracted support services that extend your team's capacity without disrupting your workflow.</p>
						<a class="button" href="#why">Why Partner</a>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section-block is-light" id="services">
		<div class="section-inner">
			<p class="eyebrow">What We Offer</p>
			<h2 class="section-heading">Our Services</h2>
			<div class="services-grid">
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></span>
					<div class="service-text">
						<h3>Notary</h3>
						<p>Certified notary services to help you complete and authenticate important documents.</p>
					</div>
				</article>
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7"/><path d="M5 10v9h14v-9"/><path d="M9 19v-5h6v5"/></svg></span>
					<div class="service-text">
						<h3>Rental Assistance</h3>
						<p>Support finding and applying for rental assistance programs to help maintain stable housing.</p>
					</div>
				</article>
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg></span>
					<div class="service-text">
						<h3>Food Assistance</h3>
						<p>Guidance connecting you with local food banks, pantries, and nutrition assistance programs.</p>
					</div>
				</article>
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span>
					<div class="service-text">
						<h3>Utilities Assistance</h3>
						<p>Help accessing programs that assist with electric, gas, and water utility costs.</p>
					</div>
				</article>
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></span>
					<div class="service-text">
						<h3>Job Assistance</h3>
						<p>Job readiness support, referrals, and resources to help you find and keep employment.</p>
					</div>
				</article>
				<article class="service-card">
					<span class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
					<div class="service-text">
						<h3>Mental/<wbr>Behavioral Health Services</h3>
						<p>Connections to non-clinical behavioral health support and community-based care resources.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section-block is-accent">
		<div class="section-inner">
			<p class="eyebrow eyebrow--invert">Trusted Partners</p>
			<h2 class="section-heading">We Work Alongside</h2>
			<ul class="partners-list">
				<li>Behavioral health agencies</li>
				<li>Group homes</li>
				<li>Courts &amp; legal systems</li>
				<li>Community organizations</li>
				<li>Reentry &amp; probation programs</li>
				<li>Business Outreach</li>
			</ul>
		</div>
	</section>

	<section class="section-block is-light" id="why">
		<div class="section-inner">
			<p class="eyebrow">The Cadington Difference</p>
			<h2 class="section-heading">Why Partner with Cadington &amp; Co. LLC?</h2>
			<p class="section-lead"><em>Because we don&rsquo;t just offer services &mdash; we fill the gaps your system doesn&rsquo;t have time to address.</em></p>
			<ul class="why-list">
				<li>Flexible contracting options</li>
				<li>Professional, reliable, and responsive</li>
				<li>Designed to support YOUR workflow &mdash; not disrupt it</li>
			</ul>
		</div>
	</section>

	<section class="section-block is-dark cta" id="contact">
		<div class="section-inner">
			<p class="eyebrow eyebrow--invert">Let&rsquo;s Talk</p>
			<h2 class="section-heading">Get in Touch</h2>
			<p class="section-lead">Have questions or want to learn more about how we can help?</p>

			<div class="contact-form-panel">
				<span class="contact-form-panel-accent contact-form-panel-accent--tl" aria-hidden="true"></span>
				<span class="contact-form-panel-accent contact-form-panel-accent--br" aria-hidden="true"></span>
				<?php echo do_shortcode( '[wpforms id="6"]' ); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
