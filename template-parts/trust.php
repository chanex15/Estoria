<?php
/**
 * Testimonials + FAQ + CTA + contact sections.
 *
 * @package Estoria
 */
?>
<section class="testimonials" aria-label="<?php esc_attr_e( 'Testimonials', 'estoria' ); ?>">
	<div class="container-x section-pad testi-grid">
		<div class="reveal">
			<p class="eyebrow"><?php esc_html_e( 'Testimonials', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'Owners who stopped thinking about tenants', 'estoria' ); ?></h2>
			<div class="testi-nav">
				<button type="button" data-testi-prev aria-label="<?php esc_attr_e( 'Previous testimonial', 'estoria' ); ?>">←</button>
				<button type="button" data-testi-next aria-label="<?php esc_attr_e( 'Next testimonial', 'estoria' ); ?>">→</button>
			</div>
			<div class="testi-dots">
				<button type="button" data-slide="0" class="is-active" aria-label="<?php esc_attr_e( 'Go to testimonial 1', 'estoria' ); ?>"></button>
				<button type="button" data-slide="1" aria-label="<?php esc_attr_e( 'Go to testimonial 2', 'estoria' ); ?>"></button>
				<button type="button" data-slide="2" aria-label="<?php esc_attr_e( 'Go to testimonial 3', 'estoria' ); ?>"></button>
			</div>
		</div>
		<div class="reveal">
			<div class="testi-card">
				<div class="testi-stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'estoria' ); ?>">★★★★★</div>
				<div class="testi-slide is-active">
					<blockquote class="testi-quote">“<?php esc_html_e( 'I bought a one-bedroom in Tower A and genuinely forgot about it — the operator handles everything and the payout lands on the 5th, every month.', 'estoria' ); ?>”</blockquote>
					<div class="testi-person"><span class="testi-avatar">MW</span><span><p class="testi-name">Marcus Whitfield</p><p class="testi-role"><?php esc_html_e( 'Investor · 2 units, Tower A', 'estoria' ); ?></p></span></div>
				</div>
				<div class="testi-slide">
					<blockquote class="testi-quote">“<?php esc_html_e( 'What sold me was the contract. The monthly amount is fixed in writing, not a projection. Eighteen months in, it has never been late.', 'estoria' ); ?>”</blockquote>
					<div class="testi-person"><span class="testi-avatar">ER</span><span><p class="testi-name">Elena Rodriguez</p><p class="testi-role"><?php esc_html_e( 'Investor · Corner Suite, Tower B', 'estoria' ); ?></p></span></div>
				</div>
				<div class="testi-slide">
					<blockquote class="testi-quote">“<?php esc_html_e( 'From viewing to closing took eleven days. Their legal team handled the paperwork and the apartment was in the rental pool a week later.', 'estoria' ); ?>”</blockquote>
					<div class="testi-person"><span class="testi-avatar">DO</span><span><p class="testi-name">David Okafor</p><p class="testi-role"><?php esc_html_e( 'Investor · Park Loft, Tower A', 'estoria' ); ?></p></span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="faq" id="faq">
	<div class="container-x section-pad faq-grid">
		<div class="reveal">
			<p class="eyebrow"><?php esc_html_e( 'FAQ', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'Questions investors always ask', 'estoria' ); ?></h2>
			<p class="sec-sub"><?php echo esc_html__( 'Still unsure? Call', 'estoria' ) . ' ' . esc_html( estoria_phone() ) . ' ' . esc_html__( '— an advisor will walk through the contract line by line, free and without pressure.', 'estoria' ); ?></p>
			<p style="margin-top:24px"><a class="btn-ghost" href="#contact"><?php esc_html_e( 'Contact sales office', 'estoria' ); ?></a></p>
		</div>
		<div class="faq-list">
			<div class="faq-item open reveal">
				<button type="button" class="faq-q" aria-expanded="true"><?php esc_html_e( 'How is the monthly income guaranteed?', 'estoria' ); ?><span class="faq-plus">+</span></button>
				<div class="faq-a"><div class="faq-a-inner"><p><?php esc_html_e( 'Your payout is a fixed contractual obligation from the hotel operator, not a revenue share estimate. The amount, schedule and penalties for delay are written into the management agreement before you close.', 'estoria' ); ?></p></div></div>
			</div>
			<div class="faq-item reveal">
				<button type="button" class="faq-q" aria-expanded="false"><?php esc_html_e( 'Do I need to manage tenants or repairs?', 'estoria' ); ?><span class="faq-plus">+</span></button>
				<div class="faq-a"><div class="faq-a-inner"><p><?php esc_html_e( 'No. The operator covers marketing, bookings, housekeeping, maintenance and guest support. You receive a monthly statement and a single net payout.', 'estoria' ); ?></p></div></div>
			</div>
			<div class="faq-item reveal">
				<button type="button" class="faq-q" aria-expanded="false"><?php esc_html_e( 'What are the real running costs?', 'estoria' ); ?><span class="faq-plus">+</span></button>
				<div class="faq-a"><div class="faq-a-inner"><p><?php esc_html_e( 'HOA, utilities for common areas, insurance and the operator fee are already deducted before your guaranteed figure. Property tax (~0.55% annually) is the only separate cost.', 'estoria' ); ?></p></div></div>
			</div>
			<div class="faq-item reveal">
				<button type="button" class="faq-q" aria-expanded="false"><?php esc_html_e( 'Can I stay in my own apartment?', 'estoria' ); ?><span class="faq-plus">+</span></button>
				<div class="faq-a"><div class="faq-a-inner"><p><?php esc_html_e( 'Yes. Owners get up to 21 personal-use nights per year with 30 days notice. Personal nights simply pause the guarantee pro-rata for those dates.', 'estoria' ); ?></p></div></div>
			</div>
			<div class="faq-item reveal">
				<button type="button" class="faq-q" aria-expanded="false"><?php esc_html_e( 'How do I exit or resell?', 'estoria' ); ?><span class="faq-plus">+</span></button>
				<div class="faq-a"><div class="faq-a-inner"><p><?php esc_html_e( 'You can list through us any time after 12 months. Because units carry an active income contract, they typically resell to other investors in 30–60 days for a flat 2% fee.', 'estoria' ); ?></p></div></div>
			</div>
		</div>
	</div>
</section>

<section class="cta-wrap" aria-label="<?php esc_attr_e( 'Call to action', 'estoria' ); ?>">
	<div class="container-x">
		<div class="cta-band reveal">
			<p class="cta-kicker"><?php esc_html_e( 'Limited release · Tower B, floors 9–14', 'estoria' ); ?></p>
			<h2><?php esc_html_e( 'Get the full price list and payout table this week', 'estoria' ); ?></h2>
			<p class="sub"><?php esc_html_e( '17 units left in the current release. Request a callback and we will reserve your viewing slot for Saturday.', 'estoria' ); ?></p>
			<div class="cta-actions">
				<button type="button" class="btn-white" data-open-callback><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
				<a class="btn-outline-w" href="<?php echo esc_url( estoria_phone_href() ); ?>"><?php echo esc_html( estoria_phone() ); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="contact" id="contact">
	<div class="container-x section-pad contact-grid">
		<div class="reveal">
			<p class="eyebrow"><?php esc_html_e( 'Contact', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'Visit the sales office or book a video tour', 'estoria' ); ?></h2>
			<p class="sec-sub"><?php esc_html_e( 'Tell us your budget and timeline — we will prepare a shortlist of available units with exact payout figures before we meet.', 'estoria' ); ?></p>
			<ul class="contact-list">
				<li><span class="contact-ico">◉</span><span><span class="contact-lbl"><?php esc_html_e( 'Address', 'estoria' ); ?></span><span class="contact-val"><?php echo esc_html( estoria_address() ); ?></span></span></li>
				<li><span class="contact-ico">☎</span><span><span class="contact-lbl"><?php esc_html_e( 'Phone', 'estoria' ); ?></span><a class="contact-val" href="<?php echo esc_url( estoria_phone_href() ); ?>"><?php echo esc_html( estoria_phone() ); ?></a></span></li>
				<li><span class="contact-ico">✉</span><span><span class="contact-lbl"><?php esc_html_e( 'Email', 'estoria' ); ?></span><a class="contact-val" href="mailto:<?php echo esc_attr( estoria_email() ); ?>"><?php echo esc_html( estoria_email() ); ?></a></span></li>
				<li><span class="contact-ico">◷</span><span><span class="contact-lbl"><?php esc_html_e( 'Hours', 'estoria' ); ?></span><span class="contact-val"><?php echo esc_html( estoria_hours() ); ?></span></span></li>
			</ul>
			<div class="contact-map">
				<iframe title="<?php esc_attr_e( 'Estoria sales office location', 'estoria' ); ?>" src="https://www.openstreetmap.org/export/embed.html?bbox=-75.60%2C39.14%2C-75.48%2C39.20&layer=mapnik&marker=39.17%2C-75.54" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="contact-open">
				<span class="contact-open-live"><span class="pulse-dot"></span><?php esc_html_e( 'Office open now', 'estoria' ); ?></span>
				<span class="contact-open-note"><?php esc_html_e( 'Avg. reply in 27 minutes · Sat viewings available', 'estoria' ); ?></span>
			</div>
		</div>
		<div class="reveal">
			<div class="contact-panel">
				<div id="contactWrap">
					<form id="contactForm" class="form-grid" novalidate>
						<div class="form-row-2">
							<div class="field">
								<label for="cName"><?php esc_html_e( 'Full name *', 'estoria' ); ?></label>
								<input id="cName" class="input-line" type="text" placeholder="Jane Cooper" autocomplete="name">
							</div>
							<div class="field">
								<label for="cEmail"><?php esc_html_e( 'Email *', 'estoria' ); ?></label>
								<input id="cEmail" class="input-line" type="email" placeholder="jane@email.com" autocomplete="email">
							</div>
						</div>
						<div class="form-row-2">
							<div class="field">
								<label for="cPhone"><?php esc_html_e( 'Phone', 'estoria' ); ?></label>
								<input id="cPhone" class="input-line" type="tel" placeholder="(480) 000-0000" autocomplete="tel">
							</div>
							<div class="field">
								<label for="cInterest"><?php esc_html_e( 'I am interested in', 'estoria' ); ?></label>
								<select id="cInterest" class="input-line">
									<option>Studio · ~$128k</option>
									<option>One-bedroom · ~$186k</option>
									<option>Two-bedroom · ~$249k</option>
									<option>Premium residence · $300k+</option>
								</select>
							</div>
						</div>
						<div class="field">
							<label for="cMsg"><?php esc_html_e( 'Message *', 'estoria' ); ?></label>
							<textarea id="cMsg" class="input-line" rows="4" placeholder="<?php esc_attr_e( 'My budget is around $190,000 and I would like payout examples…', 'estoria' ); ?>"></textarea>
						</div>
						<p class="form-error" id="contactError" hidden><?php esc_html_e( 'Please fill in your name, a valid email and a short message.', 'estoria' ); ?></p>
						<button type="submit" id="contactSubmit" class="btn-primary btn-block"><?php esc_html_e( 'Send message', 'estoria' ); ?></button>
						<p class="form-note"><?php esc_html_e( 'By sending, you agree to be contacted about Estoria availability. No spam, ever.', 'estoria' ); ?></p>
					</form>
				</div>
				<div class="contact-success" id="contactDone" hidden>
					<div class="success-dot">✓</div>
					<h3><?php esc_html_e( 'Message received', 'estoria' ); ?></h3>
					<p class="sec-sub" style="margin:8px auto 0;max-width:380px"><?php esc_html_e( 'Thanks', 'estoria' ); ?> <span id="contactDoneName"></span> — <?php esc_html_e( 'an advisor will reply within one business day with availability and payout figures.', 'estoria' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
